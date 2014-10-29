<?php

$router = new \Tiny\Router();

$router->add('foo', '/foo/{name}');
var_dump($router->assemble('foo', ['name' => 'test']));
var_dump($router->match('/foo/test'));
