/**
 * Tiny router
 */

namespace Tiny\Router;

class Route {

	/**
	 * @var string Route name
	 */
	protected name {
		get
	};

	/**
	 * @var string Route path
	 */
	protected path {
		get
	};

	/**
	 * @var string
	 */
	protected regex;

	/**
	 * @var string
	 */
	protected tokens;

	/**
	 * @type {Array}
	 */
	protected defaults = [] {
		get, set
	};

	/**
	 * @type {Array}
	 */
	protected methods = [] {
		get, set
	};

	/**
	 * @type {Array}
	 */
	private params = [];

	/**
	 * @param  string name
	 * @param  string path	 
	 */
	public function __construct(string! name, string! path)	
	{
		let this->name = name;
		let this->path = path;
	}

	/**
	 * Match route
	 * 
	 * @param string uri
	 * @param array  server
	 * @return bool|RouteMatch
	 */
	public function match(string! uri, array server = null)
	{
		this->init();
		var path;
		let path = parse_url(uri, PHP_URL_PATH);		
		if !empty(this->methods) {
			var method = "get";
			if isset(server["REQUEST_METHOD"]) {
				let method = strtolower(server["REQUEST_METHOD"]);
			}			
			if (!in_array(method, this->methods)) {
				return false;
			}
		}

		array matches = [];
		string regex;
		let regex = "@^" . this->regex . "$@";
		if (preg_match(regex, path, matches)) {
			var index, match;
			for index, match in matches {
				if (is_numeric(index)) {
					unset(matches[index]);
				}
			}
			return new RouteMatch(this, array_merge(this->defaults, matches));
		}

		return false;		
	}

	/**
	 * [replaceCallback description]
	 * @param  {[type]} array matches       [description]
	 * @return {[type]}       [description]
	 */
	public function replaceCallback(array matches) -> string
	{
		if (isset(this->params[matches[2]])) {
			return matches[1] . this->params[matches[2]];
		}
		return "";
	}

 	/**
	* @param array params
	* @return string
	* @throws Exception\MissingParameterException
	*/
	public function assemble(array params = [])
	{
		this->init();
		if this->tokens {
			var token;
			for token in this->tokens {
				var name;
				var optional;
				let name = current(token);
				let optional = next(token);				

				if optional || isset(params[name]) {
					continue;
				}

				throw new Exception\MissingParameterException(this->getName(), name);
			}
		}
		let this->params = params;
		return preg_replace_callback("@{([^A-Za-z]*)([A-Za-z]+)[?]?(?::[^}]+)?}@", [this, "replaceCallback"], this->path);
	}

	/**
	 * Init the route for match/assemble
	 * 
	 * @return void
	 */
	protected function init()
	{
		if this->regex {
			return;
		}
		let this->regex = this->path;
		var matches = [];
		var fullString;
		var name;
		var optional;
		var constraint;
		var replace;
		var count;

		let count = preg_match_all("@{([^A-Za-z]*([A-Za-z]+))([?]?)(?::([^}]+))?}@", this->regex, matches);
		if count {
			let this->tokens = new \SplFixedArray(count);
			var index, token;
			for index, token in matches[1] {
				let fullString = matches[1][index];
				let name = matches[2][index];
				let optional = !empty(matches[3][index]);
				let constraint = empty(matches[4][index]) ? ".*" : matches[4][index];
				if (optional) {
			 		let replace = sprintf("(?:%s(?<%s>%s))?", str_replace(name, "", fullString), name, constraint);
				} else {
				 	let replace = sprintf("(?<%s>%s)", name, constraint);
				}
				let this->regex = str_replace(matches[0][index], replace, this->regex);
				let this->tokens[index] = [name, optional];				
			}
		}
	}
}