namespace Tiny\Router;

interface RouterInterface
{
	/**
	 * Match routring
	 * 
	 * @param  string uri
	 * @param  array  server
	 * @return RouteMatchInterface
	 */
	public function match(string uri, array server);

	/**
	 * Assemble routing
	 * 
	 * @param  string name
	 * @param  array  params = []
	 * @return string
	 */
	public function assemble(string name, array params = []);
}