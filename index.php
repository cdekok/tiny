<?php
require_once 'vendor/autoload.php';
$router = new \Spiffy\Route\Router;
$router->add('foo', '/foo/{name}');
$route = $router->match($_SERVER['PATH_INFO']);
var_dump($route->getParams()['name']);
