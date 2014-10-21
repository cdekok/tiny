namespace Tiny\Router;

class RouteMatch {

	/**
	 * @var Route
	 */
	protected route {
		get
	};

	/**
	 * @var Array
	 */
	protected params {
		get, set
	};

	public function __construct(<Route> route, array params = [])
	{
		let this->route = route;
		let this->params = params;
	}

	public function set(string key, value)
	{
		let this->params[key] = value;
	}

	public function get(string! key)
	{
		if isset(this->params[key]) {
			return this->params[key];
		}
	}
}