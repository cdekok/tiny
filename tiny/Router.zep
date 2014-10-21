namespace Tiny;

class Router implements Router\RouterInterface
{

	/**
	 * Collection of routes
	 * 
	 * @type \ArrayObject
	 */
	protected routes {
		set, get
	};


	protected routeFactory;

	public function __construct()
	{
		let this->routes = new \ArrayObject;		
		let this->routeFactory = new Router\RouteFactory;
	}

	/**
	 * Add route
	 * @param string name
	 * @param string path
	 * @param array  options
	 * @return Router\Route
	 */
	public function add(string! name, string! path, array options = [])
	{
		if isset(this->routes[name])	{
			throw new Router\Exception\RouteExistsException("Route exists ".name);
		}
		var route;
		let route = this->routeFactory->create(name, path, options);
		this->routes->offsetSet(name, route);		
		return route;
	}	

	/**
	 * Match routing
	 * 
	 * @param  string uri
	 * @param  array  server
	 * @return Router\RouteMatch|null
	 */
	public function match(string! uri, array server = null) 
	{
		var match;
		var route;
		for route in this->routes->getArrayCopy() {			
			let match = route->match(uri, server);
			if match {
				return match;
			}
		}
	}

    /**
     * 
     * @param string name
     * @param array params
     * @throws Exception\RouteDoesNotExistsException
     */
	public function assemble(string! name, array params = []) {
		if !this->routes->offsetExists(name) {
			throw new Router\Exception\RouteDoesNotExistsException("Route does not exists");
		}
		return this->routes->offsetGet(name)->assemble(params);
	}

}
