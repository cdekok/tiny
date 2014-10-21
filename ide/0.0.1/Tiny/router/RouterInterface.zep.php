<?php

namespace Tiny\Router;

abstract interface RouterInterface
{

    /**
     * Match routring
     * 	
     * @param  string uri
     * @param  array  server
     * @return RouteMatchInterface
     * 	
     *
     * @param string $uri 
     * @param array $server 
     */
	public function match($uri, $server);

    /**
     * Assemble routing
     * 	
     * @param  string name
     * @param  array  params = []
     * @return string
     * 	
     *
     * @param string $name 
     * @param array $params 
     */
	public function assemble($name, $params = array());

}
