<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'Tiny',
    'file' => '/home/chris/www/tiny/tiny/Router.zep',
    'line' => 3,
    'char' => 5,
  ),
  1 => 
  array (
    'type' => 'class',
    'name' => 'Router',
    'abstract' => 0,
    'final' => 0,
    'implements' => 
    array (
      0 => 
      array (
        'type' => 'variable',
        'value' => 'Router\\RouterInterface',
        'file' => '/home/chris/www/tiny/tiny/Router.zep',
        'line' => 4,
        'char' => 1,
      ),
    ),
    'definition' => 
    array (
      'properties' => 
      array (
        0 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => 'routes',
          'docblock' => '**
	 * Collection of routes
	 * 
	 * @type \\ArrayObject
	 *',
          'shortcuts' => 
          array (
            0 => 
            array (
              'type' => 'shortcut',
              'name' => 'set',
              'file' => '/home/chris/www/tiny/tiny/Router.zep',
              'line' => 12,
              'char' => 6,
            ),
            1 => 
            array (
              'type' => 'shortcut',
              'name' => 'get',
              'file' => '/home/chris/www/tiny/tiny/Router.zep',
              'line' => 13,
              'char' => 2,
            ),
          ),
          'file' => '/home/chris/www/tiny/tiny/Router.zep',
          'line' => 16,
          'char' => 10,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => 'routeFactory',
          'file' => '/home/chris/www/tiny/tiny/Router.zep',
          'line' => 18,
          'char' => 7,
        ),
      ),
      'methods' => 
      array (
        0 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => '__construct',
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'object-property',
                  'operator' => 'assign',
                  'variable' => 'this',
                  'property' => 'routes',
                  'expr' => 
                  array (
                    'type' => 'new',
                    'class' => '\\ArrayObject',
                    'dynamic' => 0,
                    'file' => '/home/chris/www/tiny/tiny/Router.zep',
                    'line' => 20,
                    'char' => 38,
                  ),
                  'file' => '/home/chris/www/tiny/tiny/Router.zep',
                  'line' => 20,
                  'char' => 38,
                ),
              ),
              'file' => '/home/chris/www/tiny/tiny/Router.zep',
              'line' => 21,
              'char' => 5,
            ),
            1 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'object-property',
                  'operator' => 'assign',
                  'variable' => 'this',
                  'property' => 'routeFactory',
                  'expr' => 
                  array (
                    'type' => 'new',
                    'class' => 'Router\\RouteFactory',
                    'dynamic' => 0,
                    'file' => '/home/chris/www/tiny/tiny/Router.zep',
                    'line' => 21,
                    'char' => 51,
                  ),
                  'file' => '/home/chris/www/tiny/tiny/Router.zep',
                  'line' => 21,
                  'char' => 51,
                ),
              ),
              'file' => '/home/chris/www/tiny/tiny/Router.zep',
              'line' => 22,
              'char' => 2,
            ),
          ),
          'file' => '/home/chris/www/tiny/tiny/Router.zep',
          'line' => 30,
          'char' => 3,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'add',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'name',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/home/chris/www/tiny/tiny/Router.zep',
              'line' => 31,
              'char' => 34,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'path',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/home/chris/www/tiny/tiny/Router.zep',
              'line' => 31,
              'char' => 48,
            ),
            2 => 
            array (
              'type' => 'parameter',
              'name' => 'options',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'empty-array',
                'file' => '/home/chris/www/tiny/tiny/Router.zep',
                'line' => 31,
                'char' => 68,
              ),
              'reference' => 0,
              'file' => '/home/chris/www/tiny/tiny/Router.zep',
              'line' => 31,
              'char' => 68,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'isset',
                'left' => 
                array (
                  'type' => 'list',
                  'left' => 
                  array (
                    'type' => 'array-access',
                    'left' => 
                    array (
                      'type' => 'property-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'this',
                        'file' => '/home/chris/www/tiny/tiny/Router.zep',
                        'line' => 33,
                        'char' => 17,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'routes',
                        'file' => '/home/chris/www/tiny/tiny/Router.zep',
                        'line' => 33,
                        'char' => 24,
                      ),
                      'file' => '/home/chris/www/tiny/tiny/Router.zep',
                      'line' => 33,
                      'char' => 24,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'name',
                      'file' => '/home/chris/www/tiny/tiny/Router.zep',
                      'line' => 33,
                      'char' => 29,
                    ),
                    'file' => '/home/chris/www/tiny/tiny/Router.zep',
                    'line' => 33,
                    'char' => 30,
                  ),
                  'file' => '/home/chris/www/tiny/tiny/Router.zep',
                  'line' => 33,
                  'char' => 32,
                ),
                'file' => '/home/chris/www/tiny/tiny/Router.zep',
                'line' => 33,
                'char' => 32,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'throw',
                  'expr' => 
                  array (
                    'type' => 'new',
                    'class' => 'Router\\Exception\\RouteExistsException',
                    'dynamic' => 0,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'concat',
                          'left' => 
                          array (
                            'type' => 'string',
                            'value' => 'Route exists ',
                            'file' => '/home/chris/www/tiny/tiny/Router.zep',
                            'line' => 34,
                            'char' => 67,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'name',
                            'file' => '/home/chris/www/tiny/tiny/Router.zep',
                            'line' => 34,
                            'char' => 72,
                          ),
                          'file' => '/home/chris/www/tiny/tiny/Router.zep',
                          'line' => 34,
                          'char' => 72,
                        ),
                        'file' => '/home/chris/www/tiny/tiny/Router.zep',
                        'line' => 34,
                        'char' => 72,
                      ),
                    ),
                    'file' => '/home/chris/www/tiny/tiny/Router.zep',
                    'line' => 34,
                    'char' => 73,
                  ),
                  'file' => '/home/chris/www/tiny/tiny/Router.zep',
                  'line' => 35,
                  'char' => 3,
                ),
              ),
              'file' => '/home/chris/www/tiny/tiny/Router.zep',
              'line' => 36,
              'char' => 5,
            ),
            1 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'route',
                  'file' => '/home/chris/www/tiny/tiny/Router.zep',
                  'line' => 36,
                  'char' => 12,
                ),
              ),
              'file' => '/home/chris/www/tiny/tiny/Router.zep',
              'line' => 37,
              'char' => 5,
            ),
            2 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'route',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'property-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'this',
                        'file' => '/home/chris/www/tiny/tiny/Router.zep',
                        'line' => 37,
                        'char' => 20,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'routeFactory',
                        'file' => '/home/chris/www/tiny/tiny/Router.zep',
                        'line' => 37,
                        'char' => 34,
                      ),
                      'file' => '/home/chris/www/tiny/tiny/Router.zep',
                      'line' => 37,
                      'char' => 34,
                    ),
                    'name' => 'create',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'name',
                          'file' => '/home/chris/www/tiny/tiny/Router.zep',
                          'line' => 37,
                          'char' => 46,
                        ),
                        'file' => '/home/chris/www/tiny/tiny/Router.zep',
                        'line' => 37,
                        'char' => 46,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'path',
                          'file' => '/home/chris/www/tiny/tiny/Router.zep',
                          'line' => 37,
                          'char' => 52,
                        ),
                        'file' => '/home/chris/www/tiny/tiny/Router.zep',
                        'line' => 37,
                        'char' => 52,
                      ),
                      2 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'options',
                          'file' => '/home/chris/www/tiny/tiny/Router.zep',
                          'line' => 37,
                          'char' => 61,
                        ),
                        'file' => '/home/chris/www/tiny/tiny/Router.zep',
                        'line' => 37,
                        'char' => 61,
                      ),
                    ),
                    'file' => '/home/chris/www/tiny/tiny/Router.zep',
                    'line' => 37,
                    'char' => 62,
                  ),
                  'file' => '/home/chris/www/tiny/tiny/Router.zep',
                  'line' => 37,
                  'char' => 62,
                ),
              ),
              'file' => '/home/chris/www/tiny/tiny/Router.zep',
              'line' => 38,
              'char' => 6,
            ),
            3 => 
            array (
              'type' => 'mcall',
              'expr' => 
              array (
                'type' => 'mcall',
                'variable' => 
                array (
                  'type' => 'property-access',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'this',
                    'file' => '/home/chris/www/tiny/tiny/Router.zep',
                    'line' => 38,
                    'char' => 8,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => 'routes',
                    'file' => '/home/chris/www/tiny/tiny/Router.zep',
                    'line' => 38,
                    'char' => 16,
                  ),
                  'file' => '/home/chris/www/tiny/tiny/Router.zep',
                  'line' => 38,
                  'char' => 16,
                ),
                'name' => 'offsetSet',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'name',
                      'file' => '/home/chris/www/tiny/tiny/Router.zep',
                      'line' => 38,
                      'char' => 31,
                    ),
                    'file' => '/home/chris/www/tiny/tiny/Router.zep',
                    'line' => 38,
                    'char' => 31,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'route',
                      'file' => '/home/chris/www/tiny/tiny/Router.zep',
                      'line' => 38,
                      'char' => 38,
                    ),
                    'file' => '/home/chris/www/tiny/tiny/Router.zep',
                    'line' => 38,
                    'char' => 38,
                  ),
                ),
                'file' => '/home/chris/www/tiny/tiny/Router.zep',
                'line' => 38,
                'char' => 39,
              ),
              'file' => '/home/chris/www/tiny/tiny/Router.zep',
              'line' => 39,
              'char' => 8,
            ),
            4 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'route',
                'file' => '/home/chris/www/tiny/tiny/Router.zep',
                'line' => 39,
                'char' => 15,
              ),
              'file' => '/home/chris/www/tiny/tiny/Router.zep',
              'line' => 40,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Add route
	 * @param string name
	 * @param string path
	 * @param array  options
	 * @return Router\\Route
	 *',
          'file' => '/home/chris/www/tiny/tiny/Router.zep',
          'line' => 48,
          'char' => 3,
        ),
        2 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'match',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'uri',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/home/chris/www/tiny/tiny/Router.zep',
              'line' => 49,
              'char' => 35,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'server',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/home/chris/www/tiny/tiny/Router.zep',
                'line' => 49,
                'char' => 56,
              ),
              'reference' => 0,
              'file' => '/home/chris/www/tiny/tiny/Router.zep',
              'line' => 49,
              'char' => 56,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'match',
                  'file' => '/home/chris/www/tiny/tiny/Router.zep',
                  'line' => 51,
                  'char' => 12,
                ),
              ),
              'file' => '/home/chris/www/tiny/tiny/Router.zep',
              'line' => 52,
              'char' => 5,
            ),
            1 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'route',
                  'file' => '/home/chris/www/tiny/tiny/Router.zep',
                  'line' => 52,
                  'char' => 12,
                ),
              ),
              'file' => '/home/chris/www/tiny/tiny/Router.zep',
              'line' => 53,
              'char' => 5,
            ),
            2 => 
            array (
              'type' => 'for',
              'expr' => 
              array (
                'type' => 'mcall',
                'variable' => 
                array (
                  'type' => 'property-access',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'this',
                    'file' => '/home/chris/www/tiny/tiny/Router.zep',
                    'line' => 53,
                    'char' => 21,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => 'routes',
                    'file' => '/home/chris/www/tiny/tiny/Router.zep',
                    'line' => 53,
                    'char' => 29,
                  ),
                  'file' => '/home/chris/www/tiny/tiny/Router.zep',
                  'line' => 53,
                  'char' => 29,
                ),
                'name' => 'getArrayCopy',
                'call-type' => 1,
                'file' => '/home/chris/www/tiny/tiny/Router.zep',
                'line' => 53,
                'char' => 45,
              ),
              'value' => 'route',
              'reverse' => 0,
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'let',
                  'assignments' => 
                  array (
                    0 => 
                    array (
                      'assign-type' => 'variable',
                      'operator' => 'assign',
                      'variable' => 'match',
                      'expr' => 
                      array (
                        'type' => 'mcall',
                        'variable' => 
                        array (
                          'type' => 'variable',
                          'value' => 'route',
                          'file' => '/home/chris/www/tiny/tiny/Router.zep',
                          'line' => 54,
                          'char' => 22,
                        ),
                        'name' => 'match',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'uri',
                              'file' => '/home/chris/www/tiny/tiny/Router.zep',
                              'line' => 54,
                              'char' => 32,
                            ),
                            'file' => '/home/chris/www/tiny/tiny/Router.zep',
                            'line' => 54,
                            'char' => 32,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'server',
                              'file' => '/home/chris/www/tiny/tiny/Router.zep',
                              'line' => 54,
                              'char' => 40,
                            ),
                            'file' => '/home/chris/www/tiny/tiny/Router.zep',
                            'line' => 54,
                            'char' => 40,
                          ),
                        ),
                        'file' => '/home/chris/www/tiny/tiny/Router.zep',
                        'line' => 54,
                        'char' => 41,
                      ),
                      'file' => '/home/chris/www/tiny/tiny/Router.zep',
                      'line' => 54,
                      'char' => 41,
                    ),
                  ),
                  'file' => '/home/chris/www/tiny/tiny/Router.zep',
                  'line' => 55,
                  'char' => 5,
                ),
                1 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'match',
                    'file' => '/home/chris/www/tiny/tiny/Router.zep',
                    'line' => 55,
                    'char' => 13,
                  ),
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'return',
                      'expr' => 
                      array (
                        'type' => 'variable',
                        'value' => 'match',
                        'file' => '/home/chris/www/tiny/tiny/Router.zep',
                        'line' => 56,
                        'char' => 17,
                      ),
                      'file' => '/home/chris/www/tiny/tiny/Router.zep',
                      'line' => 57,
                      'char' => 4,
                    ),
                  ),
                  'file' => '/home/chris/www/tiny/tiny/Router.zep',
                  'line' => 58,
                  'char' => 3,
                ),
              ),
              'file' => '/home/chris/www/tiny/tiny/Router.zep',
              'line' => 59,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Match routing
	 * 
	 * @param  string uri
	 * @param  array  server
	 * @return Router\\RouteMatch|null
	 *',
          'file' => '/home/chris/www/tiny/tiny/Router.zep',
          'line' => 66,
          'char' => 6,
        ),
        3 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'assemble',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'name',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/home/chris/www/tiny/tiny/Router.zep',
              'line' => 67,
              'char' => 39,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'params',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'empty-array',
                'file' => '/home/chris/www/tiny/tiny/Router.zep',
                'line' => 67,
                'char' => 58,
              ),
              'reference' => 0,
              'file' => '/home/chris/www/tiny/tiny/Router.zep',
              'line' => 67,
              'char' => 58,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'not',
                'left' => 
                array (
                  'type' => 'mcall',
                  'variable' => 
                  array (
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/home/chris/www/tiny/tiny/Router.zep',
                      'line' => 68,
                      'char' => 12,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'routes',
                      'file' => '/home/chris/www/tiny/tiny/Router.zep',
                      'line' => 68,
                      'char' => 20,
                    ),
                    'file' => '/home/chris/www/tiny/tiny/Router.zep',
                    'line' => 68,
                    'char' => 20,
                  ),
                  'name' => 'offsetExists',
                  'call-type' => 1,
                  'parameters' => 
                  array (
                    0 => 
                    array (
                      'parameter' => 
                      array (
                        'type' => 'variable',
                        'value' => 'name',
                        'file' => '/home/chris/www/tiny/tiny/Router.zep',
                        'line' => 68,
                        'char' => 38,
                      ),
                      'file' => '/home/chris/www/tiny/tiny/Router.zep',
                      'line' => 68,
                      'char' => 38,
                    ),
                  ),
                  'file' => '/home/chris/www/tiny/tiny/Router.zep',
                  'line' => 68,
                  'char' => 40,
                ),
                'file' => '/home/chris/www/tiny/tiny/Router.zep',
                'line' => 68,
                'char' => 40,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'throw',
                  'expr' => 
                  array (
                    'type' => 'new',
                    'class' => 'Router\\Exception\\RouteDoesNotExistsException',
                    'dynamic' => 0,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'string',
                          'value' => 'Route does not exists',
                          'file' => '/home/chris/www/tiny/tiny/Router.zep',
                          'line' => 69,
                          'char' => 82,
                        ),
                        'file' => '/home/chris/www/tiny/tiny/Router.zep',
                        'line' => 69,
                        'char' => 82,
                      ),
                    ),
                    'file' => '/home/chris/www/tiny/tiny/Router.zep',
                    'line' => 69,
                    'char' => 83,
                  ),
                  'file' => '/home/chris/www/tiny/tiny/Router.zep',
                  'line' => 70,
                  'char' => 3,
                ),
              ),
              'file' => '/home/chris/www/tiny/tiny/Router.zep',
              'line' => 71,
              'char' => 8,
            ),
            1 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'mcall',
                'variable' => 
                array (
                  'type' => 'mcall',
                  'variable' => 
                  array (
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/home/chris/www/tiny/tiny/Router.zep',
                      'line' => 71,
                      'char' => 15,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'routes',
                      'file' => '/home/chris/www/tiny/tiny/Router.zep',
                      'line' => 71,
                      'char' => 23,
                    ),
                    'file' => '/home/chris/www/tiny/tiny/Router.zep',
                    'line' => 71,
                    'char' => 23,
                  ),
                  'name' => 'offsetGet',
                  'call-type' => 1,
                  'parameters' => 
                  array (
                    0 => 
                    array (
                      'parameter' => 
                      array (
                        'type' => 'variable',
                        'value' => 'name',
                        'file' => '/home/chris/www/tiny/tiny/Router.zep',
                        'line' => 71,
                        'char' => 38,
                      ),
                      'file' => '/home/chris/www/tiny/tiny/Router.zep',
                      'line' => 71,
                      'char' => 38,
                    ),
                  ),
                  'file' => '/home/chris/www/tiny/tiny/Router.zep',
                  'line' => 71,
                  'char' => 40,
                ),
                'name' => 'assemble',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'params',
                      'file' => '/home/chris/www/tiny/tiny/Router.zep',
                      'line' => 71,
                      'char' => 56,
                    ),
                    'file' => '/home/chris/www/tiny/tiny/Router.zep',
                    'line' => 71,
                    'char' => 56,
                  ),
                ),
                'file' => '/home/chris/www/tiny/tiny/Router.zep',
                'line' => 71,
                'char' => 57,
              ),
              'file' => '/home/chris/www/tiny/tiny/Router.zep',
              'line' => 72,
              'char' => 2,
            ),
          ),
          'docblock' => '**
     * 
     * @param string name
     * @param array params
     * @throws Exception\\RouteDoesNotExistsException
     *',
          'file' => '/home/chris/www/tiny/tiny/Router.zep',
          'line' => 74,
          'char' => 1,
        ),
      ),
      'file' => '/home/chris/www/tiny/tiny/Router.zep',
      'line' => 74,
      'char' => 1,
    ),
    'file' => '/home/chris/www/tiny/tiny/Router.zep',
    'line' => 75,
    'char' => 0,
  ),
);