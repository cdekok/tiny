<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'Tiny\\Router',
    'file' => '/home/chris/www/tiny/tiny/router/RouteFactory.zep',
    'line' => 3,
    'char' => 5,
  ),
  1 => 
  array (
    'type' => 'class',
    'name' => 'RouteFactory',
    'abstract' => 0,
    'final' => 0,
    'definition' => 
    array (
      'methods' => 
      array (
        0 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'create',
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
              'file' => '/home/chris/www/tiny/tiny/router/RouteFactory.zep',
              'line' => 13,
              'char' => 37,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'path',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/home/chris/www/tiny/tiny/router/RouteFactory.zep',
              'line' => 13,
              'char' => 51,
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
                'file' => '/home/chris/www/tiny/tiny/router/RouteFactory.zep',
                'line' => 13,
                'char' => 71,
              ),
              'reference' => 0,
              'file' => '/home/chris/www/tiny/tiny/router/RouteFactory.zep',
              'line' => 13,
              'char' => 71,
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
                  'variable' => 'route',
                  'file' => '/home/chris/www/tiny/tiny/router/RouteFactory.zep',
                  'line' => 15,
                  'char' => 12,
                ),
              ),
              'file' => '/home/chris/www/tiny/tiny/router/RouteFactory.zep',
              'line' => 16,
              'char' => 5,
            ),
            1 => 
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
                    'type' => 'new',
                    'class' => 'Route',
                    'dynamic' => 0,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'name',
                          'file' => '/home/chris/www/tiny/tiny/router/RouteFactory.zep',
                          'line' => 16,
                          'char' => 29,
                        ),
                        'file' => '/home/chris/www/tiny/tiny/router/RouteFactory.zep',
                        'line' => 16,
                        'char' => 29,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'path',
                          'file' => '/home/chris/www/tiny/tiny/router/RouteFactory.zep',
                          'line' => 16,
                          'char' => 35,
                        ),
                        'file' => '/home/chris/www/tiny/tiny/router/RouteFactory.zep',
                        'line' => 16,
                        'char' => 35,
                      ),
                    ),
                    'file' => '/home/chris/www/tiny/tiny/router/RouteFactory.zep',
                    'line' => 16,
                    'char' => 36,
                  ),
                  'file' => '/home/chris/www/tiny/tiny/router/RouteFactory.zep',
                  'line' => 16,
                  'char' => 36,
                ),
              ),
              'file' => '/home/chris/www/tiny/tiny/router/RouteFactory.zep',
              'line' => 17,
              'char' => 4,
            ),
            2 => 
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
                      'type' => 'variable',
                      'value' => 'options',
                      'file' => '/home/chris/www/tiny/tiny/router/RouteFactory.zep',
                      'line' => 17,
                      'char' => 19,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => 'default',
                      'file' => '/home/chris/www/tiny/tiny/router/RouteFactory.zep',
                      'line' => 17,
                      'char' => 29,
                    ),
                    'file' => '/home/chris/www/tiny/tiny/router/RouteFactory.zep',
                    'line' => 17,
                    'char' => 30,
                  ),
                  'file' => '/home/chris/www/tiny/tiny/router/RouteFactory.zep',
                  'line' => 17,
                  'char' => 32,
                ),
                'file' => '/home/chris/www/tiny/tiny/router/RouteFactory.zep',
                'line' => 17,
                'char' => 32,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'mcall',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'route',
                      'file' => '/home/chris/www/tiny/tiny/router/RouteFactory.zep',
                      'line' => 18,
                      'char' => 10,
                    ),
                    'name' => 'setDefaults',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'array-access',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'options',
                            'file' => '/home/chris/www/tiny/tiny/router/RouteFactory.zep',
                            'line' => 18,
                            'char' => 30,
                          ),
                          'right' => 
                          array (
                            'type' => 'string',
                            'value' => 'default',
                            'file' => '/home/chris/www/tiny/tiny/router/RouteFactory.zep',
                            'line' => 18,
                            'char' => 40,
                          ),
                          'file' => '/home/chris/www/tiny/tiny/router/RouteFactory.zep',
                          'line' => 18,
                          'char' => 41,
                        ),
                        'file' => '/home/chris/www/tiny/tiny/router/RouteFactory.zep',
                        'line' => 18,
                        'char' => 41,
                      ),
                    ),
                    'file' => '/home/chris/www/tiny/tiny/router/RouteFactory.zep',
                    'line' => 18,
                    'char' => 42,
                  ),
                  'file' => '/home/chris/www/tiny/tiny/router/RouteFactory.zep',
                  'line' => 19,
                  'char' => 3,
                ),
              ),
              'file' => '/home/chris/www/tiny/tiny/router/RouteFactory.zep',
              'line' => 21,
              'char' => 4,
            ),
            3 => 
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
                      'type' => 'variable',
                      'value' => 'options',
                      'file' => '/home/chris/www/tiny/tiny/router/RouteFactory.zep',
                      'line' => 21,
                      'char' => 19,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => 'methods',
                      'file' => '/home/chris/www/tiny/tiny/router/RouteFactory.zep',
                      'line' => 21,
                      'char' => 29,
                    ),
                    'file' => '/home/chris/www/tiny/tiny/router/RouteFactory.zep',
                    'line' => 21,
                    'char' => 30,
                  ),
                  'file' => '/home/chris/www/tiny/tiny/router/RouteFactory.zep',
                  'line' => 21,
                  'char' => 32,
                ),
                'file' => '/home/chris/www/tiny/tiny/router/RouteFactory.zep',
                'line' => 21,
                'char' => 32,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'mcall',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'route',
                      'file' => '/home/chris/www/tiny/tiny/router/RouteFactory.zep',
                      'line' => 22,
                      'char' => 10,
                    ),
                    'name' => 'setMethods',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'array-access',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'options',
                            'file' => '/home/chris/www/tiny/tiny/router/RouteFactory.zep',
                            'line' => 22,
                            'char' => 29,
                          ),
                          'right' => 
                          array (
                            'type' => 'string',
                            'value' => 'methods',
                            'file' => '/home/chris/www/tiny/tiny/router/RouteFactory.zep',
                            'line' => 22,
                            'char' => 39,
                          ),
                          'file' => '/home/chris/www/tiny/tiny/router/RouteFactory.zep',
                          'line' => 22,
                          'char' => 40,
                        ),
                        'file' => '/home/chris/www/tiny/tiny/router/RouteFactory.zep',
                        'line' => 22,
                        'char' => 40,
                      ),
                    ),
                    'file' => '/home/chris/www/tiny/tiny/router/RouteFactory.zep',
                    'line' => 22,
                    'char' => 41,
                  ),
                  'file' => '/home/chris/www/tiny/tiny/router/RouteFactory.zep',
                  'line' => 23,
                  'char' => 3,
                ),
              ),
              'file' => '/home/chris/www/tiny/tiny/router/RouteFactory.zep',
              'line' => 25,
              'char' => 8,
            ),
            4 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'route',
                'file' => '/home/chris/www/tiny/tiny/router/RouteFactory.zep',
                'line' => 25,
                'char' => 15,
              ),
              'file' => '/home/chris/www/tiny/tiny/router/RouteFactory.zep',
              'line' => 26,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Create route
	 * 
	 * @param  string name
	 * @param  string path
	 * @param  array  options
	 * @return Route
	 *',
          'file' => '/home/chris/www/tiny/tiny/router/RouteFactory.zep',
          'line' => 27,
          'char' => 1,
        ),
      ),
      'file' => '/home/chris/www/tiny/tiny/router/RouteFactory.zep',
      'line' => 27,
      'char' => 1,
    ),
    'file' => '/home/chris/www/tiny/tiny/router/RouteFactory.zep',
    'line' => 27,
    'char' => 1,
  ),
);