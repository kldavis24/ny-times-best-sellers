<?php declare(strict_types = 1);

// osfsl-/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../guzzlehttp/psr7/src/Request.php-PHPStan\BetterReflection\Reflection\ReflectionClass-GuzzleHttp\Psr7\Request
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-b6348269914160057adcfe9c7c7d44067308573423005b7e8194dbd439bb7bb3-8.4.17-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'GuzzleHttp\\Psr7\\Request',
        'filename' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../guzzlehttp/psr7/src/Request.php',
      ),
    ),
    'namespace' => 'GuzzleHttp\\Psr7',
    'name' => 'GuzzleHttp\\Psr7\\Request',
    'shortName' => 'Request',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * PSR-7 request implementation.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 15,
    'endLine' => 159,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'Psr\\Http\\Message\\RequestInterface',
    ),
    'traitClassNames' => 
    array (
      0 => 'GuzzleHttp\\Psr7\\MessageTrait',
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'method' => 
      array (
        'declaringClassName' => 'GuzzleHttp\\Psr7\\Request',
        'implementingClassName' => 'GuzzleHttp\\Psr7\\Request',
        'name' => 'method',
        'modifiers' => 4,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/** @var string */',
        'attributes' => 
        array (
        ),
        'startLine' => 20,
        'endLine' => 20,
        'startColumn' => 5,
        'endColumn' => 20,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'requestTarget' => 
      array (
        'declaringClassName' => 'GuzzleHttp\\Psr7\\Request',
        'implementingClassName' => 'GuzzleHttp\\Psr7\\Request',
        'name' => 'requestTarget',
        'modifiers' => 4,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/** @var string|null */',
        'attributes' => 
        array (
        ),
        'startLine' => 23,
        'endLine' => 23,
        'startColumn' => 5,
        'endColumn' => 27,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'uri' => 
      array (
        'declaringClassName' => 'GuzzleHttp\\Psr7\\Request',
        'implementingClassName' => 'GuzzleHttp\\Psr7\\Request',
        'name' => 'uri',
        'modifiers' => 4,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/** @var UriInterface */',
        'attributes' => 
        array (
        ),
        'startLine' => 26,
        'endLine' => 26,
        'startColumn' => 5,
        'endColumn' => 17,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
    ),
    'immediateMethods' => 
    array (
      '__construct' => 
      array (
        'name' => '__construct',
        'parameters' => 
        array (
          'method' => 
          array (
            'name' => 'method',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 36,
            'endLine' => 36,
            'startColumn' => 9,
            'endColumn' => 22,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'uri' => 
          array (
            'name' => 'uri',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 37,
            'endLine' => 37,
            'startColumn' => 9,
            'endColumn' => 12,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'headers' => 
          array (
            'name' => 'headers',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 38,
                'endLine' => 38,
                'startTokenPos' => 96,
                'startFilePos' => 936,
                'endTokenPos' => 97,
                'endFilePos' => 937,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'array',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 38,
            'endLine' => 38,
            'startColumn' => 9,
            'endColumn' => 27,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'body' => 
          array (
            'name' => 'body',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 39,
                'endLine' => 39,
                'startTokenPos' => 104,
                'startFilePos' => 956,
                'endTokenPos' => 104,
                'endFilePos' => 959,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 39,
            'endLine' => 39,
            'startColumn' => 9,
            'endColumn' => 20,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
          'version' => 
          array (
            'name' => 'version',
            'default' => 
            array (
              'code' => '\'1.1\'',
              'attributes' => 
              array (
                'startLine' => 40,
                'endLine' => 40,
                'startTokenPos' => 113,
                'startFilePos' => 988,
                'endTokenPos' => 113,
                'endFilePos' => 992,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 40,
            'endLine' => 40,
            'startColumn' => 9,
            'endColumn' => 31,
            'parameterIndex' => 4,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @param string                               $method  HTTP method
 * @param string|UriInterface                  $uri     URI
 * @param (string|string[])[]                  $headers Request headers
 * @param string|resource|StreamInterface|null $body    Request body
 * @param string                               $version Protocol version
 */',
        'startLine' => 35,
        'endLine' => 59,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'GuzzleHttp\\Psr7',
        'declaringClassName' => 'GuzzleHttp\\Psr7\\Request',
        'implementingClassName' => 'GuzzleHttp\\Psr7\\Request',
        'currentClassName' => 'GuzzleHttp\\Psr7\\Request',
        'aliasName' => NULL,
      ),
      'getRequestTarget' => 
      array (
        'name' => 'getRequestTarget',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 61,
        'endLine' => 76,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'GuzzleHttp\\Psr7',
        'declaringClassName' => 'GuzzleHttp\\Psr7\\Request',
        'implementingClassName' => 'GuzzleHttp\\Psr7\\Request',
        'currentClassName' => 'GuzzleHttp\\Psr7\\Request',
        'aliasName' => NULL,
      ),
      'withRequestTarget' => 
      array (
        'name' => 'withRequestTarget',
        'parameters' => 
        array (
          'requestTarget' => 
          array (
            'name' => 'requestTarget',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 78,
            'endLine' => 78,
            'startColumn' => 39,
            'endColumn' => 52,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Psr\\Http\\Message\\RequestInterface',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 78,
        'endLine' => 90,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'GuzzleHttp\\Psr7',
        'declaringClassName' => 'GuzzleHttp\\Psr7\\Request',
        'implementingClassName' => 'GuzzleHttp\\Psr7\\Request',
        'currentClassName' => 'GuzzleHttp\\Psr7\\Request',
        'aliasName' => NULL,
      ),
      'getMethod' => 
      array (
        'name' => 'getMethod',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 92,
        'endLine' => 95,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'GuzzleHttp\\Psr7',
        'declaringClassName' => 'GuzzleHttp\\Psr7\\Request',
        'implementingClassName' => 'GuzzleHttp\\Psr7\\Request',
        'currentClassName' => 'GuzzleHttp\\Psr7\\Request',
        'aliasName' => NULL,
      ),
      'withMethod' => 
      array (
        'name' => 'withMethod',
        'parameters' => 
        array (
          'method' => 
          array (
            'name' => 'method',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 97,
            'endLine' => 97,
            'startColumn' => 32,
            'endColumn' => 38,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Psr\\Http\\Message\\RequestInterface',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 97,
        'endLine' => 104,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'GuzzleHttp\\Psr7',
        'declaringClassName' => 'GuzzleHttp\\Psr7\\Request',
        'implementingClassName' => 'GuzzleHttp\\Psr7\\Request',
        'currentClassName' => 'GuzzleHttp\\Psr7\\Request',
        'aliasName' => NULL,
      ),
      'getUri' => 
      array (
        'name' => 'getUri',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Psr\\Http\\Message\\UriInterface',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 106,
        'endLine' => 109,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'GuzzleHttp\\Psr7',
        'declaringClassName' => 'GuzzleHttp\\Psr7\\Request',
        'implementingClassName' => 'GuzzleHttp\\Psr7\\Request',
        'currentClassName' => 'GuzzleHttp\\Psr7\\Request',
        'aliasName' => NULL,
      ),
      'withUri' => 
      array (
        'name' => 'withUri',
        'parameters' => 
        array (
          'uri' => 
          array (
            'name' => 'uri',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Psr\\Http\\Message\\UriInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 111,
            'endLine' => 111,
            'startColumn' => 29,
            'endColumn' => 45,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'preserveHost' => 
          array (
            'name' => 'preserveHost',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 111,
                'endLine' => 111,
                'startTokenPos' => 546,
                'startFilePos' => 2704,
                'endTokenPos' => 546,
                'endFilePos' => 2708,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 111,
            'endLine' => 111,
            'startColumn' => 48,
            'endColumn' => 68,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Psr\\Http\\Message\\RequestInterface',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 111,
        'endLine' => 125,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'GuzzleHttp\\Psr7',
        'declaringClassName' => 'GuzzleHttp\\Psr7\\Request',
        'implementingClassName' => 'GuzzleHttp\\Psr7\\Request',
        'currentClassName' => 'GuzzleHttp\\Psr7\\Request',
        'aliasName' => NULL,
      ),
      'updateHostFromUri' => 
      array (
        'name' => 'updateHostFromUri',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 127,
        'endLine' => 148,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'GuzzleHttp\\Psr7',
        'declaringClassName' => 'GuzzleHttp\\Psr7\\Request',
        'implementingClassName' => 'GuzzleHttp\\Psr7\\Request',
        'currentClassName' => 'GuzzleHttp\\Psr7\\Request',
        'aliasName' => NULL,
      ),
      'assertMethod' => 
      array (
        'name' => 'assertMethod',
        'parameters' => 
        array (
          'method' => 
          array (
            'name' => 'method',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 153,
            'endLine' => 153,
            'startColumn' => 35,
            'endColumn' => 41,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @param mixed $method
 */',
        'startLine' => 153,
        'endLine' => 158,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'GuzzleHttp\\Psr7',
        'declaringClassName' => 'GuzzleHttp\\Psr7\\Request',
        'implementingClassName' => 'GuzzleHttp\\Psr7\\Request',
        'currentClassName' => 'GuzzleHttp\\Psr7\\Request',
        'aliasName' => NULL,
      ),
    ),
    'traitsData' => 
    array (
      'aliases' => 
      array (
      ),
      'modifiers' => 
      array (
      ),
      'precedences' => 
      array (
      ),
      'hashes' => 
      array (
      ),
    ),
  ),
));