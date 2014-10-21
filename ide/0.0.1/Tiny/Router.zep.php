<?php

namespace Tiny;

class Router implements \Tiny\Router\RouterInterface
{
    /**
     * Collection of routes
     * 	
     * @type \ArrayObject
     * 	
     */
    protected $routes;

    protected $routeFactory;

    /**
     * Collection of routes
     * 	
     * @type \ArrayObject
     * 	
     *
     * @param mixed $routes 
     */
	public function setRoutes($routes) {}

    /**
     * Collection of routes
     * 	
     * @type \ArrayObject
     * 	
     */
	public function getRoutes() {}


	public function __construct() {}

    /**
     * Add route
     * @param string name
     * @param string path
     * @param array  options
     * @return Router\Route
     * 	
     *
     * @param string $name 
     * @param string $path 
     * @param array $options 
     */
	public function add($name, $path, $options = array()) {}

    /**
     * Match routing
     * 	
     * @param  string uri
     * @param  array  server
     * @return Router\RouteMatch|null
     * 	
     *
     * @param string $uri 
     * @param array $server 
     */
	public function match($uri, $server = null) {}

    /**
     * @throws Exception\RouteDoesNotExistsException
     * @param string $name 
     * @param array $params 
     * @param array  s
     */
	public function assemble($name, $params = array()) {}

}
