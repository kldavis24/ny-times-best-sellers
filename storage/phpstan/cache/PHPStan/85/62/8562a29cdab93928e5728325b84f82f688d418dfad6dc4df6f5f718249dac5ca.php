<?php declare(strict_types = 1);

// odsl-/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/RequestDefinitions/GenericRequestDefinition.php-PHPStan\BetterReflection\Reflection\ReflectionClass-App\Services\RequestDefinitions\GenericRequestDefinition
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.4.17-0045631f96ac5e53125e095d8c2a33f5471a688fe46c8b439e0c60d87e80a9a5',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'App\\Services\\RequestDefinitions\\GenericRequestDefinition',
        'filename' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/RequestDefinitions/GenericRequestDefinition.php',
      ),
    ),
    'namespace' => 'App\\Services\\RequestDefinitions',
    'name' => 'App\\Services\\RequestDefinitions\\GenericRequestDefinition',
    'shortName' => 'GenericRequestDefinition',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 64,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 11,
    'endLine' => 196,
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
      'MAX_EXECUTION_WITHIN_DECAY_WINDOW' => 
      array (
        'declaringClassName' => 'App\\Services\\RequestDefinitions\\GenericRequestDefinition',
        'implementingClassName' => 'App\\Services\\RequestDefinitions\\GenericRequestDefinition',
        'name' => 'MAX_EXECUTION_WITHIN_DECAY_WINDOW',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '2',
          'attributes' => 
          array (
            'startLine' => 13,
            'endLine' => 13,
            'startTokenPos' => 48,
            'startFilePos' => 369,
            'endTokenPos' => 48,
            'endFilePos' => 369,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 13,
        'endLine' => 13,
        'startColumn' => 5,
        'endColumn' => 55,
      ),
      'DECAY_WINDOW_SECONDS' => 
      array (
        'declaringClassName' => 'App\\Services\\RequestDefinitions\\GenericRequestDefinition',
        'implementingClassName' => 'App\\Services\\RequestDefinitions\\GenericRequestDefinition',
        'name' => 'DECAY_WINDOW_SECONDS',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '15',
          'attributes' => 
          array (
            'startLine' => 15,
            'endLine' => 15,
            'startTokenPos' => 59,
            'startFilePos' => 413,
            'endTokenPos' => 59,
            'endFilePos' => 414,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 15,
        'endLine' => 15,
        'startColumn' => 5,
        'endColumn' => 43,
      ),
    ),
    'immediateProperties' => 
    array (
      'options' => 
      array (
        'declaringClassName' => 'App\\Services\\RequestDefinitions\\GenericRequestDefinition',
        'implementingClassName' => 'App\\Services\\RequestDefinitions\\GenericRequestDefinition',
        'name' => 'options',
        'modifiers' => 2,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 23,
            'endLine' => 23,
            'startTokenPos' => 72,
            'startFilePos' => 658,
            'endTokenPos' => 73,
            'endFilePos' => 659,
          ),
        ),
        'docComment' => '/**
 * Options set on the request.
 *
 * These are usually applied from the code creating the definition instance,
 * as the definition itself has an options() method for defaults.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 23,
        'endLine' => 23,
        'startColumn' => 5,
        'endColumn' => 34,
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
      'uniqueID' => 
      array (
        'name' => 'uniqueID',
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
        'docComment' => '/**
 * Generate a unique identifier for the request.
 *
 * This is used to track and prevent identical/duplicate
 * calls from being processed in quick succession.
 */',
        'startLine' => 31,
        'endLine' => 31,
        'startColumn' => 5,
        'endColumn' => 48,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 65,
        'namespace' => 'App\\Services\\RequestDefinitions',
        'declaringClassName' => 'App\\Services\\RequestDefinitions\\GenericRequestDefinition',
        'implementingClassName' => 'App\\Services\\RequestDefinitions\\GenericRequestDefinition',
        'currentClassName' => 'App\\Services\\RequestDefinitions\\GenericRequestDefinition',
        'aliasName' => NULL,
      ),
      'isCacheAware' => 
      array (
        'name' => 'isCacheAware',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 33,
        'endLine' => 33,
        'startColumn' => 5,
        'endColumn' => 50,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 65,
        'namespace' => 'App\\Services\\RequestDefinitions',
        'declaringClassName' => 'App\\Services\\RequestDefinitions\\GenericRequestDefinition',
        'implementingClassName' => 'App\\Services\\RequestDefinitions\\GenericRequestDefinition',
        'currentClassName' => 'App\\Services\\RequestDefinitions\\GenericRequestDefinition',
        'aliasName' => NULL,
      ),
      'cacheTtl' => 
      array (
        'name' => 'cacheTtl',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'int',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 35,
        'endLine' => 35,
        'startColumn' => 5,
        'endColumn' => 45,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 65,
        'namespace' => 'App\\Services\\RequestDefinitions',
        'declaringClassName' => 'App\\Services\\RequestDefinitions\\GenericRequestDefinition',
        'implementingClassName' => 'App\\Services\\RequestDefinitions\\GenericRequestDefinition',
        'currentClassName' => 'App\\Services\\RequestDefinitions\\GenericRequestDefinition',
        'aliasName' => NULL,
      ),
      'externalService' => 
      array (
        'name' => 'externalService',
        'parameters' => 
        array (
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
                  'name' => 'App\\Services\\Enums\\ExternalService',
                  'isIdentifier' => false,
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
        'docComment' => NULL,
        'startLine' => 37,
        'endLine' => 37,
        'startColumn' => 5,
        'endColumn' => 65,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 65,
        'namespace' => 'App\\Services\\RequestDefinitions',
        'declaringClassName' => 'App\\Services\\RequestDefinitions\\GenericRequestDefinition',
        'implementingClassName' => 'App\\Services\\RequestDefinitions\\GenericRequestDefinition',
        'currentClassName' => 'App\\Services\\RequestDefinitions\\GenericRequestDefinition',
        'aliasName' => NULL,
      ),
      'options' => 
      array (
        'name' => 'options',
        'parameters' => 
        array (
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
        'docComment' => NULL,
        'startLine' => 39,
        'endLine' => 39,
        'startColumn' => 5,
        'endColumn' => 46,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 65,
        'namespace' => 'App\\Services\\RequestDefinitions',
        'declaringClassName' => 'App\\Services\\RequestDefinitions\\GenericRequestDefinition',
        'implementingClassName' => 'App\\Services\\RequestDefinitions\\GenericRequestDefinition',
        'currentClassName' => 'App\\Services\\RequestDefinitions\\GenericRequestDefinition',
        'aliasName' => NULL,
      ),
      'rules' => 
      array (
        'name' => 'rules',
        'parameters' => 
        array (
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
 * Validation rules to apply to the request.
 *
 * @link https://laravel.com/docs/12.x/validation#available-validation-rules
 */',
        'startLine' => 46,
        'endLine' => 46,
        'startColumn' => 5,
        'endColumn' => 44,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 65,
        'namespace' => 'App\\Services\\RequestDefinitions',
        'declaringClassName' => 'App\\Services\\RequestDefinitions\\GenericRequestDefinition',
        'implementingClassName' => 'App\\Services\\RequestDefinitions\\GenericRequestDefinition',
        'currentClassName' => 'App\\Services\\RequestDefinitions\\GenericRequestDefinition',
        'aliasName' => NULL,
      ),
      'send' => 
      array (
        'name' => 'send',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Send the built request defined by this class.
 */',
        'startLine' => 51,
        'endLine' => 51,
        'startColumn' => 5,
        'endColumn' => 36,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 65,
        'namespace' => 'App\\Services\\RequestDefinitions',
        'declaringClassName' => 'App\\Services\\RequestDefinitions\\GenericRequestDefinition',
        'implementingClassName' => 'App\\Services\\RequestDefinitions\\GenericRequestDefinition',
        'currentClassName' => 'App\\Services\\RequestDefinitions\\GenericRequestDefinition',
        'aliasName' => NULL,
      ),
      'headers' => 
      array (
        'name' => 'headers',
        'parameters' => 
        array (
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
 * Headers to apply to the request.
 */',
        'startLine' => 56,
        'endLine' => 56,
        'startColumn' => 5,
        'endColumn' => 46,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 65,
        'namespace' => 'App\\Services\\RequestDefinitions',
        'declaringClassName' => 'App\\Services\\RequestDefinitions\\GenericRequestDefinition',
        'implementingClassName' => 'App\\Services\\RequestDefinitions\\GenericRequestDefinition',
        'currentClassName' => 'App\\Services\\RequestDefinitions\\GenericRequestDefinition',
        'aliasName' => NULL,
      ),
      '__invoke' => 
      array (
        'name' => '__invoke',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * When invoking a concrete instance of this class, build and
 * send a PendingRequest based on the request definition.
 */',
        'startLine' => 62,
        'endLine' => 65,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Services\\RequestDefinitions',
        'declaringClassName' => 'App\\Services\\RequestDefinitions\\GenericRequestDefinition',
        'implementingClassName' => 'App\\Services\\RequestDefinitions\\GenericRequestDefinition',
        'currentClassName' => 'App\\Services\\RequestDefinitions\\GenericRequestDefinition',
        'aliasName' => NULL,
      ),
      'validate' => 
      array (
        'name' => 'validate',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'static',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 67,
        'endLine' => 76,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => true,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Services\\RequestDefinitions',
        'declaringClassName' => 'App\\Services\\RequestDefinitions\\GenericRequestDefinition',
        'implementingClassName' => 'App\\Services\\RequestDefinitions\\GenericRequestDefinition',
        'currentClassName' => 'App\\Services\\RequestDefinitions\\GenericRequestDefinition',
        'aliasName' => NULL,
      ),
      'payload' => 
      array (
        'name' => 'payload',
        'parameters' => 
        array (
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
                  'name' => 'array',
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
 * JSON data to set within the request body.
 *
 * @link https://docs.guzzlephp.org/en/stable/request-options.html#json
 */',
        'startLine' => 83,
        'endLine' => 86,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Services\\RequestDefinitions',
        'declaringClassName' => 'App\\Services\\RequestDefinitions\\GenericRequestDefinition',
        'implementingClassName' => 'App\\Services\\RequestDefinitions\\GenericRequestDefinition',
        'currentClassName' => 'App\\Services\\RequestDefinitions\\GenericRequestDefinition',
        'aliasName' => NULL,
      ),
      'validator' => 
      array (
        'name' => 'validator',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Illuminate\\Validation\\Validator',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 88,
        'endLine' => 96,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Services\\RequestDefinitions',
        'declaringClassName' => 'App\\Services\\RequestDefinitions\\GenericRequestDefinition',
        'implementingClassName' => 'App\\Services\\RequestDefinitions\\GenericRequestDefinition',
        'currentClassName' => 'App\\Services\\RequestDefinitions\\GenericRequestDefinition',
        'aliasName' => NULL,
      ),
      'errors' => 
      array (
        'name' => 'errors',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Illuminate\\Contracts\\Support\\MessageBag',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 98,
        'endLine' => 101,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Services\\RequestDefinitions',
        'declaringClassName' => 'App\\Services\\RequestDefinitions\\GenericRequestDefinition',
        'implementingClassName' => 'App\\Services\\RequestDefinitions\\GenericRequestDefinition',
        'currentClassName' => 'App\\Services\\RequestDefinitions\\GenericRequestDefinition',
        'aliasName' => NULL,
      ),
      'validationMessages' => 
      array (
        'name' => 'validationMessages',
        'parameters' => 
        array (
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
        'docComment' => NULL,
        'startLine' => 103,
        'endLine' => 106,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'App\\Services\\RequestDefinitions',
        'declaringClassName' => 'App\\Services\\RequestDefinitions\\GenericRequestDefinition',
        'implementingClassName' => 'App\\Services\\RequestDefinitions\\GenericRequestDefinition',
        'currentClassName' => 'App\\Services\\RequestDefinitions\\GenericRequestDefinition',
        'aliasName' => NULL,
      ),
      'validationAttributes' => 
      array (
        'name' => 'validationAttributes',
        'parameters' => 
        array (
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
        'docComment' => NULL,
        'startLine' => 108,
        'endLine' => 111,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'App\\Services\\RequestDefinitions',
        'declaringClassName' => 'App\\Services\\RequestDefinitions\\GenericRequestDefinition',
        'implementingClassName' => 'App\\Services\\RequestDefinitions\\GenericRequestDefinition',
        'currentClassName' => 'App\\Services\\RequestDefinitions\\GenericRequestDefinition',
        'aliasName' => NULL,
      ),
      'validationData' => 
      array (
        'name' => 'validationData',
        'parameters' => 
        array (
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
 * Collect all information needed to pass validation
 * for this definition.
 */',
        'startLine' => 117,
        'endLine' => 120,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'App\\Services\\RequestDefinitions',
        'declaringClassName' => 'App\\Services\\RequestDefinitions\\GenericRequestDefinition',
        'implementingClassName' => 'App\\Services\\RequestDefinitions\\GenericRequestDefinition',
        'currentClassName' => 'App\\Services\\RequestDefinitions\\GenericRequestDefinition',
        'aliasName' => NULL,
      ),
      'isValid' => 
      array (
        'name' => 'isValid',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Has the form_params/json/query data passed all validation rules?
 */',
        'startLine' => 125,
        'endLine' => 128,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Services\\RequestDefinitions',
        'declaringClassName' => 'App\\Services\\RequestDefinitions\\GenericRequestDefinition',
        'implementingClassName' => 'App\\Services\\RequestDefinitions\\GenericRequestDefinition',
        'currentClassName' => 'App\\Services\\RequestDefinitions\\GenericRequestDefinition',
        'aliasName' => NULL,
      ),
      'isInvalid' => 
      array (
        'name' => 'isInvalid',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 130,
        'endLine' => 133,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Services\\RequestDefinitions',
        'declaringClassName' => 'App\\Services\\RequestDefinitions\\GenericRequestDefinition',
        'implementingClassName' => 'App\\Services\\RequestDefinitions\\GenericRequestDefinition',
        'currentClassName' => 'App\\Services\\RequestDefinitions\\GenericRequestDefinition',
        'aliasName' => NULL,
      ),
      'addOptions' => 
      array (
        'name' => 'addOptions',
        'parameters' => 
        array (
          'options' => 
          array (
            'name' => 'options',
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
            'startLine' => 138,
            'endLine' => 138,
            'startColumn' => 32,
            'endColumn' => 45,
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
            'name' => 'static',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add one or more Guzzle options.
 */',
        'startLine' => 138,
        'endLine' => 143,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Services\\RequestDefinitions',
        'declaringClassName' => 'App\\Services\\RequestDefinitions\\GenericRequestDefinition',
        'implementingClassName' => 'App\\Services\\RequestDefinitions\\GenericRequestDefinition',
        'currentClassName' => 'App\\Services\\RequestDefinitions\\GenericRequestDefinition',
        'aliasName' => NULL,
      ),
      'allOptions' => 
      array (
        'name' => 'allOptions',
        'parameters' => 
        array (
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
 * Gather all options for the request.
 */',
        'startLine' => 148,
        'endLine' => 151,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Services\\RequestDefinitions',
        'declaringClassName' => 'App\\Services\\RequestDefinitions\\GenericRequestDefinition',
        'implementingClassName' => 'App\\Services\\RequestDefinitions\\GenericRequestDefinition',
        'currentClassName' => 'App\\Services\\RequestDefinitions\\GenericRequestDefinition',
        'aliasName' => NULL,
      ),
      'isExternal' => 
      array (
        'name' => 'isExternal',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Is the request definition hitting a 3rd party API?
 */',
        'startLine' => 156,
        'endLine' => 159,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Services\\RequestDefinitions',
        'declaringClassName' => 'App\\Services\\RequestDefinitions\\GenericRequestDefinition',
        'implementingClassName' => 'App\\Services\\RequestDefinitions\\GenericRequestDefinition',
        'currentClassName' => 'App\\Services\\RequestDefinitions\\GenericRequestDefinition',
        'aliasName' => NULL,
      ),
      'description' => 
      array (
        'name' => 'description',
        'parameters' => 
        array (
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
 * Description of the request definition. By default, this is the FQN
 * for the class on the bottom of the concrete class.
 */',
        'startLine' => 165,
        'endLine' => 168,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Services\\RequestDefinitions',
        'declaringClassName' => 'App\\Services\\RequestDefinitions\\GenericRequestDefinition',
        'implementingClassName' => 'App\\Services\\RequestDefinitions\\GenericRequestDefinition',
        'currentClassName' => 'App\\Services\\RequestDefinitions\\GenericRequestDefinition',
        'aliasName' => NULL,
      ),
      'maxExecutionsWithinDecayWindow' => 
      array (
        'name' => 'maxExecutionsWithinDecayWindow',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'int',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * How many times can the EXACT SAME request be issued
 * to an external serice within the decay window?
 *
 * @see decayWindowSeconds())
 */',
        'startLine' => 176,
        'endLine' => 179,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Services\\RequestDefinitions',
        'declaringClassName' => 'App\\Services\\RequestDefinitions\\GenericRequestDefinition',
        'implementingClassName' => 'App\\Services\\RequestDefinitions\\GenericRequestDefinition',
        'currentClassName' => 'App\\Services\\RequestDefinitions\\GenericRequestDefinition',
        'aliasName' => NULL,
      ),
      'decayWindowSeconds' => 
      array (
        'name' => 'decayWindowSeconds',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'int',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * The decay window (in seconds) within which the max number of
 * executions of this request definition is allowed.
 *
 * i.e.
 *  - decay window: 15
 *  - max executions: 2
 *
 * This means within any 15-second period of time, the EXACT SAME
 * request cannot be issued more than 2 times.
 */',
        'startLine' => 192,
        'endLine' => 195,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Services\\RequestDefinitions',
        'declaringClassName' => 'App\\Services\\RequestDefinitions\\GenericRequestDefinition',
        'implementingClassName' => 'App\\Services\\RequestDefinitions\\GenericRequestDefinition',
        'currentClassName' => 'App\\Services\\RequestDefinitions\\GenericRequestDefinition',
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