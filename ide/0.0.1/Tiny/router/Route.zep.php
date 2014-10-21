<?php

namespace Tiny\Router;

class Route
{
    /**
     * @var string Route name
     * 	
     */
    protected $name;
    /**
     * @var string Route path
     * 	
     */
    protected $path;
    /**
     * @var string
     * 	
     */
    protected $regex;
    /**
     * @var string
     * 	
     */
    protected $tokens;
    /**
     * @type {Array}
     * 	
     */
    protected $defaults = array();
    /**
     * @type {Array}
     * 	
     */
    protected $methods = array();
    /**
     * @type {Array}
     * 	
     */
    private $params = array();

    /**
     * @var string Route name
     * 	
     */
	public function getName() {}

    /**
     * @var string Route path
     * 	
     */
	public function getPath() {}

    /**
     * @type {Array}
     * 	
     */
	public function getDefaults() {}

    /**
     * @type {Array}
     * 	
     *
     * @param mixed $defaults 
     */
	public function setDefaults($defaults) {}

    /**
     * @type {Array}
     * 	
     */
	public function getMethods() {}

    /**
     * @type {Array}
     * 	
     *
     * @param mixed $methods 
     */
	public function setMethods($methods) {}

    /**
     * @param  string name
     * @param  string path	
     * 	
     *
     * @param string $name 
     * @param string $path 
     */
	public function __construct($name, $path) {}

    /**
     * Match route
     * 	
     * @param string uri
     * @param array  server
     * @return bool|RouteMatch
     * 	
     *
     * @param string $uri 
     * @param array $server 
     */
	public function match($uri, $server = null) {}

    /**
     * [replaceCallback description]
     * @param  {[type]} array matches       [description]
     * @return {[type]}       [description]
     * 	
     *
     * @param array $matches 
     * @return string 
     */
	public function replaceCallback($matches) {}

    /**
     * @param array params
     * @return string
     * @throws Exception\MissingParameterException
     * 	
     *
     * @param array $params 
     */
	public function assemble($params = array()) {}

    /**
     * Init the route for match/assemble
     * 	
     * @return void
     * 	
     */
	protected function init() {}

}
