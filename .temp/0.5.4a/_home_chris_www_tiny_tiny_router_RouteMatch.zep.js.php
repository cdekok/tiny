<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'Tiny\\Router',
    'file' => '/home/chris/www/tiny/tiny/router/RouteMatch.zep',
    'line' => 3,
    'char' => 5,
  ),
  1 => 
  array (
    'type' => 'class',
    'name' => 'RouteMatch',
    'abstract' => 0,
    'final' => 0,
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
          'name' => 'route',
          'docblock' => '**
	 * @var Route
	 *',
          'shortcuts' => 
          array (
            0 => 
            array (
              'type' => 'shortcut',
              'name' => 'get',
              'file' => '/home/chris/www/tiny/tiny/router/RouteMatch.zep',
              'line' => 10,
              'char' => 2,
            ),
          ),
          'file' => '/home/chris/www/tiny/tiny/router/RouteMatch.zep',
          'line' => 14,
          'char' => 3,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => 'params',
          'docblock' => '**
	 * @var Array
	 *',
          'shortcuts' => 
          array (
            0 => 
            array (
              'type' => 'shortcut',
              'name' => 'get',
              'file' => '/home/chris/www/tiny/tiny/router/RouteMatch.zep',
              'line' => 16,
              'char' => 6,
            ),
            1 => 
            array (
              'type' => 'shortcut',
              'name' => 'set',
              'file' => '/home/chris/www/tiny/tiny/router/RouteMatch.zep',
              'line' => 17,
              'char' => 2,
            ),
          ),
          'file' => '/home/chris/www/tiny/tiny/router/RouteMatch.zep',
          'line' => 19,
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
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'route',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'cast' => 
              array (
                'type' => 'variable',
                'value' => 'Route',
                'file' => '/home/chris/www/tiny/tiny/router/RouteMatch.zep',
                'line' => 19,
                'char' => 42,
              ),
              'reference' => 0,
              'file' => '/home/chris/www/tiny/tiny/router/RouteMatch.zep',
              'line' => 19,
              'char' => 43,
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
                'file' => '/home/chris/www/tiny/tiny/router/RouteMatch.zep',
                'line' => 19,
                'char' => 62,
              ),
              'reference' => 0,
              'file' => '/home/chris/www/tiny/tiny/router/RouteMatch.zep',
              'line' => 19,
              'char' => 62,
            ),
          ),
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
                  'property' => 'route',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'route',
                    'file' => '/home/chris/www/tiny/tiny/router/RouteMatch.zep',
                    'line' => 21,
                    'char' => 26,
                  ),
                  'file' => '/home/chris/www/tiny/tiny/router/RouteMatch.zep',
                  'line' => 21,
                  'char' => 26,
                ),
              ),
              'file' => '/home/chris/www/tiny/tiny/router/RouteMatch.zep',
              'line' => 22,
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
                  'property' => 'params',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'params',
                    'file' => '/home/chris/www/tiny/tiny/router/RouteMatch.zep',
                    'line' => 22,
                    'char' => 28,
                  ),
                  'file' => '/home/chris/www/tiny/tiny/router/RouteMatch.zep',
                  'line' => 22,
                  'char' => 28,
                ),
              ),
              'file' => '/home/chris/www/tiny/tiny/router/RouteMatch.zep',
              'line' => 23,
              'char' => 2,
            ),
          ),
          'file' => '/home/chris/www/tiny/tiny/router/RouteMatch.zep',
          'line' => 25,
          'char' => 7,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'set',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'key',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/chris/www/tiny/tiny/router/RouteMatch.zep',
              'line' => 25,
              'char' => 32,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'value',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/chris/www/tiny/tiny/router/RouteMatch.zep',
              'line' => 25,
              'char' => 39,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'object-property-array-index',
                  'operator' => 'assign',
                  'variable' => 'this',
                  'property' => 'params',
                  'index-expr' => 
                  array (
                    0 => 
                    array (
                      'type' => 'variable',
                      'value' => 'key',
                      'file' => '/home/chris/www/tiny/tiny/router/RouteMatch.zep',
                      'line' => 27,
                      'char' => 23,
                    ),
                  ),
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'value',
                    'file' => '/home/chris/www/tiny/tiny/router/RouteMatch.zep',
                    'line' => 27,
                    'char' => 32,
                  ),
                  'file' => '/home/chris/www/tiny/tiny/router/RouteMatch.zep',
                  'line' => 27,
                  'char' => 32,
                ),
              ),
              'file' => '/home/chris/www/tiny/tiny/router/RouteMatch.zep',
              'line' => 28,
              'char' => 2,
            ),
          ),
          'file' => '/home/chris/www/tiny/tiny/router/RouteMatch.zep',
          'line' => 30,
          'char' => 7,
        ),
        2 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'get',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'key',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/home/chris/www/tiny/tiny/router/RouteMatch.zep',
              'line' => 30,
              'char' => 33,
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
                        'file' => '/home/chris/www/tiny/tiny/router/RouteMatch.zep',
                        'line' => 32,
                        'char' => 17,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'params',
                        'file' => '/home/chris/www/tiny/tiny/router/RouteMatch.zep',
                        'line' => 32,
                        'char' => 24,
                      ),
                      'file' => '/home/chris/www/tiny/tiny/router/RouteMatch.zep',
                      'line' => 32,
                      'char' => 24,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'key',
                      'file' => '/home/chris/www/tiny/tiny/router/RouteMatch.zep',
                      'line' => 32,
                      'char' => 28,
                    ),
                    'file' => '/home/chris/www/tiny/tiny/router/RouteMatch.zep',
                    'line' => 32,
                    'char' => 29,
                  ),
                  'file' => '/home/chris/www/tiny/tiny/router/RouteMatch.zep',
                  'line' => 32,
                  'char' => 31,
                ),
                'file' => '/home/chris/www/tiny/tiny/router/RouteMatch.zep',
                'line' => 32,
                'char' => 31,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'array-access',
                    'left' => 
                    array (
                      'type' => 'property-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'this',
                        'file' => '/home/chris/www/tiny/tiny/router/RouteMatch.zep',
                        'line' => 33,
                        'char' => 16,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'params',
                        'file' => '/home/chris/www/tiny/tiny/router/RouteMatch.zep',
                        'line' => 33,
                        'char' => 23,
                      ),
                      'file' => '/home/chris/www/tiny/tiny/router/RouteMatch.zep',
                      'line' => 33,
                      'char' => 23,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'key',
                      'file' => '/home/chris/www/tiny/tiny/router/RouteMatch.zep',
                      'line' => 33,
                      'char' => 27,
                    ),
                    'file' => '/home/chris/www/tiny/tiny/router/RouteMatch.zep',
                    'line' => 33,
                    'char' => 28,
                  ),
                  'file' => '/home/chris/www/tiny/tiny/router/RouteMatch.zep',
                  'line' => 34,
                  'char' => 3,
                ),
              ),
              'file' => '/home/chris/www/tiny/tiny/router/RouteMatch.zep',
              'line' => 35,
              'char' => 2,
            ),
          ),
          'file' => '/home/chris/www/tiny/tiny/router/RouteMatch.zep',
          'line' => 36,
          'char' => 1,
        ),
      ),
      'file' => '/home/chris/www/tiny/tiny/router/RouteMatch.zep',
      'line' => 36,
      'char' => 1,
    ),
    'file' => '/home/chris/www/tiny/tiny/router/RouteMatch.zep',
    'line' => 36,
    'char' => 1,
  ),
);