<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'Tiny\\Router',
    'file' => '/home/chris/www/tiny/tiny/router/RouterInterface.zep',
    'line' => 3,
    'char' => 9,
  ),
  1 => 
  array (
    'type' => 'interface',
    'name' => 'RouterInterface',
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
          'name' => 'match',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'uri',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/chris/www/tiny/tiny/router/RouterInterface.zep',
              'line' => 12,
              'char' => 34,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'server',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/chris/www/tiny/tiny/router/RouterInterface.zep',
              'line' => 12,
              'char' => 48,
            ),
          ),
          'docblock' => '**
	 * Match routring
	 * 
	 * @param  string uri
	 * @param  array  server
	 * @return RouteMatchInterface
	 *',
          'file' => '/home/chris/www/tiny/tiny/router/RouterInterface.zep',
          'line' => 20,
          'char' => 3,
        ),
        1 => 
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
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/chris/www/tiny/tiny/router/RouterInterface.zep',
              'line' => 21,
              'char' => 38,
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
                'file' => '/home/chris/www/tiny/tiny/router/RouterInterface.zep',
                'line' => 21,
                'char' => 57,
              ),
              'reference' => 0,
              'file' => '/home/chris/www/tiny/tiny/router/RouterInterface.zep',
              'line' => 21,
              'char' => 57,
            ),
          ),
          'docblock' => '**
	 * Assemble routing
	 * 
	 * @param  string name
	 * @param  array  params = []
	 * @return string
	 *',
          'file' => '/home/chris/www/tiny/tiny/router/RouterInterface.zep',
          'line' => 22,
          'char' => 1,
        ),
      ),
      'file' => '/home/chris/www/tiny/tiny/router/RouterInterface.zep',
      'line' => 22,
      'char' => 1,
    ),
    'file' => '/home/chris/www/tiny/tiny/router/RouterInterface.zep',
    'line' => 22,
    'char' => 1,
  ),
);