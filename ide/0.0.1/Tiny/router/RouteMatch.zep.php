<?php

namespace Tiny\Router;

class RouteMatch
{
    /**
     * @var Route
     * 	
     */
    protected $route;
    /**
     * @var Array
     * 	
     */
    protected $params;

    /**
     * @var Route
     * 	
     */
	public function getRoute() {}

    /**
     * @var Array
     * 	
     */
	public function getParams() {}

    /**
     * @var Array
     * 	
     *
     * @param mixed $params 
     */
	public function setParams($params) {}

    /**
     * @param mixed $route 
     * @param array $params 
     */
	public function __construct($route, $params = array()) {}

    /**
     * @param string $key 
     * @param mixed $value 
     */
	public function set($key, $value) {}

    /**
     * @param string $key 
     */
	public function get($key) {}

}
