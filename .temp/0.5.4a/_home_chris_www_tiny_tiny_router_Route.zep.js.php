<?php return array (
  0 => 
  array (
    'type' => 'comment',
    'value' => '**
 * Tiny router
 *',
    'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
    'line' => 5,
    'char' => 9,
  ),
  1 => 
  array (
    'type' => 'namespace',
    'name' => 'Tiny\\Router',
    'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
    'line' => 7,
    'char' => 5,
  ),
  2 => 
  array (
    'type' => 'class',
    'name' => 'Route',
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
          'name' => 'name',
          'docblock' => '**
	 * @var string Route name
	 *',
          'shortcuts' => 
          array (
            0 => 
            array (
              'type' => 'shortcut',
              'name' => 'get',
              'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
              'line' => 14,
              'char' => 2,
            ),
          ),
          'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
          'line' => 18,
          'char' => 3,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => 'path',
          'docblock' => '**
	 * @var string Route path
	 *',
          'shortcuts' => 
          array (
            0 => 
            array (
              'type' => 'shortcut',
              'name' => 'get',
              'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
              'line' => 21,
              'char' => 2,
            ),
          ),
          'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
          'line' => 25,
          'char' => 3,
        ),
        2 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => 'regex',
          'docblock' => '**
	 * @var string
	 *',
          'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
          'line' => 30,
          'char' => 3,
        ),
        3 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => 'tokens',
          'docblock' => '**
	 * @var string
	 *',
          'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
          'line' => 35,
          'char' => 3,
        ),
        4 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => 'defaults',
          'default' => 
          array (
            'type' => 'empty-array',
            'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
            'line' => 36,
            'char' => 26,
          ),
          'docblock' => '**
	 * @type {Array}
	 *',
          'shortcuts' => 
          array (
            0 => 
            array (
              'type' => 'shortcut',
              'name' => 'get',
              'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
              'line' => 37,
              'char' => 6,
            ),
            1 => 
            array (
              'type' => 'shortcut',
              'name' => 'set',
              'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
              'line' => 38,
              'char' => 2,
            ),
          ),
          'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
          'line' => 42,
          'char' => 3,
        ),
        5 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => 'methods',
          'default' => 
          array (
            'type' => 'empty-array',
            'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
            'line' => 43,
            'char' => 25,
          ),
          'docblock' => '**
	 * @type {Array}
	 *',
          'shortcuts' => 
          array (
            0 => 
            array (
              'type' => 'shortcut',
              'name' => 'get',
              'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
              'line' => 44,
              'char' => 6,
            ),
            1 => 
            array (
              'type' => 'shortcut',
              'name' => 'set',
              'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
              'line' => 45,
              'char' => 2,
            ),
          ),
          'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
          'line' => 49,
          'char' => 3,
        ),
        6 => 
        array (
          'visibility' => 
          array (
            0 => 'private',
          ),
          'type' => 'property',
          'name' => 'params',
          'default' => 
          array (
            'type' => 'empty-array',
            'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
            'line' => 50,
            'char' => 21,
          ),
          'docblock' => '**
	 * @type {Array}
	 *',
          'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
          'line' => 55,
          'char' => 3,
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
              'name' => 'name',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
              'line' => 56,
              'char' => 42,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'path',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
              'line' => 56,
              'char' => 56,
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
                  'property' => 'name',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'name',
                    'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                    'line' => 58,
                    'char' => 24,
                  ),
                  'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                  'line' => 58,
                  'char' => 24,
                ),
              ),
              'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
              'line' => 59,
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
                  'property' => 'path',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'path',
                    'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                    'line' => 59,
                    'char' => 24,
                  ),
                  'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                  'line' => 59,
                  'char' => 24,
                ),
              ),
              'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
              'line' => 60,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * @param  string name
	 * @param  string path	 
	 *',
          'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
          'line' => 68,
          'char' => 3,
        ),
        1 => 
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
              'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
              'line' => 69,
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
                'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                'line' => 69,
                'char' => 56,
              ),
              'reference' => 0,
              'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
              'line' => 69,
              'char' => 56,
            ),
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
                  'value' => 'this',
                  'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                  'line' => 71,
                  'char' => 8,
                ),
                'name' => 'init',
                'call-type' => 1,
                'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                'line' => 71,
                'char' => 15,
              ),
              'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
              'line' => 72,
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
                  'variable' => 'path',
                  'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                  'line' => 72,
                  'char' => 11,
                ),
              ),
              'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
              'line' => 73,
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
                  'variable' => 'path',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'parse_url',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'uri',
                          'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                          'line' => 73,
                          'char' => 27,
                        ),
                        'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                        'line' => 73,
                        'char' => 27,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'constant',
                          'value' => 'PHP_URL_PATH',
                          'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                          'line' => 73,
                          'char' => 41,
                        ),
                        'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                        'line' => 73,
                        'char' => 41,
                      ),
                    ),
                    'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                    'line' => 73,
                    'char' => 42,
                  ),
                  'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                  'line' => 73,
                  'char' => 42,
                ),
              ),
              'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
              'line' => 74,
              'char' => 4,
            ),
            3 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'not',
                'left' => 
                array (
                  'type' => 'empty',
                  'left' => 
                  array (
                    'type' => 'list',
                    'left' => 
                    array (
                      'type' => 'property-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'this',
                        'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                        'line' => 74,
                        'char' => 18,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'methods',
                        'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                        'line' => 74,
                        'char' => 26,
                      ),
                      'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                      'line' => 74,
                      'char' => 26,
                    ),
                    'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                    'line' => 74,
                    'char' => 28,
                  ),
                  'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                  'line' => 74,
                  'char' => 28,
                ),
                'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                'line' => 74,
                'char' => 28,
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
                      'variable' => 'method',
                      'expr' => 
                      array (
                        'type' => 'string',
                        'value' => 'get',
                        'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                        'line' => 75,
                        'char' => 22,
                      ),
                      'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                      'line' => 75,
                      'char' => 22,
                    ),
                  ),
                  'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                  'line' => 76,
                  'char' => 5,
                ),
                1 => 
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
                          'value' => 'server',
                          'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                          'line' => 76,
                          'char' => 19,
                        ),
                        'right' => 
                        array (
                          'type' => 'string',
                          'value' => 'REQUEST_METHOD',
                          'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                          'line' => 76,
                          'char' => 36,
                        ),
                        'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                        'line' => 76,
                        'char' => 37,
                      ),
                      'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                      'line' => 76,
                      'char' => 39,
                    ),
                    'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                    'line' => 76,
                    'char' => 39,
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
                          'assign-type' => 'variable',
                          'operator' => 'assign',
                          'variable' => 'method',
                          'expr' => 
                          array (
                            'type' => 'fcall',
                            'name' => 'strtolower',
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
                                    'value' => 'server',
                                    'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                                    'line' => 77,
                                    'char' => 35,
                                  ),
                                  'right' => 
                                  array (
                                    'type' => 'string',
                                    'value' => 'REQUEST_METHOD',
                                    'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                                    'line' => 77,
                                    'char' => 52,
                                  ),
                                  'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                                  'line' => 77,
                                  'char' => 53,
                                ),
                                'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                                'line' => 77,
                                'char' => 53,
                              ),
                            ),
                            'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                            'line' => 77,
                            'char' => 54,
                          ),
                          'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                          'line' => 77,
                          'char' => 54,
                        ),
                      ),
                      'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                      'line' => 78,
                      'char' => 4,
                    ),
                  ),
                  'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                  'line' => 79,
                  'char' => 5,
                ),
                2 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'list',
                    'left' => 
                    array (
                      'type' => 'not',
                      'left' => 
                      array (
                        'type' => 'fcall',
                        'name' => 'in_array',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'method',
                              'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                              'line' => 79,
                              'char' => 24,
                            ),
                            'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                            'line' => 79,
                            'char' => 24,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'property-access',
                              'left' => 
                              array (
                                'type' => 'variable',
                                'value' => 'this',
                                'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                                'line' => 79,
                                'char' => 31,
                              ),
                              'right' => 
                              array (
                                'type' => 'variable',
                                'value' => 'methods',
                                'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                                'line' => 79,
                                'char' => 39,
                              ),
                              'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                              'line' => 79,
                              'char' => 39,
                            ),
                            'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                            'line' => 79,
                            'char' => 39,
                          ),
                        ),
                        'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                        'line' => 79,
                        'char' => 40,
                      ),
                      'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                      'line' => 79,
                      'char' => 40,
                    ),
                    'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                    'line' => 79,
                    'char' => 42,
                  ),
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'return',
                      'expr' => 
                      array (
                        'type' => 'bool',
                        'value' => 'false',
                        'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                        'line' => 80,
                        'char' => 17,
                      ),
                      'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                      'line' => 81,
                      'char' => 4,
                    ),
                  ),
                  'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                  'line' => 82,
                  'char' => 3,
                ),
              ),
              'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
              'line' => 84,
              'char' => 7,
            ),
            4 => 
            array (
              'type' => 'declare',
              'data-type' => 'array',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'matches',
                  'expr' => 
                  array (
                    'type' => 'empty-array',
                    'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                    'line' => 84,
                    'char' => 21,
                  ),
                  'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                  'line' => 84,
                  'char' => 21,
                ),
              ),
              'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
              'line' => 85,
              'char' => 8,
            ),
            5 => 
            array (
              'type' => 'declare',
              'data-type' => 'string',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'regex',
                  'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                  'line' => 85,
                  'char' => 15,
                ),
              ),
              'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
              'line' => 86,
              'char' => 5,
            ),
            6 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'regex',
                  'expr' => 
                  array (
                    'type' => 'concat',
                    'left' => 
                    array (
                      'type' => 'concat',
                      'left' => 
                      array (
                        'type' => 'string',
                        'value' => '@^',
                        'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                        'line' => 86,
                        'char' => 20,
                      ),
                      'right' => 
                      array (
                        'type' => 'property-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                          'line' => 86,
                          'char' => 27,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'regex',
                          'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                          'line' => 86,
                          'char' => 34,
                        ),
                        'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                        'line' => 86,
                        'char' => 34,
                      ),
                      'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                      'line' => 86,
                      'char' => 34,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => '$@',
                      'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                      'line' => 86,
                      'char' => 40,
                    ),
                    'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                    'line' => 86,
                    'char' => 40,
                  ),
                  'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                  'line' => 86,
                  'char' => 40,
                ),
              ),
              'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
              'line' => 87,
              'char' => 4,
            ),
            7 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'list',
                'left' => 
                array (
                  'type' => 'fcall',
                  'name' => 'preg_match',
                  'call-type' => 1,
                  'parameters' => 
                  array (
                    0 => 
                    array (
                      'parameter' => 
                      array (
                        'type' => 'variable',
                        'value' => 'regex',
                        'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                        'line' => 87,
                        'char' => 23,
                      ),
                      'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                      'line' => 87,
                      'char' => 23,
                    ),
                    1 => 
                    array (
                      'parameter' => 
                      array (
                        'type' => 'variable',
                        'value' => 'path',
                        'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                        'line' => 87,
                        'char' => 29,
                      ),
                      'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                      'line' => 87,
                      'char' => 29,
                    ),
                    2 => 
                    array (
                      'parameter' => 
                      array (
                        'type' => 'variable',
                        'value' => 'matches',
                        'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                        'line' => 87,
                        'char' => 38,
                      ),
                      'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                      'line' => 87,
                      'char' => 38,
                    ),
                  ),
                  'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                  'line' => 87,
                  'char' => 39,
                ),
                'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                'line' => 87,
                'char' => 41,
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
                      'variable' => 'index',
                      'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                      'line' => 88,
                      'char' => 13,
                    ),
                    1 => 
                    array (
                      'variable' => 'match',
                      'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                      'line' => 88,
                      'char' => 20,
                    ),
                  ),
                  'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                  'line' => 89,
                  'char' => 6,
                ),
                1 => 
                array (
                  'type' => 'for',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'matches',
                    'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                    'line' => 89,
                    'char' => 32,
                  ),
                  'key' => 'index',
                  'value' => 'match',
                  'reverse' => 0,
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'if',
                      'expr' => 
                      array (
                        'type' => 'list',
                        'left' => 
                        array (
                          'type' => 'fcall',
                          'name' => 'is_numeric',
                          'call-type' => 1,
                          'parameters' => 
                          array (
                            0 => 
                            array (
                              'parameter' => 
                              array (
                                'type' => 'variable',
                                'value' => 'index',
                                'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                                'line' => 90,
                                'char' => 25,
                              ),
                              'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                              'line' => 90,
                              'char' => 25,
                            ),
                          ),
                          'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                          'line' => 90,
                          'char' => 26,
                        ),
                        'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                        'line' => 90,
                        'char' => 28,
                      ),
                      'statements' => 
                      array (
                        0 => 
                        array (
                          'type' => 'unset',
                          'expr' => 
                          array (
                            'type' => 'list',
                            'left' => 
                            array (
                              'type' => 'array-access',
                              'left' => 
                              array (
                                'type' => 'variable',
                                'value' => 'matches',
                                'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                                'line' => 91,
                                'char' => 19,
                              ),
                              'right' => 
                              array (
                                'type' => 'variable',
                                'value' => 'index',
                                'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                                'line' => 91,
                                'char' => 25,
                              ),
                              'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                              'line' => 91,
                              'char' => 26,
                            ),
                            'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                            'line' => 91,
                            'char' => 27,
                          ),
                          'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                          'line' => 92,
                          'char' => 5,
                        ),
                      ),
                      'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                      'line' => 93,
                      'char' => 4,
                    ),
                  ),
                  'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                  'line' => 94,
                  'char' => 9,
                ),
                2 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'new',
                    'class' => 'RouteMatch',
                    'dynamic' => 0,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                          'line' => 94,
                          'char' => 30,
                        ),
                        'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                        'line' => 94,
                        'char' => 30,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'fcall',
                          'name' => 'array_merge',
                          'call-type' => 1,
                          'parameters' => 
                          array (
                            0 => 
                            array (
                              'parameter' => 
                              array (
                                'type' => 'property-access',
                                'left' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'this',
                                  'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                                  'line' => 94,
                                  'char' => 49,
                                ),
                                'right' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'defaults',
                                  'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                                  'line' => 94,
                                  'char' => 58,
                                ),
                                'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                                'line' => 94,
                                'char' => 58,
                              ),
                              'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                              'line' => 94,
                              'char' => 58,
                            ),
                            1 => 
                            array (
                              'parameter' => 
                              array (
                                'type' => 'variable',
                                'value' => 'matches',
                                'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                                'line' => 94,
                                'char' => 67,
                              ),
                              'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                              'line' => 94,
                              'char' => 67,
                            ),
                          ),
                          'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                          'line' => 94,
                          'char' => 68,
                        ),
                        'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                        'line' => 94,
                        'char' => 68,
                      ),
                    ),
                    'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                    'line' => 94,
                    'char' => 69,
                  ),
                  'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                  'line' => 95,
                  'char' => 3,
                ),
              ),
              'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
              'line' => 97,
              'char' => 8,
            ),
            8 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'bool',
                'value' => 'false',
                'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                'line' => 97,
                'char' => 15,
              ),
              'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
              'line' => 98,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Match route
	 * 
	 * @param string uri
	 * @param array  server
	 * @return bool|RouteMatch
	 *',
          'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
          'line' => 104,
          'char' => 3,
        ),
        2 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'replaceCallback',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'matches',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
              'line' => 105,
              'char' => 47,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'list',
                'left' => 
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
                          'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                          'line' => 107,
                          'char' => 18,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'params',
                          'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                          'line' => 107,
                          'char' => 25,
                        ),
                        'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                        'line' => 107,
                        'char' => 25,
                      ),
                      'right' => 
                      array (
                        'type' => 'array-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'matches',
                          'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                          'line' => 107,
                          'char' => 33,
                        ),
                        'right' => 
                        array (
                          'type' => 'int',
                          'value' => '2',
                          'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                          'line' => 107,
                          'char' => 35,
                        ),
                        'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                        'line' => 107,
                        'char' => 36,
                      ),
                      'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                      'line' => 107,
                      'char' => 37,
                    ),
                    'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                    'line' => 107,
                    'char' => 38,
                  ),
                  'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                  'line' => 107,
                  'char' => 38,
                ),
                'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                'line' => 107,
                'char' => 40,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'concat',
                    'left' => 
                    array (
                      'type' => 'array-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'matches',
                        'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                        'line' => 108,
                        'char' => 18,
                      ),
                      'right' => 
                      array (
                        'type' => 'int',
                        'value' => '1',
                        'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                        'line' => 108,
                        'char' => 20,
                      ),
                      'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                      'line' => 108,
                      'char' => 22,
                    ),
                    'right' => 
                    array (
                      'type' => 'array-access',
                      'left' => 
                      array (
                        'type' => 'property-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                          'line' => 108,
                          'char' => 29,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'params',
                          'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                          'line' => 108,
                          'char' => 36,
                        ),
                        'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                        'line' => 108,
                        'char' => 36,
                      ),
                      'right' => 
                      array (
                        'type' => 'array-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'matches',
                          'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                          'line' => 108,
                          'char' => 44,
                        ),
                        'right' => 
                        array (
                          'type' => 'int',
                          'value' => '2',
                          'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                          'line' => 108,
                          'char' => 46,
                        ),
                        'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                        'line' => 108,
                        'char' => 47,
                      ),
                      'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                      'line' => 108,
                      'char' => 48,
                    ),
                    'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                    'line' => 108,
                    'char' => 48,
                  ),
                  'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                  'line' => 109,
                  'char' => 3,
                ),
              ),
              'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
              'line' => 110,
              'char' => 8,
            ),
            1 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'string',
                'value' => '',
                'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                'line' => 110,
                'char' => 12,
              ),
              'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
              'line' => 111,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * [replaceCallback description]
	 * @param  {[type]} array matches       [description]
	 * @return {[type]}       [description]
	 *',
          'return-type' => 
          array (
            'type' => 'return-type',
            'list' => 
            array (
              0 => 
              array (
                'type' => 'return-type-parameter',
                'data-type' => 'string',
                'mandatory' => 0,
                'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                'line' => 106,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
            'line' => 106,
            'char' => 2,
          ),
          'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
          'line' => 117,
          'char' => 2,
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
              'name' => 'params',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'empty-array',
                'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                'line' => 118,
                'char' => 44,
              ),
              'reference' => 0,
              'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
              'line' => 118,
              'char' => 44,
            ),
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
                  'value' => 'this',
                  'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                  'line' => 120,
                  'char' => 8,
                ),
                'name' => 'init',
                'call-type' => 1,
                'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                'line' => 120,
                'char' => 15,
              ),
              'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
              'line' => 121,
              'char' => 4,
            ),
            1 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'property-access',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'this',
                  'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                  'line' => 121,
                  'char' => 11,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => 'tokens',
                  'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                  'line' => 121,
                  'char' => 19,
                ),
                'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                'line' => 121,
                'char' => 19,
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
                      'variable' => 'token',
                      'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                      'line' => 122,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                  'line' => 123,
                  'char' => 6,
                ),
                1 => 
                array (
                  'type' => 'for',
                  'expr' => 
                  array (
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                      'line' => 123,
                      'char' => 22,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'tokens',
                      'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                      'line' => 123,
                      'char' => 30,
                    ),
                    'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                    'line' => 123,
                    'char' => 30,
                  ),
                  'value' => 'token',
                  'reverse' => 0,
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
                          'variable' => 'name',
                          'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                          'line' => 124,
                          'char' => 13,
                        ),
                      ),
                      'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                      'line' => 125,
                      'char' => 7,
                    ),
                    1 => 
                    array (
                      'type' => 'declare',
                      'data-type' => 'variable',
                      'variables' => 
                      array (
                        0 => 
                        array (
                          'variable' => 'optional',
                          'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                          'line' => 125,
                          'char' => 17,
                        ),
                      ),
                      'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                      'line' => 126,
                      'char' => 7,
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
                          'variable' => 'name',
                          'expr' => 
                          array (
                            'type' => 'fcall',
                            'name' => 'current',
                            'call-type' => 1,
                            'parameters' => 
                            array (
                              0 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'token',
                                  'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                                  'line' => 126,
                                  'char' => 29,
                                ),
                                'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                                'line' => 126,
                                'char' => 29,
                              ),
                            ),
                            'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                            'line' => 126,
                            'char' => 30,
                          ),
                          'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                          'line' => 126,
                          'char' => 30,
                        ),
                      ),
                      'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                      'line' => 127,
                      'char' => 7,
                    ),
                    3 => 
                    array (
                      'type' => 'let',
                      'assignments' => 
                      array (
                        0 => 
                        array (
                          'assign-type' => 'variable',
                          'operator' => 'assign',
                          'variable' => 'optional',
                          'expr' => 
                          array (
                            'type' => 'fcall',
                            'name' => 'next',
                            'call-type' => 1,
                            'parameters' => 
                            array (
                              0 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'token',
                                  'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                                  'line' => 127,
                                  'char' => 30,
                                ),
                                'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                                'line' => 127,
                                'char' => 30,
                              ),
                            ),
                            'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                            'line' => 127,
                            'char' => 31,
                          ),
                          'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                          'line' => 127,
                          'char' => 31,
                        ),
                      ),
                      'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                      'line' => 129,
                      'char' => 6,
                    ),
                    4 => 
                    array (
                      'type' => 'if',
                      'expr' => 
                      array (
                        'type' => 'or',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'optional',
                          'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                          'line' => 129,
                          'char' => 18,
                        ),
                        'right' => 
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
                                'value' => 'params',
                                'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                                'line' => 129,
                                'char' => 32,
                              ),
                              'right' => 
                              array (
                                'type' => 'variable',
                                'value' => 'name',
                                'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                                'line' => 129,
                                'char' => 37,
                              ),
                              'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                              'line' => 129,
                              'char' => 38,
                            ),
                            'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                            'line' => 129,
                            'char' => 40,
                          ),
                          'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                          'line' => 129,
                          'char' => 40,
                        ),
                        'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                        'line' => 129,
                        'char' => 40,
                      ),
                      'statements' => 
                      array (
                        0 => 
                        array (
                          'type' => 'continue',
                          'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                          'line' => 131,
                          'char' => 5,
                        ),
                      ),
                      'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                      'line' => 133,
                      'char' => 9,
                    ),
                    5 => 
                    array (
                      'type' => 'throw',
                      'expr' => 
                      array (
                        'type' => 'new',
                        'class' => 'Exception\\MissingParameterException',
                        'dynamic' => 0,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'mcall',
                              'variable' => 
                              array (
                                'type' => 'variable',
                                'value' => 'this',
                                'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                                'line' => 133,
                                'char' => 56,
                              ),
                              'name' => 'getName',
                              'call-type' => 1,
                              'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                              'line' => 133,
                              'char' => 66,
                            ),
                            'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                            'line' => 133,
                            'char' => 66,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'name',
                              'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                              'line' => 133,
                              'char' => 72,
                            ),
                            'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                            'line' => 133,
                            'char' => 72,
                          ),
                        ),
                        'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                        'line' => 133,
                        'char' => 73,
                      ),
                      'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                      'line' => 134,
                      'char' => 4,
                    ),
                  ),
                  'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                  'line' => 135,
                  'char' => 3,
                ),
              ),
              'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
              'line' => 136,
              'char' => 5,
            ),
            2 => 
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
                    'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                    'line' => 136,
                    'char' => 28,
                  ),
                  'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                  'line' => 136,
                  'char' => 28,
                ),
              ),
              'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
              'line' => 137,
              'char' => 8,
            ),
            3 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'preg_replace_callback',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'string',
                      'value' => '@{([^A-Za-z]*)([A-Za-z]+)[?]?(?::[^}]+)?}@',
                      'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                      'line' => 137,
                      'char' => 76,
                    ),
                    'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                    'line' => 137,
                    'char' => 76,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'array',
                      'left' => 
                      array (
                        0 => 
                        array (
                          'value' => 
                          array (
                            'type' => 'variable',
                            'value' => 'this',
                            'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                            'line' => 137,
                            'char' => 83,
                          ),
                          'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                          'line' => 137,
                          'char' => 83,
                        ),
                        1 => 
                        array (
                          'value' => 
                          array (
                            'type' => 'string',
                            'value' => 'replaceCallback',
                            'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                            'line' => 137,
                            'char' => 102,
                          ),
                          'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                          'line' => 137,
                          'char' => 102,
                        ),
                      ),
                      'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                      'line' => 137,
                      'char' => 103,
                    ),
                    'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                    'line' => 137,
                    'char' => 103,
                  ),
                  2 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'property-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'this',
                        'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                        'line' => 137,
                        'char' => 110,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'path',
                        'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                        'line' => 137,
                        'char' => 115,
                      ),
                      'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                      'line' => 137,
                      'char' => 115,
                    ),
                    'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                    'line' => 137,
                    'char' => 115,
                  ),
                ),
                'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                'line' => 137,
                'char' => 116,
              ),
              'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
              'line' => 138,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	* @param array params
	* @return string
	* @throws Exception\\MissingParameterException
	*',
          'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
          'line' => 144,
          'char' => 3,
        ),
        4 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'method',
          'name' => 'init',
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'property-access',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'this',
                  'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                  'line' => 147,
                  'char' => 11,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => 'regex',
                  'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                  'line' => 147,
                  'char' => 18,
                ),
                'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                'line' => 147,
                'char' => 18,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'return',
                  'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                  'line' => 149,
                  'char' => 3,
                ),
              ),
              'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
              'line' => 150,
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
                  'property' => 'regex',
                  'expr' => 
                  array (
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                      'line' => 150,
                      'char' => 26,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'path',
                      'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                      'line' => 150,
                      'char' => 31,
                    ),
                    'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                    'line' => 150,
                    'char' => 31,
                  ),
                  'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                  'line' => 150,
                  'char' => 31,
                ),
              ),
              'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
              'line' => 151,
              'char' => 5,
            ),
            2 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'matches',
                  'expr' => 
                  array (
                    'type' => 'empty-array',
                    'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                    'line' => 151,
                    'char' => 19,
                  ),
                  'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                  'line' => 151,
                  'char' => 19,
                ),
              ),
              'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
              'line' => 152,
              'char' => 5,
            ),
            3 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'fullString',
                  'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                  'line' => 152,
                  'char' => 17,
                ),
              ),
              'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
              'line' => 153,
              'char' => 5,
            ),
            4 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'name',
                  'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                  'line' => 153,
                  'char' => 11,
                ),
              ),
              'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
              'line' => 154,
              'char' => 5,
            ),
            5 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'optional',
                  'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                  'line' => 154,
                  'char' => 15,
                ),
              ),
              'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
              'line' => 155,
              'char' => 5,
            ),
            6 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'constraint',
                  'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                  'line' => 155,
                  'char' => 17,
                ),
              ),
              'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
              'line' => 156,
              'char' => 5,
            ),
            7 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'replace',
                  'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                  'line' => 156,
                  'char' => 14,
                ),
              ),
              'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
              'line' => 157,
              'char' => 5,
            ),
            8 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'count',
                  'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                  'line' => 157,
                  'char' => 12,
                ),
              ),
              'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
              'line' => 159,
              'char' => 5,
            ),
            9 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'count',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'preg_match_all',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'string',
                          'value' => '@{([^A-Za-z]*([A-Za-z]+))([?]?)(?::([^}]+))?}@',
                          'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                          'line' => 159,
                          'char' => 78,
                        ),
                        'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                        'line' => 159,
                        'char' => 78,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'property-access',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'this',
                            'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                            'line' => 159,
                            'char' => 85,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'regex',
                            'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                            'line' => 159,
                            'char' => 91,
                          ),
                          'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                          'line' => 159,
                          'char' => 91,
                        ),
                        'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                        'line' => 159,
                        'char' => 91,
                      ),
                      2 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'matches',
                          'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                          'line' => 159,
                          'char' => 100,
                        ),
                        'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                        'line' => 159,
                        'char' => 100,
                      ),
                    ),
                    'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                    'line' => 159,
                    'char' => 101,
                  ),
                  'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                  'line' => 159,
                  'char' => 101,
                ),
              ),
              'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
              'line' => 160,
              'char' => 4,
            ),
            10 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'count',
                'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                'line' => 160,
                'char' => 12,
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
                      'property' => 'tokens',
                      'expr' => 
                      array (
                        'type' => 'new',
                        'class' => '\\SplFixedArray',
                        'dynamic' => 0,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'count',
                              'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                              'line' => 161,
                              'char' => 47,
                            ),
                            'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                            'line' => 161,
                            'char' => 47,
                          ),
                        ),
                        'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                        'line' => 161,
                        'char' => 48,
                      ),
                      'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                      'line' => 161,
                      'char' => 48,
                    ),
                  ),
                  'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                  'line' => 162,
                  'char' => 6,
                ),
                1 => 
                array (
                  'type' => 'declare',
                  'data-type' => 'variable',
                  'variables' => 
                  array (
                    0 => 
                    array (
                      'variable' => 'index',
                      'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                      'line' => 162,
                      'char' => 13,
                    ),
                    1 => 
                    array (
                      'variable' => 'token',
                      'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                      'line' => 162,
                      'char' => 20,
                    ),
                  ),
                  'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                  'line' => 163,
                  'char' => 6,
                ),
                2 => 
                array (
                  'type' => 'for',
                  'expr' => 
                  array (
                    'type' => 'array-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'matches',
                      'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                      'line' => 163,
                      'char' => 31,
                    ),
                    'right' => 
                    array (
                      'type' => 'int',
                      'value' => '1',
                      'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                      'line' => 163,
                      'char' => 33,
                    ),
                    'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                    'line' => 163,
                    'char' => 35,
                  ),
                  'key' => 'index',
                  'value' => 'token',
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
                          'variable' => 'fullString',
                          'expr' => 
                          array (
                            'type' => 'array-access',
                            'left' => 
                            array (
                              'type' => 'array-access',
                              'left' => 
                              array (
                                'type' => 'variable',
                                'value' => 'matches',
                                'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                                'line' => 164,
                                'char' => 29,
                              ),
                              'right' => 
                              array (
                                'type' => 'int',
                                'value' => '1',
                                'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                                'line' => 164,
                                'char' => 31,
                              ),
                              'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                              'line' => 164,
                              'char' => 32,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'index',
                              'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                              'line' => 164,
                              'char' => 38,
                            ),
                            'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                            'line' => 164,
                            'char' => 39,
                          ),
                          'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                          'line' => 164,
                          'char' => 39,
                        ),
                      ),
                      'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                      'line' => 165,
                      'char' => 7,
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
                          'variable' => 'name',
                          'expr' => 
                          array (
                            'type' => 'array-access',
                            'left' => 
                            array (
                              'type' => 'array-access',
                              'left' => 
                              array (
                                'type' => 'variable',
                                'value' => 'matches',
                                'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                                'line' => 165,
                                'char' => 23,
                              ),
                              'right' => 
                              array (
                                'type' => 'int',
                                'value' => '2',
                                'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                                'line' => 165,
                                'char' => 25,
                              ),
                              'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                              'line' => 165,
                              'char' => 26,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'index',
                              'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                              'line' => 165,
                              'char' => 32,
                            ),
                            'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                            'line' => 165,
                            'char' => 33,
                          ),
                          'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                          'line' => 165,
                          'char' => 33,
                        ),
                      ),
                      'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                      'line' => 166,
                      'char' => 7,
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
                          'variable' => 'optional',
                          'expr' => 
                          array (
                            'type' => 'not',
                            'left' => 
                            array (
                              'type' => 'empty',
                              'left' => 
                              array (
                                'type' => 'list',
                                'left' => 
                                array (
                                  'type' => 'array-access',
                                  'left' => 
                                  array (
                                    'type' => 'array-access',
                                    'left' => 
                                    array (
                                      'type' => 'variable',
                                      'value' => 'matches',
                                      'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                                      'line' => 166,
                                      'char' => 34,
                                    ),
                                    'right' => 
                                    array (
                                      'type' => 'int',
                                      'value' => '3',
                                      'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                                      'line' => 166,
                                      'char' => 36,
                                    ),
                                    'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                                    'line' => 166,
                                    'char' => 37,
                                  ),
                                  'right' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'index',
                                    'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                                    'line' => 166,
                                    'char' => 43,
                                  ),
                                  'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                                  'line' => 166,
                                  'char' => 44,
                                ),
                                'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                                'line' => 166,
                                'char' => 45,
                              ),
                              'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                              'line' => 166,
                              'char' => 45,
                            ),
                            'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                            'line' => 166,
                            'char' => 45,
                          ),
                          'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                          'line' => 166,
                          'char' => 45,
                        ),
                      ),
                      'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                      'line' => 167,
                      'char' => 7,
                    ),
                    3 => 
                    array (
                      'type' => 'let',
                      'assignments' => 
                      array (
                        0 => 
                        array (
                          'assign-type' => 'variable',
                          'operator' => 'assign',
                          'variable' => 'constraint',
                          'expr' => 
                          array (
                            'type' => 'ternary',
                            'left' => 
                            array (
                              'type' => 'empty',
                              'left' => 
                              array (
                                'type' => 'list',
                                'left' => 
                                array (
                                  'type' => 'array-access',
                                  'left' => 
                                  array (
                                    'type' => 'array-access',
                                    'left' => 
                                    array (
                                      'type' => 'variable',
                                      'value' => 'matches',
                                      'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                                      'line' => 167,
                                      'char' => 35,
                                    ),
                                    'right' => 
                                    array (
                                      'type' => 'int',
                                      'value' => '4',
                                      'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                                      'line' => 167,
                                      'char' => 37,
                                    ),
                                    'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                                    'line' => 167,
                                    'char' => 38,
                                  ),
                                  'right' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'index',
                                    'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                                    'line' => 167,
                                    'char' => 44,
                                  ),
                                  'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                                  'line' => 167,
                                  'char' => 45,
                                ),
                                'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                                'line' => 167,
                                'char' => 47,
                              ),
                              'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                              'line' => 167,
                              'char' => 47,
                            ),
                            'right' => 
                            array (
                              'type' => 'string',
                              'value' => '.*',
                              'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                              'line' => 167,
                              'char' => 54,
                            ),
                            'extra' => 
                            array (
                              'type' => 'array-access',
                              'left' => 
                              array (
                                'type' => 'array-access',
                                'left' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'matches',
                                  'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                                  'line' => 167,
                                  'char' => 63,
                                ),
                                'right' => 
                                array (
                                  'type' => 'int',
                                  'value' => '4',
                                  'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                                  'line' => 167,
                                  'char' => 65,
                                ),
                                'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                                'line' => 167,
                                'char' => 66,
                              ),
                              'right' => 
                              array (
                                'type' => 'variable',
                                'value' => 'index',
                                'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                                'line' => 167,
                                'char' => 72,
                              ),
                              'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                              'line' => 167,
                              'char' => 73,
                            ),
                            'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                            'line' => 167,
                            'char' => 73,
                          ),
                          'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                          'line' => 167,
                          'char' => 73,
                        ),
                      ),
                      'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                      'line' => 168,
                      'char' => 6,
                    ),
                    4 => 
                    array (
                      'type' => 'if',
                      'expr' => 
                      array (
                        'type' => 'list',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'optional',
                          'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                          'line' => 168,
                          'char' => 17,
                        ),
                        'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                        'line' => 168,
                        'char' => 19,
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
                              'assign-type' => 'variable',
                              'operator' => 'assign',
                              'variable' => 'replace',
                              'expr' => 
                              array (
                                'type' => 'fcall',
                                'name' => 'sprintf',
                                'call-type' => 1,
                                'parameters' => 
                                array (
                                  0 => 
                                  array (
                                    'parameter' => 
                                    array (
                                      'type' => 'string',
                                      'value' => '(?:%s(?<%s>%s))?',
                                      'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                                      'line' => 169,
                                      'char' => 47,
                                    ),
                                    'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                                    'line' => 169,
                                    'char' => 47,
                                  ),
                                  1 => 
                                  array (
                                    'parameter' => 
                                    array (
                                      'type' => 'fcall',
                                      'name' => 'str_replace',
                                      'call-type' => 1,
                                      'parameters' => 
                                      array (
                                        0 => 
                                        array (
                                          'parameter' => 
                                          array (
                                            'type' => 'variable',
                                            'value' => 'name',
                                            'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                                            'line' => 169,
                                            'char' => 65,
                                          ),
                                          'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                                          'line' => 169,
                                          'char' => 65,
                                        ),
                                        1 => 
                                        array (
                                          'parameter' => 
                                          array (
                                            'type' => 'string',
                                            'value' => '',
                                            'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                                            'line' => 169,
                                            'char' => 69,
                                          ),
                                          'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                                          'line' => 169,
                                          'char' => 69,
                                        ),
                                        2 => 
                                        array (
                                          'parameter' => 
                                          array (
                                            'type' => 'variable',
                                            'value' => 'fullString',
                                            'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                                            'line' => 169,
                                            'char' => 81,
                                          ),
                                          'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                                          'line' => 169,
                                          'char' => 81,
                                        ),
                                      ),
                                      'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                                      'line' => 169,
                                      'char' => 82,
                                    ),
                                    'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                                    'line' => 169,
                                    'char' => 82,
                                  ),
                                  2 => 
                                  array (
                                    'parameter' => 
                                    array (
                                      'type' => 'variable',
                                      'value' => 'name',
                                      'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                                      'line' => 169,
                                      'char' => 88,
                                    ),
                                    'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                                    'line' => 169,
                                    'char' => 88,
                                  ),
                                  3 => 
                                  array (
                                    'parameter' => 
                                    array (
                                      'type' => 'variable',
                                      'value' => 'constraint',
                                      'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                                      'line' => 169,
                                      'char' => 100,
                                    ),
                                    'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                                    'line' => 169,
                                    'char' => 100,
                                  ),
                                ),
                                'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                                'line' => 169,
                                'char' => 101,
                              ),
                              'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                              'line' => 169,
                              'char' => 101,
                            ),
                          ),
                          'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                          'line' => 170,
                          'char' => 5,
                        ),
                      ),
                      'else_statements' => 
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
                              'variable' => 'replace',
                              'expr' => 
                              array (
                                'type' => 'fcall',
                                'name' => 'sprintf',
                                'call-type' => 1,
                                'parameters' => 
                                array (
                                  0 => 
                                  array (
                                    'parameter' => 
                                    array (
                                      'type' => 'string',
                                      'value' => '(?<%s>%s)',
                                      'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                                      'line' => 171,
                                      'char' => 40,
                                    ),
                                    'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                                    'line' => 171,
                                    'char' => 40,
                                  ),
                                  1 => 
                                  array (
                                    'parameter' => 
                                    array (
                                      'type' => 'variable',
                                      'value' => 'name',
                                      'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                                      'line' => 171,
                                      'char' => 46,
                                    ),
                                    'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                                    'line' => 171,
                                    'char' => 46,
                                  ),
                                  2 => 
                                  array (
                                    'parameter' => 
                                    array (
                                      'type' => 'variable',
                                      'value' => 'constraint',
                                      'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                                      'line' => 171,
                                      'char' => 58,
                                    ),
                                    'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                                    'line' => 171,
                                    'char' => 58,
                                  ),
                                ),
                                'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                                'line' => 171,
                                'char' => 59,
                              ),
                              'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                              'line' => 171,
                              'char' => 59,
                            ),
                          ),
                          'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                          'line' => 172,
                          'char' => 5,
                        ),
                      ),
                      'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                      'line' => 173,
                      'char' => 7,
                    ),
                    5 => 
                    array (
                      'type' => 'let',
                      'assignments' => 
                      array (
                        0 => 
                        array (
                          'assign-type' => 'object-property',
                          'operator' => 'assign',
                          'variable' => 'this',
                          'property' => 'regex',
                          'expr' => 
                          array (
                            'type' => 'fcall',
                            'name' => 'str_replace',
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
                                    'type' => 'array-access',
                                    'left' => 
                                    array (
                                      'type' => 'variable',
                                      'value' => 'matches',
                                      'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                                      'line' => 173,
                                      'char' => 42,
                                    ),
                                    'right' => 
                                    array (
                                      'type' => 'int',
                                      'value' => '0',
                                      'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                                      'line' => 173,
                                      'char' => 44,
                                    ),
                                    'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                                    'line' => 173,
                                    'char' => 45,
                                  ),
                                  'right' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'index',
                                    'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                                    'line' => 173,
                                    'char' => 51,
                                  ),
                                  'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                                  'line' => 173,
                                  'char' => 52,
                                ),
                                'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                                'line' => 173,
                                'char' => 52,
                              ),
                              1 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'replace',
                                  'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                                  'line' => 173,
                                  'char' => 61,
                                ),
                                'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                                'line' => 173,
                                'char' => 61,
                              ),
                              2 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'property-access',
                                  'left' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'this',
                                    'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                                    'line' => 173,
                                    'char' => 68,
                                  ),
                                  'right' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'regex',
                                    'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                                    'line' => 173,
                                    'char' => 74,
                                  ),
                                  'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                                  'line' => 173,
                                  'char' => 74,
                                ),
                                'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                                'line' => 173,
                                'char' => 74,
                              ),
                            ),
                            'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                            'line' => 173,
                            'char' => 75,
                          ),
                          'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                          'line' => 173,
                          'char' => 75,
                        ),
                      ),
                      'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                      'line' => 174,
                      'char' => 7,
                    ),
                    6 => 
                    array (
                      'type' => 'let',
                      'assignments' => 
                      array (
                        0 => 
                        array (
                          'assign-type' => 'object-property-array-index',
                          'operator' => 'assign',
                          'variable' => 'this',
                          'property' => 'tokens',
                          'index-expr' => 
                          array (
                            0 => 
                            array (
                              'type' => 'variable',
                              'value' => 'index',
                              'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                              'line' => 174,
                              'char' => 27,
                            ),
                          ),
                          'expr' => 
                          array (
                            'type' => 'array',
                            'left' => 
                            array (
                              0 => 
                              array (
                                'value' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'name',
                                  'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                                  'line' => 174,
                                  'char' => 36,
                                ),
                                'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                                'line' => 174,
                                'char' => 36,
                              ),
                              1 => 
                              array (
                                'value' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'optional',
                                  'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                                  'line' => 174,
                                  'char' => 46,
                                ),
                                'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                                'line' => 174,
                                'char' => 46,
                              ),
                            ),
                            'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                            'line' => 174,
                            'char' => 47,
                          ),
                          'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                          'line' => 174,
                          'char' => 47,
                        ),
                      ),
                      'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                      'line' => 175,
                      'char' => 4,
                    ),
                  ),
                  'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
                  'line' => 176,
                  'char' => 3,
                ),
              ),
              'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
              'line' => 177,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Init the route for match/assemble
	 * 
	 * @return void
	 *',
          'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
          'line' => 178,
          'char' => 1,
        ),
      ),
      'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
      'line' => 178,
      'char' => 1,
    ),
    'file' => '/home/chris/www/tiny/tiny/router/Route.zep',
    'line' => 178,
    'char' => 1,
  ),
);