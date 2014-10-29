<?php

$router = new \Tiny\Router();
$router->add('foo', '/foo/{name}');
$route = $router->match($_SERVER['PATH_INFO']);
var_dump($route->getParams()['name']);
