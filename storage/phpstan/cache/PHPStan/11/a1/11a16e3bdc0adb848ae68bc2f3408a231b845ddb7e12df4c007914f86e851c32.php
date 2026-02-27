<?php declare(strict_types = 1);

// osfsl-/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../guzzlehttp/psr7/src/Message.php-PHPStan\BetterReflection\Reflection\ReflectionClass-GuzzleHttp\Psr7\Message
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-de587bc1108c06a663c671b05c977aad5bf0cd564234643fee7e78bc39c8189c-8.4.17-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'GuzzleHttp\\Psr7\\Message',
        'filename' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../guzzlehttp/psr7/src/Message.php',
      ),
    ),
    'namespace' => 'GuzzleHttp\\Psr7',
    'name' => 'GuzzleHttp\\Psr7\\Message',
    'shortName' => 'Message',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 32,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 11,
    'endLine' => 246,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
    ),
    'traitClassNames' => 
    array (
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
    ),
    'immediateMethods' => 
    array (
      'toString' => 
      array (
        'name' => 'toString',
        'parameters' => 
        array (
          'message' => 
          array (
            'name' => 'message',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Psr\\Http\\Message\\MessageInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 18,
            'endLine' => 18,
            'startColumn' => 37,
            'endColumn' => 61,
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
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the string representation of an HTTP message.
 *
 * @param MessageInterface $message Message to convert to a string.
 */',
        'startLine' => 18,
        'endLine' => 46,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'GuzzleHttp\\Psr7',
        'declaringClassName' => 'GuzzleHttp\\Psr7\\Message',
        'implementingClassName' => 'GuzzleHttp\\Psr7\\Message',
        'currentClassName' => 'GuzzleHttp\\Psr7\\Message',
        'aliasName' => NULL,
      ),
      'bodySummary' => 
      array (
        'name' => 'bodySummary',
        'parameters' => 
        array (
          'message' => 
          array (
            'name' => 'message',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Psr\\Http\\Message\\MessageInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 56,
            'endLine' => 56,
            'startColumn' => 40,
            'endColumn' => 64,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'truncateAt' => 
          array (
            'name' => 'truncateAt',
            'default' => 
            array (
              'code' => '120',
              'attributes' => 
              array (
                'startLine' => 56,
                'endLine' => 56,
                'startTokenPos' => 339,
                'startFilePos' => 1898,
                'endTokenPos' => 339,
                'endFilePos' => 1900,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'int',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 56,
            'endLine' => 56,
            'startColumn' => 67,
            'endColumn' => 87,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
          'data' => 
          array (
            'types' => 
            array (
              0 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'string',
                  'isIdentifier' => true,
                ),
              ),
              1 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'null',
                  'isIdentifier' => true,
                ),
              ),
            ),
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get a short summary of the message body.
 *
 * Will return `null` if the response is not printable.
 *
 * @param MessageInterface $message    The message to get the body summary
 * @param int              $truncateAt The maximum allowed size of the summary
 */',
        'startLine' => 56,
        'endLine' => 85,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'GuzzleHttp\\Psr7',
        'declaringClassName' => 'GuzzleHttp\\Psr7\\Message',
        'implementingClassName' => 'GuzzleHttp\\Psr7\\Message',
        'currentClassName' => 'GuzzleHttp\\Psr7\\Message',
        'aliasName' => NULL,
      ),
      'rewindBody' => 
      array (
        'name' => 'rewindBody',
        'parameters' => 
        array (
          'message' => 
          array (
            'name' => 'message',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Psr\\Http\\Message\\MessageInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 97,
            'endLine' => 97,
            'startColumn' => 39,
            'endColumn' => 63,
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
 * Attempts to rewind a message body and throws an exception on failure.
 *
 * The body of the message will only be rewound if a call to `tell()`
 * returns a value other than `0`.
 *
 * @param MessageInterface $message Message to rewind
 *
 * @throws \\RuntimeException
 */',
        'startLine' => 97,
        'endLine' => 104,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'GuzzleHttp\\Psr7',
        'declaringClassName' => 'GuzzleHttp\\Psr7\\Message',
        'implementingClassName' => 'GuzzleHttp\\Psr7\\Message',
        'currentClassName' => 'GuzzleHttp\\Psr7\\Message',
        'aliasName' => NULL,
      ),
      'parseMessage' => 
      array (
        'name' => 'parseMessage',
        'parameters' => 
        array (
          'message' => 
          array (
            'name' => 'message',
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
            'startLine' => 115,
            'endLine' => 115,
            'startColumn' => 41,
            'endColumn' => 55,
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
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Parses an HTTP message into an associative array.
 *
 * The array contains the "start-line" key containing the start line of
 * the message, "headers" key containing an associative array of header
 * array values, and a "body" key containing the body of the message.
 *
 * @param string $message HTTP request or response to parse.
 */',
        'startLine' => 115,
        'endLine' => 168,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'GuzzleHttp\\Psr7',
        'declaringClassName' => 'GuzzleHttp\\Psr7\\Message',
        'implementingClassName' => 'GuzzleHttp\\Psr7\\Message',
        'currentClassName' => 'GuzzleHttp\\Psr7\\Message',
        'aliasName' => NULL,
      ),
      'parseRequestUri' => 
      array (
        'name' => 'parseRequestUri',
        'parameters' => 
        array (
          'path' => 
          array (
            'name' => 'path',
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
            'startLine' => 176,
            'endLine' => 176,
            'startColumn' => 44,
            'endColumn' => 55,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'headers' => 
          array (
            'name' => 'headers',
            'default' => NULL,
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
            'startLine' => 176,
            'endLine' => 176,
            'startColumn' => 58,
            'endColumn' => 71,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
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
        'docComment' => '/**
 * Constructs a URI for an HTTP request message.
 *
 * @param string $path    Path from the start-line
 * @param array  $headers Array of headers (each value an array).
 */',
        'startLine' => 176,
        'endLine' => 194,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'GuzzleHttp\\Psr7',
        'declaringClassName' => 'GuzzleHttp\\Psr7\\Message',
        'implementingClassName' => 'GuzzleHttp\\Psr7\\Message',
        'currentClassName' => 'GuzzleHttp\\Psr7\\Message',
        'aliasName' => NULL,
      ),
      'parseRequest' => 
      array (
        'name' => 'parseRequest',
        'parameters' => 
        array (
          'message' => 
          array (
            'name' => 'message',
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
            'startLine' => 201,
            'endLine' => 201,
            'startColumn' => 41,
            'endColumn' => 55,
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
        'docComment' => '/**
 * Parses a request message string into a request object.
 *
 * @param string $message Request message string.
 */',
        'startLine' => 201,
        'endLine' => 220,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'GuzzleHttp\\Psr7',
        'declaringClassName' => 'GuzzleHttp\\Psr7\\Message',
        'implementingClassName' => 'GuzzleHttp\\Psr7\\Message',
        'currentClassName' => 'GuzzleHttp\\Psr7\\Message',
        'aliasName' => NULL,
      ),
      'parseResponse' => 
      array (
        'name' => 'parseResponse',
        'parameters' => 
        array (
          'message' => 
          array (
            'name' => 'message',
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
            'startLine' => 227,
            'endLine' => 227,
            'startColumn' => 42,
            'endColumn' => 56,
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
            'name' => 'Psr\\Http\\Message\\ResponseInterface',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Parses a response message string into a response object.
 *
 * @param string $message Response message string.
 */',
        'startLine' => 227,
        'endLine' => 245,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'GuzzleHttp\\Psr7',
        'declaringClassName' => 'GuzzleHttp\\Psr7\\Message',
        'implementingClassName' => 'GuzzleHttp\\Psr7\\Message',
        'currentClassName' => 'GuzzleHttp\\Psr7\\Message',
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