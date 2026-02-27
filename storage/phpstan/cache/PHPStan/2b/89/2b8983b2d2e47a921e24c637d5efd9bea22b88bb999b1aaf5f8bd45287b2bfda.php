<?php declare(strict_types = 1);

// osfsl-/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../guzzlehttp/promises/src/FulfilledPromise.php-PHPStan\BetterReflection\Reflection\ReflectionClass-GuzzleHttp\Promise\FulfilledPromise
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-74e0a4c1898acbc2b171f0a3c5689cf8bd5f19e4a8cb46da762712f8c815cbb0-8.4.17-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'GuzzleHttp\\Promise\\FulfilledPromise',
        'filename' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../guzzlehttp/promises/src/FulfilledPromise.php',
      ),
    ),
    'namespace' => 'GuzzleHttp\\Promise',
    'name' => 'GuzzleHttp\\Promise\\FulfilledPromise',
    'shortName' => 'FulfilledPromise',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * A promise that has been fulfilled.
 *
 * Thenning off of this promise will invoke the onFulfilled callback
 * immediately and ignore other callbacks.
 *
 * @final
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 15,
    'endLine' => 89,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'GuzzleHttp\\Promise\\PromiseInterface',
    ),
    'traitClassNames' => 
    array (
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'value' => 
      array (
        'declaringClassName' => 'GuzzleHttp\\Promise\\FulfilledPromise',
        'implementingClassName' => 'GuzzleHttp\\Promise\\FulfilledPromise',
        'name' => 'value',
        'modifiers' => 4,
        'type' => NULL,
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 17,
        'endLine' => 17,
        'startColumn' => 5,
        'endColumn' => 19,
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
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 22,
            'endLine' => 22,
            'startColumn' => 33,
            'endColumn' => 38,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @param mixed $value
 */',
        'startLine' => 22,
        'endLine' => 31,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'GuzzleHttp\\Promise',
        'declaringClassName' => 'GuzzleHttp\\Promise\\FulfilledPromise',
        'implementingClassName' => 'GuzzleHttp\\Promise\\FulfilledPromise',
        'currentClassName' => 'GuzzleHttp\\Promise\\FulfilledPromise',
        'aliasName' => NULL,
      ),
      'then' => 
      array (
        'name' => 'then',
        'parameters' => 
        array (
          'onFulfilled' => 
          array (
            'name' => 'onFulfilled',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 34,
                'endLine' => 34,
                'startTokenPos' => 105,
                'startFilePos' => 710,
                'endTokenPos' => 105,
                'endFilePos' => 713,
              ),
            ),
            'type' => 
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
                      'name' => 'callable',
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
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 34,
            'endLine' => 34,
            'startColumn' => 9,
            'endColumn' => 37,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'onRejected' => 
          array (
            'name' => 'onRejected',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 35,
                'endLine' => 35,
                'startTokenPos' => 115,
                'startFilePos' => 748,
                'endTokenPos' => 115,
                'endFilePos' => 751,
              ),
            ),
            'type' => 
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
                      'name' => 'callable',
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
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 35,
            'endLine' => 35,
            'startColumn' => 9,
            'endColumn' => 36,
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
            'name' => 'GuzzleHttp\\Promise\\PromiseInterface',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 33,
        'endLine' => 56,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'GuzzleHttp\\Promise',
        'declaringClassName' => 'GuzzleHttp\\Promise\\FulfilledPromise',
        'implementingClassName' => 'GuzzleHttp\\Promise\\FulfilledPromise',
        'currentClassName' => 'GuzzleHttp\\Promise\\FulfilledPromise',
        'aliasName' => NULL,
      ),
      'otherwise' => 
      array (
        'name' => 'otherwise',
        'parameters' => 
        array (
          'onRejected' => 
          array (
            'name' => 'onRejected',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'callable',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 58,
            'endLine' => 58,
            'startColumn' => 31,
            'endColumn' => 50,
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
            'name' => 'GuzzleHttp\\Promise\\PromiseInterface',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 58,
        'endLine' => 61,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'GuzzleHttp\\Promise',
        'declaringClassName' => 'GuzzleHttp\\Promise\\FulfilledPromise',
        'implementingClassName' => 'GuzzleHttp\\Promise\\FulfilledPromise',
        'currentClassName' => 'GuzzleHttp\\Promise\\FulfilledPromise',
        'aliasName' => NULL,
      ),
      'wait' => 
      array (
        'name' => 'wait',
        'parameters' => 
        array (
          'unwrap' => 
          array (
            'name' => 'unwrap',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 63,
                'endLine' => 63,
                'startTokenPos' => 313,
                'startFilePos' => 1523,
                'endTokenPos' => 313,
                'endFilePos' => 1526,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'bool',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 63,
            'endLine' => 63,
            'startColumn' => 26,
            'endColumn' => 44,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 63,
        'endLine' => 66,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'GuzzleHttp\\Promise',
        'declaringClassName' => 'GuzzleHttp\\Promise\\FulfilledPromise',
        'implementingClassName' => 'GuzzleHttp\\Promise\\FulfilledPromise',
        'currentClassName' => 'GuzzleHttp\\Promise\\FulfilledPromise',
        'aliasName' => NULL,
      ),
      'getState' => 
      array (
        'name' => 'getState',
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
        'startLine' => 68,
        'endLine' => 71,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'GuzzleHttp\\Promise',
        'declaringClassName' => 'GuzzleHttp\\Promise\\FulfilledPromise',
        'implementingClassName' => 'GuzzleHttp\\Promise\\FulfilledPromise',
        'currentClassName' => 'GuzzleHttp\\Promise\\FulfilledPromise',
        'aliasName' => NULL,
      ),
      'resolve' => 
      array (
        'name' => 'resolve',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 73,
            'endLine' => 73,
            'startColumn' => 29,
            'endColumn' => 34,
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
        'docComment' => NULL,
        'startLine' => 73,
        'endLine' => 78,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'GuzzleHttp\\Promise',
        'declaringClassName' => 'GuzzleHttp\\Promise\\FulfilledPromise',
        'implementingClassName' => 'GuzzleHttp\\Promise\\FulfilledPromise',
        'currentClassName' => 'GuzzleHttp\\Promise\\FulfilledPromise',
        'aliasName' => NULL,
      ),
      'reject' => 
      array (
        'name' => 'reject',
        'parameters' => 
        array (
          'reason' => 
          array (
            'name' => 'reason',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 80,
            'endLine' => 80,
            'startColumn' => 28,
            'endColumn' => 34,
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
        'docComment' => NULL,
        'startLine' => 80,
        'endLine' => 83,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'GuzzleHttp\\Promise',
        'declaringClassName' => 'GuzzleHttp\\Promise\\FulfilledPromise',
        'implementingClassName' => 'GuzzleHttp\\Promise\\FulfilledPromise',
        'currentClassName' => 'GuzzleHttp\\Promise\\FulfilledPromise',
        'aliasName' => NULL,
      ),
      'cancel' => 
      array (
        'name' => 'cancel',
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
        'startLine' => 85,
        'endLine' => 88,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'GuzzleHttp\\Promise',
        'declaringClassName' => 'GuzzleHttp\\Promise\\FulfilledPromise',
        'implementingClassName' => 'GuzzleHttp\\Promise\\FulfilledPromise',
        'currentClassName' => 'GuzzleHttp\\Promise\\FulfilledPromise',
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