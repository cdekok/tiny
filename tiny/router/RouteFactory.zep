namespace Tiny\Router;

class RouteFactory {
	
	/**
	 * Create route
	 * 
	 * @param  string name
	 * @param  string path
	 * @param  array  options
	 * @return Route
	 */
	public function create(string! name, string! path, array options = [])
	{
		var route;
		let route = new Route(name, path);
		if isset(options["default"]) {
			route->setDefaults(options["default"]);
		}

		if isset(options["methods"]) {
			route->setMethods(options["methods"]);
		}

		return route;
	}
}