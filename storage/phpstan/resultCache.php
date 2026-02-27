<?php declare(strict_types = 1);

return [
	'lastFullAnalysisTime' => 1772151940,
	'meta' => array (
  'cacheVersion' => 'v12-linesToIgnore',
  'phpstanVersion' => '2.1.40',
  'fnsr' => false,
  'metaExtensions' => 
  array (
  ),
  'phpVersion' => 80417,
  'projectConfig' => '{conditionalTags: {Larastan\\Larastan\\Rules\\NoEnvCallsOutsideOfConfigRule: {phpstan.rules.rule: %noEnvCallsOutsideOfConfig%}, Larastan\\Larastan\\Rules\\NoModelMakeRule: {phpstan.rules.rule: %noModelMake%}, Larastan\\Larastan\\Rules\\NoUnnecessaryCollectionCallRule: {phpstan.rules.rule: %noUnnecessaryCollectionCall%}, Larastan\\Larastan\\Rules\\NoUnnecessaryEnumerableToArrayCallsRule: {phpstan.rules.rule: %noUnnecessaryEnumerableToArrayCalls%}, Larastan\\Larastan\\Rules\\OctaneCompatibilityRule: {phpstan.rules.rule: %checkOctaneCompatibility%}, Larastan\\Larastan\\Rules\\UnusedViewsRule: {phpstan.rules.rule: %checkUnusedViews%}, Larastan\\Larastan\\Rules\\NoMissingTranslationsRule: {phpstan.rules.rule: %checkMissingTranslations%}, Larastan\\Larastan\\Rules\\ModelAppendsRule: {phpstan.rules.rule: %checkModelAppends%}, Larastan\\Larastan\\Rules\\NoPublicModelScopeAndAccessorRule: {phpstan.rules.rule: %checkModelMethodVisibility%}, Larastan\\Larastan\\Rules\\NoAuthFacadeInRequestScopeRule: {phpstan.rules.rule: %checkAuthCallsWhenInRequestScope%}, Larastan\\Larastan\\Rules\\NoAuthHelperInRequestScopeRule: {phpstan.rules.rule: %checkAuthCallsWhenInRequestScope%}, Larastan\\Larastan\\ReturnTypes\\Helpers\\EnvFunctionDynamicFunctionReturnTypeExtension: {phpstan.broker.dynamicFunctionReturnTypeExtension: %generalizeEnvReturnType%}, Larastan\\Larastan\\ReturnTypes\\Helpers\\ConfigFunctionDynamicFunctionReturnTypeExtension: {phpstan.broker.dynamicFunctionReturnTypeExtension: %checkConfigTypes%}, Larastan\\Larastan\\ReturnTypes\\ConfigRepositoryDynamicMethodReturnTypeExtension: {phpstan.broker.dynamicMethodReturnTypeExtension: %checkConfigTypes%}, Larastan\\Larastan\\ReturnTypes\\ConfigFacadeCollectionDynamicStaticMethodReturnTypeExtension: {phpstan.broker.dynamicStaticMethodReturnTypeExtension: %checkConfigTypes%}, Larastan\\Larastan\\Rules\\ConfigCollectionRule: {phpstan.rules.rule: %checkConfigTypes%}}, parameters: {universalObjectCratesClasses: [Illuminate\\Http\\Request, Illuminate\\Support\\Optional], earlyTerminatingFunctionCalls: [abort, dd], mixinExcludeClasses: [Eloquent], bootstrapFiles: [bootstrap.php], checkOctaneCompatibility: false, noEnvCallsOutsideOfConfig: true, noModelMake: true, noUnnecessaryCollectionCall: true, noUnnecessaryCollectionCallOnly: [], noUnnecessaryCollectionCallExcept: [], noUnnecessaryEnumerableToArrayCalls: false, squashedMigrationsPath: [], databaseMigrationsPath: [], disableMigrationScan: false, disableSchemaScan: false, configDirectories: [], viewDirectories: [], translationDirectories: [], checkModelProperties: false, checkUnusedViews: false, checkMissingTranslations: false, checkModelAppends: true, checkModelMethodVisibility: false, generalizeEnvReturnType: false, checkConfigTypes: false, checkAuthCallsWhenInRequestScope: false, parseModelCastsMethod: false, enableMigrationCache: false, paths: [/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app, /Users/kevindavis/Sites/Laravel/ny-times-best-sellers/routes, /Users/kevindavis/Sites/Laravel/ny-times-best-sellers/database, /Users/kevindavis/Sites/Laravel/ny-times-best-sellers/tests], level: 5, tmpDir: /Users/kevindavis/Sites/Laravel/ny-times-best-sellers/storage/phpstan}, rules: [Larastan\\Larastan\\Rules\\UselessConstructs\\NoUselessWithFunctionCallsRule, Larastan\\Larastan\\Rules\\UselessConstructs\\NoUselessValueFunctionCallsRule, Larastan\\Larastan\\Rules\\DeferrableServiceProviderMissingProvidesRule, Larastan\\Larastan\\Rules\\ConsoleCommand\\UndefinedArgumentOrOptionRule], services: {{class: Larastan\\Larastan\\Methods\\RelationForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ModelForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\EloquentBuilderForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\HigherOrderTapProxyExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\HigherOrderCollectionProxyExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\StorageMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\Extension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ModelFactoryMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\RedirectResponseMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\MacroMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ViewWithMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Properties\\ModelAccessorExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\Properties\\ModelPropertyExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\Properties\\HigherOrderCollectionProxyPropertyExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\HigherOrderTapProxyExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Contracts\\Container\\Container}}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Container\\Container}}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Foundation\\Application}}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Contracts\\Foundation\\Application}}, {class: Larastan\\Larastan\\Properties\\ModelRelationsExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelOnlyDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelFactoryDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AppMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AuthExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\GuardDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AuthManagerExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\DateExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\GuardExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RequestFileExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RequestRouteExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RequestUserExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\EloquentBuilderExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RelationCollectionExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\TestCaseExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Support\\CollectionHelper}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\AuthExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\CollectExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\NowAndTodayExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ResponseExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ValidatorExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\LiteralExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\CollectionFilterRejectDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\CollectionWhereNotNullDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\NewModelQueryDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\FactoryDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: abort, negate: false}}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: abort, negate: true}}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: throw, negate: false}}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: throw, negate: true}}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\AppExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ValueExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\StrExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\TapExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\StorageDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Types\\GenericEloquentCollectionTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\Types\\ViewStringTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\Rules\\OctaneCompatibilityRule}, {class: Larastan\\Larastan\\Rules\\NoEnvCallsOutsideOfConfigRule, arguments: {configDirectories: %configDirectories%}}, {class: Larastan\\Larastan\\Rules\\NoModelMakeRule}, {class: Larastan\\Larastan\\Rules\\NoUnnecessaryCollectionCallRule, arguments: {onlyMethods: %noUnnecessaryCollectionCallOnly%, excludeMethods: %noUnnecessaryCollectionCallExcept%}}, {class: Larastan\\Larastan\\Rules\\NoUnnecessaryEnumerableToArrayCallsRule}, {class: Larastan\\Larastan\\Rules\\ModelAppendsRule}, {class: Larastan\\Larastan\\Rules\\NoPublicModelScopeAndAccessorRule}, {class: Larastan\\Larastan\\Types\\GenericEloquentBuilderTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AppEnvironmentReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {class: Illuminate\\Foundation\\Application}}, {class: Larastan\\Larastan\\ReturnTypes\\AppEnvironmentReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {class: Illuminate\\Contracts\\Foundation\\Application}}, {class: Larastan\\Larastan\\ReturnTypes\\AppFacadeEnvironmentReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Types\\ModelProperty\\ModelPropertyTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension], arguments: {active: %checkModelProperties%}}, {class: Larastan\\Larastan\\Types\\CollectionOf\\CollectionOfTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\Properties\\MigrationHelper, arguments: {databaseMigrationPath: %databaseMigrationsPath%, disableMigrationScan: %disableMigrationScan%, parser: @migrationsParser, reflectionProvider: @reflectionProvider}}, iamcalSqlParser: {class: Larastan\\Larastan\\SQL\\IamcalSqlParser, autowired: false}, sqlParserFactory: {class: Larastan\\Larastan\\SQL\\SqlParserFactory, arguments: {iamcalSqlParser: @iamcalSqlParser}}, sqlParser: {type: Larastan\\Larastan\\SQL\\SqlParser, factory: [@sqlParserFactory, create]}, {class: Larastan\\Larastan\\Properties\\SquashedMigrationHelper, arguments: {schemaPaths: %squashedMigrationsPath%, disableSchemaScan: %disableSchemaScan%}}, {class: Larastan\\Larastan\\Properties\\ModelCastHelper, arguments: {parser: @currentPhpVersionSimpleDirectParser, parseModelCastsMethod: %parseModelCastsMethod%}}, {class: Larastan\\Larastan\\Properties\\MigrationCache, arguments: {cacheDirectory: %tmpDir%, enabled: %enableMigrationCache%}}, {class: Larastan\\Larastan\\Properties\\ModelPropertyHelper}, {class: Larastan\\Larastan\\Rules\\ModelRuleHelper}, {class: Larastan\\Larastan\\Methods\\BuilderHelper, arguments: {checkProperties: %checkModelProperties%}}, {class: Larastan\\Larastan\\Rules\\RelationExistenceRule, tags: [phpstan.rules.rule]}, {class: Larastan\\Larastan\\Rules\\CheckDispatchArgumentTypesCompatibleWithClassConstructorRule, arguments: {dispatchableClass: Illuminate\\Foundation\\Bus\\Dispatchable}, tags: [phpstan.rules.rule]}, {class: Larastan\\Larastan\\Rules\\CheckDispatchArgumentTypesCompatibleWithClassConstructorRule, arguments: {dispatchableClass: Illuminate\\Foundation\\Events\\Dispatchable}, tags: [phpstan.rules.rule]}, {class: Larastan\\Larastan\\Properties\\Schema\\MySqlDataTypeToPhpTypeConverter}, {class: Larastan\\Larastan\\LarastanStubFilesExtension, tags: [phpstan.stubFilesExtension]}, {class: Larastan\\Larastan\\Rules\\UnusedViewsRule}, {class: Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedEmailViewCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedViewMakeCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedViewFacadeMakeCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedRouteFacadeViewCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedViewInAnotherViewCollector}, {class: Larastan\\Larastan\\Support\\ViewFileHelper, arguments: {viewDirectories: %viewDirectories%}}, {class: Larastan\\Larastan\\Support\\ViewParser, arguments: {parser: @currentPhpVersionSimpleDirectParser}}, {class: Larastan\\Larastan\\Rules\\NoMissingTranslationsRule, arguments: {translationDirectories: %translationDirectories%}}, {class: Larastan\\Larastan\\Collectors\\UsedTranslationFunctionCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedTranslationTranslatorCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedTranslationFacadeCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedTranslationViewCollector}, {class: Larastan\\Larastan\\ReturnTypes\\ApplicationMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\ArgumentDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\HasArgumentDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\OptionDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\HasOptionDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\TranslatorGetReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\LangGetReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\TransHelperReturnTypeExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\DoubleUnderscoreHelperReturnTypeExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AppMakeHelper}, {class: Larastan\\Larastan\\Internal\\ConsoleApplicationResolver}, {class: Larastan\\Larastan\\Internal\\ConsoleApplicationHelper}, {class: Larastan\\Larastan\\Support\\HigherOrderCollectionProxyHelper}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ConfigFunctionDynamicFunctionReturnTypeExtension}, {class: Larastan\\Larastan\\ReturnTypes\\ConfigRepositoryDynamicMethodReturnTypeExtension}, {class: Larastan\\Larastan\\ReturnTypes\\ConfigFacadeCollectionDynamicStaticMethodReturnTypeExtension}, {class: Larastan\\Larastan\\Support\\ConfigParser, arguments: {parser: @currentPhpVersionSimpleDirectParser, configPaths: %configDirectories%}}, {class: Larastan\\Larastan\\Internal\\ConfigHelper}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\EnvFunctionDynamicFunctionReturnTypeExtension}, {class: Larastan\\Larastan\\ReturnTypes\\FormRequestSafeDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Rules\\NoAuthFacadeInRequestScopeRule}, {class: Larastan\\Larastan\\Rules\\NoAuthHelperInRequestScopeRule}, {class: Larastan\\Larastan\\Rules\\ConfigCollectionRule}, {class: Illuminate\\Filesystem\\Filesystem, autowired: self}, migrationsParser: {class: PHPStan\\Parser\\CachedParser, arguments: {originalParser: @currentPhpVersionSimpleDirectParser, cachedNodesByStringCountMax: %cache.nodesByStringCountMax%}, autowired: false}}}',
  'analysedPaths' => 
  array (
    0 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app',
    1 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/routes',
    2 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/database',
    3 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/tests',
  ),
  'scannedFiles' => 
  array (
  ),
  'composerLocks' => 
  array (
    '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/composer.lock' => '7d00ecb0b3ff8fd2cabc6cf00588426481141f1616d05d41079f86b05b4e45a3',
  ),
  'composerInstalled' => 
  array (
    '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/installed.php' => 
    array (
      'versions' => 
      array (
        'brick/math' => 
        array (
          'pretty_version' => '0.14.3',
          'version' => '0.14.3.0',
          'reference' => '6af96b11de3f7d99730c118c200418c48274edb4',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../brick/math',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'carbonphp/carbon-doctrine-types' => 
        array (
          'pretty_version' => '3.2.0',
          'version' => '3.2.0.0',
          'reference' => '18ba5ddfec8976260ead6e866180bd5d2f71aa1d',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../carbonphp/carbon-doctrine-types',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'cordoval/hamcrest-php' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'davedevelopment/hamcrest-php' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'dflydev/dot-access-data' => 
        array (
          'pretty_version' => 'v3.0.3',
          'version' => '3.0.3.0',
          'reference' => 'a23a2bf4f31d3518f3ecb38660c95715dfead60f',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../dflydev/dot-access-data',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'doctrine/inflector' => 
        array (
          'pretty_version' => '2.1.0',
          'version' => '2.1.0.0',
          'reference' => '6d6c96277ea252fc1304627204c3d5e6e15faa3b',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../doctrine/inflector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'doctrine/lexer' => 
        array (
          'pretty_version' => '3.0.1',
          'version' => '3.0.1.0',
          'reference' => '31ad66abc0fc9e1a1f2d9bc6a42668d2fbbcd6dd',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../doctrine/lexer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'dragonmantank/cron-expression' => 
        array (
          'pretty_version' => 'v3.6.0',
          'version' => '3.6.0.0',
          'reference' => 'd61a8a9604ec1f8c3d150d09db6ce98b32675013',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../dragonmantank/cron-expression',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'egulias/email-validator' => 
        array (
          'pretty_version' => '4.0.4',
          'version' => '4.0.4.0',
          'reference' => 'd42c8731f0624ad6bdc8d3e5e9a4524f68801cfa',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../egulias/email-validator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'fakerphp/faker' => 
        array (
          'pretty_version' => 'v1.24.1',
          'version' => '1.24.1.0',
          'reference' => 'e0ee18eb1e6dc3cda3ce9fd97e5a0689a88a64b5',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../fakerphp/faker',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'filp/whoops' => 
        array (
          'pretty_version' => '2.18.4',
          'version' => '2.18.4.0',
          'reference' => 'd2102955e48b9fd9ab24280a7ad12ed552752c4d',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../filp/whoops',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'fruitcake/php-cors' => 
        array (
          'pretty_version' => 'v1.4.0',
          'version' => '1.4.0.0',
          'reference' => '38aaa6c3fd4c157ffe2a4d10aa8b9b16ba8de379',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../fruitcake/php-cors',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'graham-campbell/result-type' => 
        array (
          'pretty_version' => 'v1.1.4',
          'version' => '1.1.4.0',
          'reference' => 'e01f4a821471308ba86aa202fed6698b6b695e3b',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../graham-campbell/result-type',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/guzzle' => 
        array (
          'pretty_version' => '7.10.0',
          'version' => '7.10.0.0',
          'reference' => 'b51ac707cfa420b7bfd4e4d5e510ba8008e822b4',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../guzzlehttp/guzzle',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/promises' => 
        array (
          'pretty_version' => '2.3.0',
          'version' => '2.3.0.0',
          'reference' => '481557b130ef3790cf82b713667b43030dc9c957',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../guzzlehttp/promises',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/psr7' => 
        array (
          'pretty_version' => '2.8.0',
          'version' => '2.8.0.0',
          'reference' => '21dc724a0583619cd1652f673303492272778051',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../guzzlehttp/psr7',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/uri-template' => 
        array (
          'pretty_version' => 'v1.0.5',
          'version' => '1.0.5.0',
          'reference' => '4f4bbd4e7172148801e76e3decc1e559bdee34e1',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../guzzlehttp/uri-template',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'hamcrest/hamcrest-php' => 
        array (
          'pretty_version' => 'v2.1.1',
          'version' => '2.1.1.0',
          'reference' => 'f8b1c0173b22fa6ec77a81fe63e5b01eba7e6487',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../hamcrest/hamcrest-php',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'iamcal/sql-parser' => 
        array (
          'pretty_version' => 'v0.7',
          'version' => '0.7.0.0',
          'reference' => '610392f38de49a44dab08dc1659960a29874c4b8',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../iamcal/sql-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'illuminate/auth' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.49.0',
          ),
        ),
        'illuminate/broadcasting' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.49.0',
          ),
        ),
        'illuminate/bus' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.49.0',
          ),
        ),
        'illuminate/cache' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.49.0',
          ),
        ),
        'illuminate/collections' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.49.0',
          ),
        ),
        'illuminate/concurrency' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.49.0',
          ),
        ),
        'illuminate/conditionable' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.49.0',
          ),
        ),
        'illuminate/config' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.49.0',
          ),
        ),
        'illuminate/console' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.49.0',
          ),
        ),
        'illuminate/container' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.49.0',
          ),
        ),
        'illuminate/contracts' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.49.0',
          ),
        ),
        'illuminate/cookie' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.49.0',
          ),
        ),
        'illuminate/database' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.49.0',
          ),
        ),
        'illuminate/encryption' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.49.0',
          ),
        ),
        'illuminate/events' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.49.0',
          ),
        ),
        'illuminate/filesystem' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.49.0',
          ),
        ),
        'illuminate/hashing' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.49.0',
          ),
        ),
        'illuminate/http' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.49.0',
          ),
        ),
        'illuminate/json-schema' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.49.0',
          ),
        ),
        'illuminate/log' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.49.0',
          ),
        ),
        'illuminate/macroable' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.49.0',
          ),
        ),
        'illuminate/mail' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.49.0',
          ),
        ),
        'illuminate/notifications' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.49.0',
          ),
        ),
        'illuminate/pagination' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.49.0',
          ),
        ),
        'illuminate/pipeline' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.49.0',
          ),
        ),
        'illuminate/process' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.49.0',
          ),
        ),
        'illuminate/queue' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.49.0',
          ),
        ),
        'illuminate/redis' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.49.0',
          ),
        ),
        'illuminate/reflection' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.49.0',
          ),
        ),
        'illuminate/routing' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.49.0',
          ),
        ),
        'illuminate/session' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.49.0',
          ),
        ),
        'illuminate/support' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.49.0',
          ),
        ),
        'illuminate/testing' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.49.0',
          ),
        ),
        'illuminate/translation' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.49.0',
          ),
        ),
        'illuminate/validation' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.49.0',
          ),
        ),
        'illuminate/view' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.49.0',
          ),
        ),
        'kodova/hamcrest-php' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'larastan/larastan' => 
        array (
          'pretty_version' => 'v3.9.2',
          'version' => '3.9.2.0',
          'reference' => '2e9ed291bdc1969e7f270fb33c9cdf3c912daeb2',
          'type' => 'phpstan-extension',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../larastan/larastan',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/boost' => 
        array (
          'pretty_version' => 'v2.0.5',
          'version' => '2.0.5.0',
          'reference' => '00eede2041a9bac83eabbd3b3f16bd4aa91277c9',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../laravel/boost',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/framework' => 
        array (
          'pretty_version' => 'v12.49.0',
          'version' => '12.49.0.0',
          'reference' => '4bde4530545111d8bdd1de6f545fa8824039fcb5',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../laravel/framework',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/mcp' => 
        array (
          'pretty_version' => 'v0.5.3',
          'version' => '0.5.3.0',
          'reference' => '39b9791b989927642137dd5b55dde0529f1614f9',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../laravel/mcp',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/pail' => 
        array (
          'pretty_version' => 'v1.2.4',
          'version' => '1.2.4.0',
          'reference' => '49f92285ff5d6fc09816e976a004f8dec6a0ea30',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../laravel/pail',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/pint' => 
        array (
          'pretty_version' => 'v1.27.0',
          'version' => '1.27.0.0',
          'reference' => 'c67b4195b75491e4dfc6b00b1c78b68d86f54c90',
          'type' => 'project',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../laravel/pint',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/prompts' => 
        array (
          'pretty_version' => 'v0.3.11',
          'version' => '0.3.11.0',
          'reference' => 'dd2a2ed95acacbcccd32fd98dee4c946ae7a7217',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../laravel/prompts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/roster' => 
        array (
          'pretty_version' => 'v0.2.9',
          'version' => '0.2.9.0',
          'reference' => '82bbd0e2de614906811aebdf16b4305956816fa6',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../laravel/roster',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/sail' => 
        array (
          'pretty_version' => 'v1.52.0',
          'version' => '1.52.0.0',
          'reference' => '64ac7d8abb2dbcf2b76e61289451bae79066b0b3',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../laravel/sail',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/sanctum' => 
        array (
          'pretty_version' => 'v4.3.0',
          'version' => '4.3.0.0',
          'reference' => 'c978c82b2b8ab685468a7ca35224497d541b775a',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../laravel/sanctum',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/serializable-closure' => 
        array (
          'pretty_version' => 'v2.0.8',
          'version' => '2.0.8.0',
          'reference' => '7581a4407012f5f53365e11bafc520fd7f36bc9b',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../laravel/serializable-closure',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/tinker' => 
        array (
          'pretty_version' => 'v2.11.0',
          'version' => '2.11.0.0',
          'reference' => '3d34b97c9a1747a81a3fde90482c092bd8b66468',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../laravel/tinker',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/commonmark' => 
        array (
          'pretty_version' => '2.8.0',
          'version' => '2.8.0.0',
          'reference' => '4efa10c1e56488e658d10adf7b7b7dcd19940bfb',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../league/commonmark',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/config' => 
        array (
          'pretty_version' => 'v1.2.0',
          'version' => '1.2.0.0',
          'reference' => '754b3604fb2984c71f4af4a9cbe7b57f346ec1f3',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../league/config',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/flysystem' => 
        array (
          'pretty_version' => '3.31.0',
          'version' => '3.31.0.0',
          'reference' => '1717e0b3642b0df65ecb0cc89cdd99fa840672ff',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../league/flysystem',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/flysystem-local' => 
        array (
          'pretty_version' => '3.31.0',
          'version' => '3.31.0.0',
          'reference' => '2f669db18a4c20c755c2bb7d3a7b0b2340488079',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../league/flysystem-local',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/mime-type-detection' => 
        array (
          'pretty_version' => '1.16.0',
          'version' => '1.16.0.0',
          'reference' => '2d6702ff215bf922936ccc1ad31007edc76451b9',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../league/mime-type-detection',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/uri' => 
        array (
          'pretty_version' => '7.8.0',
          'version' => '7.8.0.0',
          'reference' => '4436c6ec8d458e4244448b069cc572d088230b76',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../league/uri',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/uri-interfaces' => 
        array (
          'pretty_version' => '7.8.0',
          'version' => '7.8.0.0',
          'reference' => 'c5c5cd056110fc8afaba29fa6b72a43ced42acd4',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../league/uri-interfaces',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'mockery/mockery' => 
        array (
          'pretty_version' => '1.6.12',
          'version' => '1.6.12.0',
          'reference' => '1f4efdd7d3beafe9807b08156dfcb176d18f1699',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../mockery/mockery',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'monolog/monolog' => 
        array (
          'pretty_version' => '3.10.0',
          'version' => '3.10.0.0',
          'reference' => 'b321dd6749f0bf7189444158a3ce785cc16d69b0',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../monolog/monolog',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'mtdowling/cron-expression' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '^1.0',
          ),
        ),
        'myclabs/deep-copy' => 
        array (
          'pretty_version' => '1.13.4',
          'version' => '1.13.4.0',
          'reference' => '07d290f0c47959fd5eed98c95ee5602db07e0b6a',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../myclabs/deep-copy',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'nesbot/carbon' => 
        array (
          'pretty_version' => '3.11.1',
          'version' => '3.11.1.0',
          'reference' => 'f438fcc98f92babee98381d399c65336f3a3827f',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../nesbot/carbon',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nette/schema' => 
        array (
          'pretty_version' => 'v1.3.3',
          'version' => '1.3.3.0',
          'reference' => '2befc2f42d7c715fd9d95efc31b1081e5d765004',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../nette/schema',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nette/utils' => 
        array (
          'pretty_version' => 'v4.1.1',
          'version' => '4.1.1.0',
          'reference' => 'c99059c0315591f1a0db7ad6002000288ab8dc72',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../nette/utils',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nikic/php-parser' => 
        array (
          'pretty_version' => 'v5.7.0',
          'version' => '5.7.0.0',
          'reference' => 'dca41cd15c2ac9d055ad70dbfd011130757d1f82',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../nikic/php-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nunomaduro/collision' => 
        array (
          'pretty_version' => 'v8.8.3',
          'version' => '8.8.3.0',
          'reference' => '1dc9e88d105699d0fee8bb18890f41b274f6b4c4',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../nunomaduro/collision',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'nunomaduro/termwind' => 
        array (
          'pretty_version' => 'v2.3.3',
          'version' => '2.3.3.0',
          'reference' => '6fb2a640ff502caace8e05fd7be3b503a7e1c017',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../nunomaduro/termwind',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'phar-io/manifest' => 
        array (
          'pretty_version' => '2.0.4',
          'version' => '2.0.4.0',
          'reference' => '54750ef60c58e43759730615a392c31c80e23176',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../phar-io/manifest',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phar-io/version' => 
        array (
          'pretty_version' => '3.2.1',
          'version' => '3.2.1.0',
          'reference' => '4f7fd7836c6f332bb2933569e566a0d6c4cbed74',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../phar-io/version',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpoption/phpoption' => 
        array (
          'pretty_version' => '1.9.5',
          'version' => '1.9.5.0',
          'reference' => '75365b91986c2405cf5e1e012c5595cd487a98be',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../phpoption/phpoption',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'phpstan/phpstan' => 
        array (
          'pretty_version' => '2.1.40',
          'version' => '2.1.40.0',
          'reference' => '9b2c7aeb83a75d8680ea5e7c9b7fca88052b766b',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../phpstan/phpstan',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-code-coverage' => 
        array (
          'pretty_version' => '11.0.12',
          'version' => '11.0.12.0',
          'reference' => '2c1ed04922802c15e1de5d7447b4856de949cf56',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../phpunit/php-code-coverage',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-file-iterator' => 
        array (
          'pretty_version' => '5.1.0',
          'version' => '5.1.0.0',
          'reference' => '118cfaaa8bc5aef3287bf315b6060b1174754af6',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../phpunit/php-file-iterator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-invoker' => 
        array (
          'pretty_version' => '5.0.1',
          'version' => '5.0.1.0',
          'reference' => 'c1ca3814734c07492b3d4c5f794f4b0995333da2',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../phpunit/php-invoker',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-text-template' => 
        array (
          'pretty_version' => '4.0.1',
          'version' => '4.0.1.0',
          'reference' => '3e0404dc6b300e6bf56415467ebcb3fe4f33e964',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../phpunit/php-text-template',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-timer' => 
        array (
          'pretty_version' => '7.0.1',
          'version' => '7.0.1.0',
          'reference' => '3b415def83fbcb41f991d9ebf16ae4ad8b7837b3',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../phpunit/php-timer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/phpunit' => 
        array (
          'pretty_version' => '11.5.50',
          'version' => '11.5.50.0',
          'reference' => 'fdfc727f0fcacfeb8fcb30c7e5da173125b58be3',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../phpunit/phpunit',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'psr/clock' => 
        array (
          'pretty_version' => '1.0.0',
          'version' => '1.0.0.0',
          'reference' => 'e41a24703d4560fd0acb709162f73b8adfc3aa0d',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../psr/clock',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/clock-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/container' => 
        array (
          'pretty_version' => '2.0.2',
          'version' => '2.0.2.0',
          'reference' => 'c71ecc56dfe541dbd90c5360474fbc405f8d5963',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../psr/container',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/container-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.1|2.0',
          ),
        ),
        'psr/event-dispatcher' => 
        array (
          'pretty_version' => '1.0.0',
          'version' => '1.0.0.0',
          'reference' => 'dbefd12671e8a14ec7f180cab83036ed26714bb0',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../psr/event-dispatcher',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/event-dispatcher-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/http-client' => 
        array (
          'pretty_version' => '1.0.3',
          'version' => '1.0.3.0',
          'reference' => 'bb5906edc1c324c9a05aa0873d40117941e5fa90',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../psr/http-client',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/http-client-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/http-factory' => 
        array (
          'pretty_version' => '1.1.0',
          'version' => '1.1.0.0',
          'reference' => '2b4765fddfe3b508ac62f829e852b1501d3f6e8a',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../psr/http-factory',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/http-factory-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/http-message' => 
        array (
          'pretty_version' => '2.0',
          'version' => '2.0.0.0',
          'reference' => '402d35bcb92c70c026d1a6a9883f06b2ead23d71',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../psr/http-message',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/http-message-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/log' => 
        array (
          'pretty_version' => '3.0.2',
          'version' => '3.0.2.0',
          'reference' => 'f16e1d5863e37f8d8c2a01719f5b34baa2b714d3',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../psr/log',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/log-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0|2.0|3.0',
            1 => '3.0.0',
          ),
        ),
        'psr/simple-cache' => 
        array (
          'pretty_version' => '3.0.0',
          'version' => '3.0.0.0',
          'reference' => '764e0b3939f5ca87cb904f570ef9be2d78a07865',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../psr/simple-cache',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/simple-cache-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0|2.0|3.0',
          ),
        ),
        'psy/psysh' => 
        array (
          'pretty_version' => 'v0.12.19',
          'version' => '0.12.19.0',
          'reference' => 'a4f766e5c5b6773d8399711019bb7d90875a50ee',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../psy/psysh',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'ralouphie/getallheaders' => 
        array (
          'pretty_version' => '3.0.3',
          'version' => '3.0.3.0',
          'reference' => '120b605dfeb996808c31b6477290a714d356e822',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../ralouphie/getallheaders',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'ramsey/collection' => 
        array (
          'pretty_version' => '2.1.1',
          'version' => '2.1.1.0',
          'reference' => '344572933ad0181accbf4ba763e85a0306a8c5e2',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../ramsey/collection',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'ramsey/uuid' => 
        array (
          'pretty_version' => '4.9.2',
          'version' => '4.9.2.0',
          'reference' => '8429c78ca35a09f27565311b98101e2826affde0',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../ramsey/uuid',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'rhumsaa/uuid' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '4.9.2',
          ),
        ),
        'sebastian/cli-parser' => 
        array (
          'pretty_version' => '3.0.2',
          'version' => '3.0.2.0',
          'reference' => '15c5dd40dc4f38794d383bb95465193f5e0ae180',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../sebastian/cli-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/code-unit' => 
        array (
          'pretty_version' => '3.0.3',
          'version' => '3.0.3.0',
          'reference' => '54391c61e4af8078e5b276ab082b6d3c54c9ad64',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../sebastian/code-unit',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/code-unit-reverse-lookup' => 
        array (
          'pretty_version' => '4.0.1',
          'version' => '4.0.1.0',
          'reference' => '183a9b2632194febd219bb9246eee421dad8d45e',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../sebastian/code-unit-reverse-lookup',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/comparator' => 
        array (
          'pretty_version' => '6.3.3',
          'version' => '6.3.3.0',
          'reference' => '2c95e1e86cb8dd41beb8d502057d1081ccc8eca9',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../sebastian/comparator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/complexity' => 
        array (
          'pretty_version' => '4.0.1',
          'version' => '4.0.1.0',
          'reference' => 'ee41d384ab1906c68852636b6de493846e13e5a0',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../sebastian/complexity',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/diff' => 
        array (
          'pretty_version' => '6.0.2',
          'version' => '6.0.2.0',
          'reference' => 'b4ccd857127db5d41a5b676f24b51371d76d8544',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../sebastian/diff',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/environment' => 
        array (
          'pretty_version' => '7.2.1',
          'version' => '7.2.1.0',
          'reference' => 'a5c75038693ad2e8d4b6c15ba2403532647830c4',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../sebastian/environment',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/exporter' => 
        array (
          'pretty_version' => '6.3.2',
          'version' => '6.3.2.0',
          'reference' => '70a298763b40b213ec087c51c739efcaa90bcd74',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../sebastian/exporter',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/global-state' => 
        array (
          'pretty_version' => '7.0.2',
          'version' => '7.0.2.0',
          'reference' => '3be331570a721f9a4b5917f4209773de17f747d7',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../sebastian/global-state',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/lines-of-code' => 
        array (
          'pretty_version' => '3.0.1',
          'version' => '3.0.1.0',
          'reference' => 'd36ad0d782e5756913e42ad87cb2890f4ffe467a',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../sebastian/lines-of-code',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/object-enumerator' => 
        array (
          'pretty_version' => '6.0.1',
          'version' => '6.0.1.0',
          'reference' => 'f5b498e631a74204185071eb41f33f38d64608aa',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../sebastian/object-enumerator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/object-reflector' => 
        array (
          'pretty_version' => '4.0.1',
          'version' => '4.0.1.0',
          'reference' => '6e1a43b411b2ad34146dee7524cb13a068bb35f9',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../sebastian/object-reflector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/recursion-context' => 
        array (
          'pretty_version' => '6.0.3',
          'version' => '6.0.3.0',
          'reference' => 'f6458abbf32a6c8174f8f26261475dc133b3d9dc',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../sebastian/recursion-context',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/type' => 
        array (
          'pretty_version' => '5.1.3',
          'version' => '5.1.3.0',
          'reference' => 'f77d2d4e78738c98d9a68d2596fe5e8fa380f449',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../sebastian/type',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/version' => 
        array (
          'pretty_version' => '5.0.2',
          'version' => '5.0.2.0',
          'reference' => 'c687e3387b99f5b03b6caa64c74b63e2936ff874',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../sebastian/version',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'spatie/laravel-package-tools' => 
        array (
          'pretty_version' => '1.93.0',
          'version' => '1.93.0.0',
          'reference' => '0d097bce95b2bf6802fb1d83e1e753b0f5a948e7',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../spatie/laravel-package-tools',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'spatie/laravel-permission' => 
        array (
          'pretty_version' => '7.2.3',
          'version' => '7.2.3.0',
          'reference' => '062b0cd8e3a1753fa7a53e468b918710004aa06b',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../spatie/laravel-permission',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'spatie/once' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'staabm/side-effects-detector' => 
        array (
          'pretty_version' => '1.0.5',
          'version' => '1.0.5.0',
          'reference' => 'd8334211a140ce329c13726d4a715adbddd0a163',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../staabm/side-effects-detector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/clock' => 
        array (
          'pretty_version' => 'v8.0.0',
          'version' => '8.0.0.0',
          'reference' => '832119f9b8dbc6c8e6f65f30c5969eca1e88764f',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../symfony/clock',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/console' => 
        array (
          'pretty_version' => 'v7.4.4',
          'version' => '7.4.4.0',
          'reference' => '41e38717ac1dd7a46b6bda7d6a82af2d98a78894',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../symfony/console',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/css-selector' => 
        array (
          'pretty_version' => 'v8.0.0',
          'version' => '8.0.0.0',
          'reference' => '6225bd458c53ecdee056214cb4a2ffaf58bd592b',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../symfony/css-selector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/deprecation-contracts' => 
        array (
          'pretty_version' => 'v3.6.0',
          'version' => '3.6.0.0',
          'reference' => '63afe740e99a13ba87ec199bb07bbdee937a5b62',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../symfony/deprecation-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/error-handler' => 
        array (
          'pretty_version' => 'v7.4.4',
          'version' => '7.4.4.0',
          'reference' => '8da531f364ddfee53e36092a7eebbbd0b775f6b8',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../symfony/error-handler',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/event-dispatcher' => 
        array (
          'pretty_version' => 'v8.0.4',
          'version' => '8.0.4.0',
          'reference' => '99301401da182b6cfaa4700dbe9987bb75474b47',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../symfony/event-dispatcher',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/event-dispatcher-contracts' => 
        array (
          'pretty_version' => 'v3.6.0',
          'version' => '3.6.0.0',
          'reference' => '59eb412e93815df44f05f342958efa9f46b1e586',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../symfony/event-dispatcher-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/event-dispatcher-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '2.0|3.0',
          ),
        ),
        'symfony/finder' => 
        array (
          'pretty_version' => 'v7.4.5',
          'version' => '7.4.5.0',
          'reference' => 'ad4daa7c38668dcb031e63bc99ea9bd42196a2cb',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../symfony/finder',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/http-foundation' => 
        array (
          'pretty_version' => 'v7.4.5',
          'version' => '7.4.5.0',
          'reference' => '446d0db2b1f21575f1284b74533e425096abdfb6',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../symfony/http-foundation',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/http-kernel' => 
        array (
          'pretty_version' => 'v7.4.5',
          'version' => '7.4.5.0',
          'reference' => '229eda477017f92bd2ce7615d06222ec0c19e82a',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../symfony/http-kernel',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/mailer' => 
        array (
          'pretty_version' => 'v7.4.4',
          'version' => '7.4.4.0',
          'reference' => '7b750074c40c694ceb34cb926d6dffee231c5cd6',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../symfony/mailer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/mime' => 
        array (
          'pretty_version' => 'v7.4.5',
          'version' => '7.4.5.0',
          'reference' => 'b18c7e6e9eee1e19958138df10412f3c4c316148',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../symfony/mime',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-ctype' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => 'a3cc8b044a6ea513310cbd48ef7333b384945638',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../symfony/polyfill-ctype',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-grapheme' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => '380872130d3a5dd3ace2f4010d95125fde5d5c70',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../symfony/polyfill-intl-grapheme',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-idn' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => '9614ac4d8061dc257ecc64cba1b140873dce8ad3',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../symfony/polyfill-intl-idn',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-normalizer' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => '3833d7255cc303546435cb650316bff708a1c75c',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../symfony/polyfill-intl-normalizer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-mbstring' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => '6d857f4d76bd4b343eac26d6b539585d2bc56493',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../symfony/polyfill-mbstring',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php80' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => '0cc9dd0f17f61d8131e7df6b84bd344899fe2608',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../symfony/polyfill-php80',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php83' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => '17f6f9a6b1735c0f163024d959f700cfbc5155e5',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../symfony/polyfill-php83',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php84' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => 'd8ced4d875142b6a7426000426b8abc631d6b191',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../symfony/polyfill-php84',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php85' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => 'd4e5fcd4ab3d998ab16c0db48e6cbb9a01993f91',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../symfony/polyfill-php85',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-uuid' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => '21533be36c24be3f4b1669c4725c7d1d2bab4ae2',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../symfony/polyfill-uuid',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/process' => 
        array (
          'pretty_version' => 'v7.4.5',
          'version' => '7.4.5.0',
          'reference' => '608476f4604102976d687c483ac63a79ba18cc97',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../symfony/process',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/routing' => 
        array (
          'pretty_version' => 'v7.4.4',
          'version' => '7.4.4.0',
          'reference' => '0798827fe2c79caeed41d70b680c2c3507d10147',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../symfony/routing',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/service-contracts' => 
        array (
          'pretty_version' => 'v3.6.1',
          'version' => '3.6.1.0',
          'reference' => '45112560a3ba2d715666a509a0bc9521d10b6c43',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../symfony/service-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/string' => 
        array (
          'pretty_version' => 'v8.0.4',
          'version' => '8.0.4.0',
          'reference' => '758b372d6882506821ed666032e43020c4f57194',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../symfony/string',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/translation' => 
        array (
          'pretty_version' => 'v8.0.4',
          'version' => '8.0.4.0',
          'reference' => 'db70c8ce7db74fd2da7b1d268db46b2a8ce32c10',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../symfony/translation',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/translation-contracts' => 
        array (
          'pretty_version' => 'v3.6.1',
          'version' => '3.6.1.0',
          'reference' => '65a8bc82080447fae78373aa10f8d13b38338977',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../symfony/translation-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/translation-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '2.3|3.0',
          ),
        ),
        'symfony/uid' => 
        array (
          'pretty_version' => 'v7.4.4',
          'version' => '7.4.4.0',
          'reference' => '7719ce8aba76be93dfe249192f1fbfa52c588e36',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../symfony/uid',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/var-dumper' => 
        array (
          'pretty_version' => 'v7.4.4',
          'version' => '7.4.4.0',
          'reference' => '0e4769b46a0c3c62390d124635ce59f66874b282',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../symfony/var-dumper',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/yaml' => 
        array (
          'pretty_version' => 'v7.4.1',
          'version' => '7.4.1.0',
          'reference' => '24dd4de28d2e3988b311751ac49e684d783e2345',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../symfony/yaml',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'theseer/tokenizer' => 
        array (
          'pretty_version' => '1.3.1',
          'version' => '1.3.1.0',
          'reference' => 'b7489ce515e168639d17feec34b8847c326b0b3c',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../theseer/tokenizer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'tijsverkoyen/css-to-inline-styles' => 
        array (
          'pretty_version' => 'v2.4.0',
          'version' => '2.4.0.0',
          'reference' => 'f0292ccf0ec75843d65027214426b6b163b48b41',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../tijsverkoyen/css-to-inline-styles',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'vlucas/phpdotenv' => 
        array (
          'pretty_version' => 'v5.6.3',
          'version' => '5.6.3.0',
          'reference' => '955e7815d677a3eaa7075231212f2110983adecc',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../vlucas/phpdotenv',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'voku/portable-ascii' => 
        array (
          'pretty_version' => '2.0.3',
          'version' => '2.0.3.0',
          'reference' => 'b1d923f88091c6bf09699efcd7c8a1b1bfd7351d',
          'type' => 'library',
          'install_path' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/composer/../voku/portable-ascii',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
      ),
    ),
  ),
  'executedFilesHashes' => 
  array (
    '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/larastan/larastan/bootstrap.php' => '5a3eacbf63b3e41659adfee92facededf8e020a932800f93c9a8b0e67f235805',
    'phar:///Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/Attribute85.php' => 'cb8b31e82c61ce197871c9e8a6f122256751f2ab606dd2be90846d4fa5f8933e',
    'phar:///Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionAttribute.php' => 'c0068e383717870a304781d462f7e2afe1c6f24e9133851852a2aca96b4fa26f',
    'phar:///Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionIntersectionType.php' => '65fe0a8bc6fe285d8ddc8798ab5b9299920af70db5ad74596bc08df823e7c5d9',
    'phar:///Users/kevindavis/Sites/Laravel/ny-times-best-sellers/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionUnionType.php' => '1e2fe940e4ba4e00d9ee6adb2af3ee1bf333e6f8afe61c61deb038886d293427',
  ),
  'phpExtensions' => 
  array (
    0 => 'Core',
    1 => 'FFI',
    2 => 'PDO',
    3 => 'Phar',
    4 => 'Reflection',
    5 => 'SPL',
    6 => 'SimpleXML',
    7 => 'Zend OPcache',
    8 => 'bcmath',
    9 => 'bz2',
    10 => 'calendar',
    11 => 'ctype',
    12 => 'curl',
    13 => 'date',
    14 => 'dba',
    15 => 'dom',
    16 => 'exif',
    17 => 'fileinfo',
    18 => 'filter',
    19 => 'ftp',
    20 => 'gd',
    21 => 'gettext',
    22 => 'gmp',
    23 => 'hash',
    24 => 'herd',
    25 => 'iconv',
    26 => 'igbinary',
    27 => 'imagick',
    28 => 'imap',
    29 => 'intl',
    30 => 'json',
    31 => 'ldap',
    32 => 'libxml',
    33 => 'mbstring',
    34 => 'mongodb',
    35 => 'mysqli',
    36 => 'mysqlnd',
    37 => 'openssl',
    38 => 'pcntl',
    39 => 'pcre',
    40 => 'pdo_mysql',
    41 => 'pdo_pgsql',
    42 => 'pdo_sqlite',
    43 => 'pdo_sqlsrv',
    44 => 'pgsql',
    45 => 'posix',
    46 => 'random',
    47 => 'readline',
    48 => 'redis',
    49 => 'session',
    50 => 'shmop',
    51 => 'soap',
    52 => 'sockets',
    53 => 'sodium',
    54 => 'sqlite3',
    55 => 'sqlsrv',
    56 => 'standard',
    57 => 'sysvmsg',
    58 => 'sysvsem',
    59 => 'sysvshm',
    60 => 'tokenizer',
    61 => 'xml',
    62 => 'xmlreader',
    63 => 'xmlwriter',
    64 => 'xsl',
    65 => 'zip',
    66 => 'zlib',
    67 => 'zstd',
  ),
  'stubFiles' => 
  array (
  ),
  'level' => '5',
),
	'projectExtensionFiles' => array (
),
	'errorsCallback' => static function (): array { return array (
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/RequestDefinitions/Exceptions/ValidationException.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Property App\\Services\\RequestDefinitions\\Exceptions\\ValidationException::$definition (App\\Services\\RequestDefinitions\\RequestDefinition) does not accept App\\Services\\RequestDefinitions\\GenericRequestDefinition.',
       'file' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/RequestDefinitions/Exceptions/ValidationException.php',
       'line' => 27,
       'canBeIgnored' => true,
       'filePath' => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/RequestDefinitions/Exceptions/ValidationException.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 27,
       'nodeType' => 'PHPStan\\Node\\PropertyAssignNode',
       'identifier' => 'assign.propertyType',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
); },
	'locallyIgnoredErrorsCallback' => static function (): array { return array (
); },
	'linesToIgnore' => array (
),
	'unmatchedLineIgnores' => array (
),
	'collectedDataCallback' => static function (): array { return array (
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Http/Controllers/BestSellersBooksController.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'App\\Http\\Controllers\\BestSellersBooksController',
    ),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Http/Controllers/Controller.php' => 
  array (
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Foundation\\Auth\\Access\\AuthorizesRequests',
      ),
    ),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Http/Requests/BooksByListNameAndDateRequest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Http\\Requests\\BooksByListNameAndDateRequest',
        1 => 'publishedDate',
        2 => 'App\\Http\\Requests\\BooksByListNameAndDateRequest',
      ),
    ),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Http/Requests/ListNamesRequest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Http\\Requests\\ListNamesRequest',
        1 => 'rules',
        2 => 'App\\Http\\Requests\\ListNamesRequest',
      ),
    ),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Http/Requests/ListsOverviewRequest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Http\\Requests\\ListsOverviewRequest',
        1 => 'rules',
        2 => 'App\\Http\\Requests\\ListsOverviewRequest',
      ),
    ),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Models/User.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Models\\User',
        1 => 'casts',
        2 => 'App\\Models\\User',
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
      ),
      1 => 
      array (
        0 => 'Illuminate\\Notifications\\Notifiable',
      ),
      2 => 
      array (
        0 => 'Spatie\\Permission\\Traits\\HasRoles',
      ),
      3 => 
      array (
        0 => 'Laravel\\Sanctum\\HasApiTokens',
      ),
    ),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Providers/AppServiceProvider.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Gate',
        1 => 'define',
        2 => 26,
      ),
      1 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Gate',
        1 => 'define',
        2 => 27,
      ),
      2 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Gate',
        1 => 'define',
        2 => 28,
      ),
      3 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Gate',
        1 => 'define',
        2 => 29,
      ),
      4 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Gate',
        1 => 'define',
        2 => 30,
      ),
      5 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Gate',
        1 => 'define',
        2 => 31,
      ),
    ),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/BestSellersBooks/BestSellersBookService.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Services\\BestSellersBooks\\BestSellersBookService',
        1 => 'externalService',
        2 => 'App\\Services\\BestSellersBooks\\BestSellersBookService',
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureMethodCallCollector' => 
    array (
      0 => 
      array (
        0 => 
        array (
          0 => 'App\\Services\\BestSellersBooks\\BestSellersBookService',
        ),
        1 => 'handleResponseErrors',
        2 => 68,
      ),
      1 => 
      array (
        0 => 
        array (
          0 => 'App\\Services\\BestSellersBooks\\BestSellersBookService',
        ),
        1 => 'handleResponseErrors',
        2 => 88,
      ),
      2 => 
      array (
        0 => 
        array (
          0 => 'App\\Services\\BestSellersBooks\\BestSellersBookService',
        ),
        1 => 'handleResponseErrors',
        2 => 118,
      ),
    ),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/BestSellersBooks/DTO/BestSellersList.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'App\\Services\\BestSellersBooks\\DTO\\BestSellersList',
    ),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/BestSellersBooks/DTO/Book.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'App\\Services\\BestSellersBooks\\DTO\\Book',
    ),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/BestSellersBooks/RequestDefinitions/AbstractRequestDefinition.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Services\\BestSellersBooks\\RequestDefinitions\\AbstractRequestDefinition',
        1 => 'method',
        2 => 'App\\Services\\BestSellersBooks\\RequestDefinitions\\AbstractRequestDefinition',
      ),
      1 => 
      array (
        0 => 'App\\Services\\BestSellersBooks\\RequestDefinitions\\AbstractRequestDefinition',
        1 => 'rules',
        2 => 'App\\Services\\BestSellersBooks\\RequestDefinitions\\AbstractRequestDefinition',
      ),
    ),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/BestSellersBooks/RequestDefinitions/GetBooksByListAndDate.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'App\\Services\\BestSellersBooks\\RequestDefinitions\\GetBooksByListAndDate',
    ),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/BestSellersBooks/RequestDefinitions/GetBooksByListName.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'App\\Services\\BestSellersBooks\\RequestDefinitions\\GetBooksByListName',
    ),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/BestSellersBooks/RequestDefinitions/GetListsOverview.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'App\\Services\\BestSellersBooks\\RequestDefinitions\\GetListsOverview',
    ),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/RequestDefinitions/Exceptions/DuplicateRequestException.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Services\\RequestDefinitions\\Exceptions\\Exception',
        1 => '__construct',
        2 => 13,
      ),
    ),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/RequestDefinitions/Exceptions/ServiceUnavailableException.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'GuzzleHttp\\Exception\\BadResponseException',
        1 => '__construct',
        2 => 24,
      ),
    ),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/RequestDefinitions/Exceptions/ValidationException.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Validation\\ValidationException',
        1 => '__construct',
        2 => 29,
      ),
    ),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/RequestDefinitions/External/AbstractRequestDefinition.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'App\\Services\\RequestDefinitions\\External\\AbstractRequestDefinition',
    ),
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Services\\RequestDefinitions\\External\\AbstractRequestDefinition',
        1 => 'rules',
        2 => 'App\\Services\\RequestDefinitions\\External\\AbstractRequestDefinition',
      ),
    ),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/RequestDefinitions/GenericRequestDefinition.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Services\\RequestDefinitions\\GenericRequestDefinition',
        1 => 'payload',
        2 => 'App\\Services\\RequestDefinitions\\GenericRequestDefinition',
      ),
      1 => 
      array (
        0 => 'App\\Services\\RequestDefinitions\\GenericRequestDefinition',
        1 => 'validationMessages',
        2 => 'App\\Services\\RequestDefinitions\\GenericRequestDefinition',
      ),
      2 => 
      array (
        0 => 'App\\Services\\RequestDefinitions\\GenericRequestDefinition',
        1 => 'validationAttributes',
        2 => 'App\\Services\\RequestDefinitions\\GenericRequestDefinition',
      ),
      3 => 
      array (
        0 => 'App\\Services\\RequestDefinitions\\GenericRequestDefinition',
        1 => 'isExternal',
        2 => 'App\\Services\\RequestDefinitions\\GenericRequestDefinition',
      ),
      4 => 
      array (
        0 => 'App\\Services\\RequestDefinitions\\GenericRequestDefinition',
        1 => 'description',
        2 => 'App\\Services\\RequestDefinitions\\GenericRequestDefinition',
      ),
      5 => 
      array (
        0 => 'App\\Services\\RequestDefinitions\\GenericRequestDefinition',
        1 => 'maxExecutionsWithinDecayWindow',
        2 => 'App\\Services\\RequestDefinitions\\GenericRequestDefinition',
      ),
      6 => 
      array (
        0 => 'App\\Services\\RequestDefinitions\\GenericRequestDefinition',
        1 => 'decayWindowSeconds',
        2 => 'App\\Services\\RequestDefinitions\\GenericRequestDefinition',
      ),
    ),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/RequestDefinitions/Guards/DuplicateRequestGuard.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\RateLimiter',
        1 => 'hit',
        2 => 24,
      ),
    ),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/RequestDefinitions/Middleware/AbstractMiddleware.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'App\\Services\\RequestDefinitions\\Middleware\\AbstractMiddleware',
    ),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/RequestDefinitions/Middleware/CacheAware.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Services\\RequestDefinitions\\Middleware\\CacheAware',
        1 => '__invoke',
        2 => 'App\\Services\\RequestDefinitions\\Middleware\\CacheAware',
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Cache\\Repository',
        1 => 'put',
        2 => 37,
      ),
    ),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/RequestDefinitions/Middleware/CheckServiceAvailability.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Services\\RequestDefinitions\\Middleware\\CheckServiceAvailability',
        1 => '__invoke',
        2 => 'App\\Services\\RequestDefinitions\\Middleware\\CheckServiceAvailability',
      ),
      1 => 
      array (
        0 => 'App\\Services\\RequestDefinitions\\Middleware\\CheckServiceAvailability',
        1 => 'statusCodes',
        2 => 'App\\Services\\RequestDefinitions\\Middleware\\CheckServiceAvailability',
      ),
    ),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/RequestDefinitions/Middleware/GuardAgainstDuplicates.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Services\\RequestDefinitions\\Middleware\\GuardAgainstDuplicates',
        1 => '__invoke',
        2 => 'App\\Services\\RequestDefinitions\\Middleware\\GuardAgainstDuplicates',
      ),
    ),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/RequestDefinitions/RequestDefinition.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Services\\RequestDefinitions\\RequestDefinition',
        1 => 'queryParams',
        2 => 'App\\Services\\RequestDefinitions\\RequestDefinition',
      ),
      1 => 
      array (
        0 => 'App\\Services\\RequestDefinitions\\RequestDefinition',
        1 => 'headers',
        2 => 'App\\Services\\RequestDefinitions\\RequestDefinition',
      ),
      2 => 
      array (
        0 => 'App\\Services\\RequestDefinitions\\RequestDefinition',
        1 => 'isCacheAware',
        2 => 'App\\Services\\RequestDefinitions\\RequestDefinition',
      ),
      3 => 
      array (
        0 => 'App\\Services\\RequestDefinitions\\RequestDefinition',
        1 => 'middleware',
        2 => 'App\\Services\\RequestDefinitions\\RequestDefinition',
      ),
      4 => 
      array (
        0 => 'App\\Services\\RequestDefinitions\\RequestDefinition',
        1 => 'options',
        2 => 'App\\Services\\RequestDefinitions\\RequestDefinition',
      ),
      5 => 
      array (
        0 => 'App\\Services\\RequestDefinitions\\RequestDefinition',
        1 => 'timeout',
        2 => 'App\\Services\\RequestDefinitions\\RequestDefinition',
      ),
      6 => 
      array (
        0 => 'App\\Services\\RequestDefinitions\\RequestDefinition',
        1 => 'getRequestResolver',
        2 => 'App\\Services\\RequestDefinitions\\RequestDefinition',
      ),
    ),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/RequestDefinitions/Traits/AlwaysConsideredUnique.php' => 
  array (
    'PHPStan\\Rules\\Traits\\TraitDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Services\\RequestDefinitions\\Traits\\AlwaysConsideredUnique',
        1 => 7,
      ),
    ),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/database/migrations/2026_02_26_051510_create_permission_tables.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'throw_if',
        1 => 20,
      ),
      1 => 
      array (
        0 => 'throw_if',
        1 => 21,
      ),
      2 => 
      array (
        0 => 'throw_if',
        1 => 129,
      ),
    ),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/database/seeders/DatabaseSeeder.php' => 
  array (
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Console\\Seeds\\WithoutModelEvents',
      ),
    ),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/routes/api.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'apiResource',
        2 => 22,
      ),
    ),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/routes/web.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'welcome',
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'get',
        2 => 5,
      ),
    ),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/tests/Feature/Http/Controllers/BestSellersBooksControllerTest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Http',
        1 => 'fake',
        2 => 23,
      ),
      1 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Http',
        1 => 'fake',
        2 => 55,
      ),
      2 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Http',
        1 => 'fake',
        2 => 85,
      ),
      3 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Http',
        1 => 'fake',
        2 => 135,
      ),
      4 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Http',
        1 => 'fake',
        2 => 157,
      ),
      5 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Http',
        1 => 'fake',
        2 => 207,
      ),
      6 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Http',
        1 => 'fake',
        2 => 237,
      ),
      7 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Http',
        1 => 'fake',
        2 => 288,
      ),
      8 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Http',
        1 => 'fake',
        2 => 327,
      ),
    ),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/tests/TestCase.php' => 
  array (
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Foundation\\Testing\\RefreshDatabase',
      ),
    ),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/tests/Unit/Services/BestSellersBooks/BestSellerBookServiceTest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureMethodCallCollector' => 
    array (
      0 => 
      array (
        0 => 
        array (
          0 => 'App\\Services\\BestSellersBooks\\BestSellersBookService',
        ),
        1 => 'getListsOverview',
        2 => 62,
      ),
      1 => 
      array (
        0 => 
        array (
          0 => 'App\\Services\\BestSellersBooks\\BestSellersBookService',
        ),
        1 => 'getListsOverview',
        2 => 77,
      ),
      2 => 
      array (
        0 => 
        array (
          0 => 'App\\Services\\BestSellersBooks\\BestSellersBookService',
        ),
        1 => 'getBooksByListName',
        2 => 109,
      ),
      3 => 
      array (
        0 => 
        array (
          0 => 'App\\Services\\BestSellersBooks\\BestSellersBookService',
        ),
        1 => 'getBooksByListName',
        2 => 126,
      ),
      4 => 
      array (
        0 => 
        array (
          0 => 'App\\Services\\BestSellersBooks\\BestSellersBookService',
        ),
        1 => 'getBooksByListName',
        2 => 140,
      ),
      5 => 
      array (
        0 => 
        array (
          0 => 'App\\Services\\BestSellersBooks\\BestSellersBookService',
        ),
        1 => 'getBooksByListAndDate',
        2 => 179,
      ),
      6 => 
      array (
        0 => 
        array (
          0 => 'App\\Services\\BestSellersBooks\\BestSellersBookService',
        ),
        1 => 'getBooksByListAndDate',
        2 => 200,
      ),
      7 => 
      array (
        0 => 
        array (
          0 => 'App\\Services\\BestSellersBooks\\BestSellersBookService',
        ),
        1 => 'getBooksByListAndDate',
        2 => 219,
      ),
      8 => 
      array (
        0 => 
        array (
          0 => 'App\\Services\\BestSellersBooks\\BestSellersBookService',
        ),
        1 => 'getBooksByListAndDate',
        2 => 237,
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Http',
        1 => 'fake',
        2 => 21,
      ),
      1 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Http',
        1 => 'fake',
        2 => 36,
      ),
      2 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Http',
        1 => 'fake',
        2 => 57,
      ),
      3 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Http',
        1 => 'fake',
        2 => 72,
      ),
      4 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Http',
        1 => 'fake',
        2 => 84,
      ),
      5 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Http',
        1 => 'fake',
        2 => 102,
      ),
      6 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Http',
        1 => 'fake',
        2 => 119,
      ),
      7 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Http',
        1 => 'fake',
        2 => 135,
      ),
      8 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Http',
        1 => 'fake',
        2 => 147,
      ),
      9 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Http',
        1 => 'fake',
        2 => 170,
      ),
      10 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Http',
        1 => 'fake',
        2 => 192,
      ),
      11 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Http',
        1 => 'fake',
        2 => 213,
      ),
      12 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Http',
        1 => 'fake',
        2 => 231,
      ),
    ),
  ),
); },
	'dependencies' => array (
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Console/Commands/CreateAdminUser.php' => 
  array (
    'fileHash' => '8c161a1a71e76fd3dcf2a1744a3565e8e0a9a038f17bb536df9673f1dde2d21c',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Http/Controllers/AuthController.php' => 
  array (
    'fileHash' => '61d84062a79bd2bf46c8dce196ac5b7c54cb22c869e1507723953f69f6d11b67',
    'dependentFiles' => 
    array (
      0 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/routes/auth.php',
    ),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Http/Controllers/BestSellersBooksController.php' => 
  array (
    'fileHash' => '5b7ad37e84a33060475d74474fa2a304a25626684fc1939a9941ccd5044053a4',
    'dependentFiles' => 
    array (
      0 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/routes/api.php',
    ),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Http/Controllers/Controller.php' => 
  array (
    'fileHash' => 'e5ddafa07059bfc9f8310767b0fc04dd3b8a1f50bcec1fd693b19f5555697825',
    'dependentFiles' => 
    array (
      0 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Http/Controllers/AuthController.php',
      1 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Http/Controllers/BestSellersBooksController.php',
      2 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Http/Controllers/UsersController.php',
      3 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/routes/api.php',
      4 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/routes/auth.php',
    ),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Http/Controllers/UsersController.php' => 
  array (
    'fileHash' => '575d8cd20a44c7f2bc43ae1e9a958a5efd370eae4033adaf304c3628cb16b48a',
    'dependentFiles' => 
    array (
      0 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/routes/api.php',
    ),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Http/Requests/BooksByListNameAndDateRequest.php' => 
  array (
    'fileHash' => '54381be13d0c7546cca5647f0bc8ec3ae978499348a201756ed2370b22f0684b',
    'dependentFiles' => 
    array (
      0 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Http/Controllers/BestSellersBooksController.php',
    ),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Http/Requests/BooksByListNameRequest.php' => 
  array (
    'fileHash' => '084dcb3bf04502e58d726816bbb59249d5f23e80800353ca0af56497b2353bbf',
    'dependentFiles' => 
    array (
      0 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Http/Controllers/BestSellersBooksController.php',
    ),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Http/Requests/CreateUserRequest.php' => 
  array (
    'fileHash' => '24b3777e02963982c24c55cecc59ce19abd2bdddce54832bbd5af10e72f92f2c',
    'dependentFiles' => 
    array (
      0 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Http/Controllers/UsersController.php',
    ),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Http/Requests/ListNamesRequest.php' => 
  array (
    'fileHash' => 'f79c22a81417b9f94b3d562e04559494dec7972998e539deb7978ec830e5c2c2',
    'dependentFiles' => 
    array (
      0 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Http/Controllers/BestSellersBooksController.php',
    ),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Http/Requests/ListsOverviewRequest.php' => 
  array (
    'fileHash' => 'd641396e423c35e6d8b8306c875e8b22bf1f7726b1b898dd315ab9cfefd055af',
    'dependentFiles' => 
    array (
      0 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Http/Controllers/BestSellersBooksController.php',
    ),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Http/Requests/UpdateUserRequest.php' => 
  array (
    'fileHash' => 'd522b339899534926dbc85c899d54a974e1f05b1221c2909056c9cdeee85ee8f',
    'dependentFiles' => 
    array (
      0 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Http/Controllers/UsersController.php',
    ),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Http/Resources/BestSellersListResource.php' => 
  array (
    'fileHash' => '79b205f9a6057135593f1019933ec2770537744dedd993a9ab61b38475eb4fa9',
    'dependentFiles' => 
    array (
      0 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Http/Controllers/BestSellersBooksController.php',
      1 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/tests/Feature/Http/Controllers/BestSellersBooksControllerTest.php',
    ),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Http/Resources/BookResource.php' => 
  array (
    'fileHash' => '0518667b3d66a42a0fd7c653d04493de7c3d6bb800aa9dcda596f250b3946284',
    'dependentFiles' => 
    array (
      0 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Http/Controllers/BestSellersBooksController.php',
      1 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/tests/Feature/Http/Controllers/BestSellersBooksControllerTest.php',
    ),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Http/Resources/UserResource.php' => 
  array (
    'fileHash' => '7aeed944bd8df1bd97470d42d6eec03d85b37922cea028d82b82709704888a38',
    'dependentFiles' => 
    array (
      0 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Http/Controllers/UsersController.php',
    ),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Models/User.php' => 
  array (
    'fileHash' => 'c85fab70cf960f9fb6273cc5154d715cfb7baff9e62408df2d82965a8ba08c20',
    'dependentFiles' => 
    array (
      0 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Console/Commands/CreateAdminUser.php',
      1 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Http/Controllers/AuthController.php',
      2 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Http/Controllers/UsersController.php',
      3 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Http/Requests/BooksByListNameAndDateRequest.php',
      4 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Http/Requests/BooksByListNameRequest.php',
      5 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Http/Requests/CreateUserRequest.php',
      6 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Http/Requests/ListNamesRequest.php',
      7 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Http/Requests/ListsOverviewRequest.php',
      8 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Http/Requests/UpdateUserRequest.php',
      9 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Http/Resources/UserResource.php',
      10 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Policies/BookPolicy.php',
      11 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Policies/BooksPolicy.php',
      12 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Policies/ListPolicy.php',
      13 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Policies/ListsPolicy.php',
      14 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Policies/UserPolicy.php',
      15 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Policies/UsersPolicy.php',
      16 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/database/factories/UserFactory.php',
      17 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/tests/Feature/Http/Controllers/BestSellersBooksControllerTest.php',
    ),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Policies/BookPolicy.php' => 
  array (
    'fileHash' => '360854d8d9490ca7665633f936d34726fb9f6b68001fdfeb085fac542d7cdd57',
    'dependentFiles' => 
    array (
      0 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Providers/AppServiceProvider.php',
    ),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Policies/ListPolicy.php' => 
  array (
    'fileHash' => '6ae01a13cc7318be4a8901a3ce573e0a1cd0a5211c0b6ad84db2c046fe4658b7',
    'dependentFiles' => 
    array (
      0 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Providers/AppServiceProvider.php',
    ),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Policies/UserPolicy.php' => 
  array (
    'fileHash' => '10f52202380c5361f7e41b2c2c1290763a4f99b3d1a6c78a662a22207b7576d9',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Providers/AppServiceProvider.php' => 
  array (
    'fileHash' => '568b85d3cca20457ecff3653928934e893c6da3ed612305b0a7dffe24e8021de',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/AbstractExternalService.php' => 
  array (
    'fileHash' => 'be74ae32d05ee3ef5b0d683f36422380ae2c0ace92877ba7bfd55cda787c1f4d',
    'dependentFiles' => 
    array (
      0 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Http/Controllers/BestSellersBooksController.php',
      1 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/BestSellersBooks/BestSellersBookService.php',
      2 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/BestSellersBooks/RequestDefinitions/AbstractRequestDefinition.php',
      3 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/tests/Unit/Services/BestSellersBooks/BestSellerBookServiceTest.php',
    ),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/BestSellersBooks/BestSellersBookService.php' => 
  array (
    'fileHash' => '024a2dc3425d9c203e98cff1c514ed39084fb6bbdb1d8bbaba03abf35302f84d',
    'dependentFiles' => 
    array (
      0 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Http/Controllers/BestSellersBooksController.php',
      1 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/BestSellersBooks/RequestDefinitions/AbstractRequestDefinition.php',
      2 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/tests/Unit/Services/BestSellersBooks/BestSellerBookServiceTest.php',
    ),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/BestSellersBooks/DTO/BestSellersList.php' => 
  array (
    'fileHash' => '8679e201d83fb5219644ac0d352f173fa4f2242d8253a3737194862db7718db9',
    'dependentFiles' => 
    array (
      0 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Http/Controllers/BestSellersBooksController.php',
      1 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/BestSellersBooks/BestSellersBookService.php',
      2 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/tests/Feature/Http/Controllers/BestSellersBooksControllerTest.php',
    ),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/BestSellersBooks/DTO/Book.php' => 
  array (
    'fileHash' => '5ffac49aefaf35adf795c324330c9607be10dafa3d6ef22582dcd3626bb6ed90',
    'dependentFiles' => 
    array (
      0 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Http/Controllers/BestSellersBooksController.php',
      1 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/BestSellersBooks/BestSellersBookService.php',
      2 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/tests/Feature/Http/Controllers/BestSellersBooksControllerTest.php',
      3 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/tests/Unit/Services/BestSellersBooks/BestSellerBookServiceTest.php',
    ),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/BestSellersBooks/Enums/BookList.php' => 
  array (
    'fileHash' => 'ddad90a9d4fb4065d1d1a7ca81b66141ab00e6bc450b1ff3660dd74d81cd2cf7',
    'dependentFiles' => 
    array (
      0 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Http/Controllers/BestSellersBooksController.php',
      1 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Http/Requests/BooksByListNameAndDateRequest.php',
      2 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Http/Requests/BooksByListNameRequest.php',
      3 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/BestSellersBooks/BestSellersBookService.php',
      4 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/BestSellersBooks/RequestDefinitions/GetBooksByListAndDate.php',
      5 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/BestSellersBooks/RequestDefinitions/GetBooksByListName.php',
      6 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/tests/Feature/Http/Controllers/BestSellersBooksControllerTest.php',
      7 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/tests/Unit/Services/BestSellersBooks/BestSellerBookServiceTest.php',
    ),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/BestSellersBooks/RequestDefinitions/AbstractRequestDefinition.php' => 
  array (
    'fileHash' => '7299a2517f9c6738802e4f771fcd4b6fac1a9e9331ddf995c6128c406f30ece4',
    'dependentFiles' => 
    array (
      0 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/BestSellersBooks/BestSellersBookService.php',
      1 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/BestSellersBooks/RequestDefinitions/GetBooksByListAndDate.php',
      2 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/BestSellersBooks/RequestDefinitions/GetBooksByListName.php',
      3 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/BestSellersBooks/RequestDefinitions/GetListsOverview.php',
    ),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/BestSellersBooks/RequestDefinitions/GetBooksByListAndDate.php' => 
  array (
    'fileHash' => '10e0b360cfa1190d8d8cf4c22b974bed951c0af729c3ef0b4e563309840fb0b0',
    'dependentFiles' => 
    array (
      0 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/BestSellersBooks/BestSellersBookService.php',
    ),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/BestSellersBooks/RequestDefinitions/GetBooksByListName.php' => 
  array (
    'fileHash' => 'a8aa20d69b50cccc6221a4a7901d32c96cd8855d98ceb651513b4c1f73ece4e3',
    'dependentFiles' => 
    array (
      0 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/BestSellersBooks/BestSellersBookService.php',
    ),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/BestSellersBooks/RequestDefinitions/GetListsOverview.php' => 
  array (
    'fileHash' => '0a02198a86afe4cc8a2fa7eaed119cc85ba83ed413ecbfecac4513417c0b09f0',
    'dependentFiles' => 
    array (
      0 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/BestSellersBooks/BestSellersBookService.php',
    ),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/Enums/ExternalService.php' => 
  array (
    'fileHash' => '0b7b6c577b57cf148cccff8a9be02bc807d56e29711c4d2aff2a0a49e15d2b7e',
    'dependentFiles' => 
    array (
      0 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/AbstractExternalService.php',
      1 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/BestSellersBooks/BestSellersBookService.php',
      2 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/BestSellersBooks/RequestDefinitions/AbstractRequestDefinition.php',
      3 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/RequestDefinitions/GenericRequestDefinition.php',
    ),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/RequestDefinitions/Exceptions/DuplicateRequestException.php' => 
  array (
    'fileHash' => 'f7beca1a2555d34d2676f0c761ddde5f8bf32e05db8011a6112ce533c372a25f',
    'dependentFiles' => 
    array (
      0 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/RequestDefinitions/Guards/DuplicateRequestGuard.php',
    ),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/RequestDefinitions/Exceptions/Exception.php' => 
  array (
    'fileHash' => '26e8064c10134b7cb961de1efe0c0f29277f2091c4dbc48ef50fc4251147892a',
    'dependentFiles' => 
    array (
      0 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/RequestDefinitions/Exceptions/DuplicateRequestException.php',
      1 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/RequestDefinitions/Guards/DuplicateRequestGuard.php',
    ),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/RequestDefinitions/Exceptions/ServiceUnavailableException.php' => 
  array (
    'fileHash' => '5c1a86d9aa5012498c91c2a6549f1f7d02315ff62a4cb995875d2d7a6ef9046b',
    'dependentFiles' => 
    array (
      0 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/RequestDefinitions/Middleware/CheckServiceAvailability.php',
    ),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/RequestDefinitions/Exceptions/ValidationException.php' => 
  array (
    'fileHash' => 'd1a2dbf17061d13c4a89f1d801df1361e988a87f78f16e2ef04883cb486e1cdc',
    'dependentFiles' => 
    array (
      0 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/RequestDefinitions/GenericRequestDefinition.php',
    ),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/RequestDefinitions/External/AbstractHttpClient.php' => 
  array (
    'fileHash' => '639f46dd55c16e3ac43d9688742ec11eaed61d861aa4bd25ac8dc470c37ed123',
    'dependentFiles' => 
    array (
      0 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/RequestDefinitions/External/AbstractRequestDefinition.php',
    ),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/RequestDefinitions/External/AbstractRequestDefinition.php' => 
  array (
    'fileHash' => '298a4ede61f4ece8a105d7a5f7a0f409cb34b20314eab5c80b1ffef8e3dc678c',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/RequestDefinitions/GenericRequestDefinition.php' => 
  array (
    'fileHash' => '0045631f96ac5e53125e095d8c2a33f5471a688fe46c8b439e0c60d87e80a9a5',
    'dependentFiles' => 
    array (
      0 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/BestSellersBooks/BestSellersBookService.php',
      1 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/BestSellersBooks/RequestDefinitions/AbstractRequestDefinition.php',
      2 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/BestSellersBooks/RequestDefinitions/GetBooksByListAndDate.php',
      3 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/BestSellersBooks/RequestDefinitions/GetBooksByListName.php',
      4 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/BestSellersBooks/RequestDefinitions/GetListsOverview.php',
      5 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/RequestDefinitions/Exceptions/DuplicateRequestException.php',
      6 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/RequestDefinitions/Exceptions/Exception.php',
      7 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/RequestDefinitions/Exceptions/ValidationException.php',
      8 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/RequestDefinitions/External/AbstractHttpClient.php',
      9 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/RequestDefinitions/External/AbstractRequestDefinition.php',
      10 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/RequestDefinitions/Guards/DuplicateRequestGuard.php',
      11 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/RequestDefinitions/Guards/Guard.php',
      12 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/RequestDefinitions/Middleware/AbstractMiddleware.php',
      13 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/RequestDefinitions/Middleware/CacheAware.php',
      14 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/RequestDefinitions/Middleware/GuardAgainstDuplicates.php',
      15 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/RequestDefinitions/RequestDefinition.php',
    ),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/RequestDefinitions/Guards/DuplicateRequestGuard.php' => 
  array (
    'fileHash' => 'a3c43f6d23b388dc9f65b796e72d401c4a87e6bd2135ba3ce2d8343eb5e9a130',
    'dependentFiles' => 
    array (
      0 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/RequestDefinitions/Middleware/GuardAgainstDuplicates.php',
    ),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/RequestDefinitions/Guards/Guard.php' => 
  array (
    'fileHash' => '1d97f10afed27ae60561c5b1368aca223869ad5c194bb9553afadd8ba3517ea1',
    'dependentFiles' => 
    array (
      0 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/RequestDefinitions/Guards/DuplicateRequestGuard.php',
      1 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/RequestDefinitions/Middleware/GuardAgainstDuplicates.php',
    ),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/RequestDefinitions/Middleware/AbstractMiddleware.php' => 
  array (
    'fileHash' => '609ce7238e80bbe20c3b6cfb8935d9ca7c4828a6f3bb7fa9d0f01e2fe05930f9',
    'dependentFiles' => 
    array (
      0 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/RequestDefinitions/Middleware/CacheAware.php',
      1 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/RequestDefinitions/Middleware/CheckServiceAvailability.php',
      2 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/RequestDefinitions/Middleware/GuardAgainstDuplicates.php',
      3 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/RequestDefinitions/RequestDefinition.php',
    ),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/RequestDefinitions/Middleware/CacheAware.php' => 
  array (
    'fileHash' => '0797a91d6a8612900a3f518d1844f1a189a731f285e42959686d936c09ca6091',
    'dependentFiles' => 
    array (
      0 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/RequestDefinitions/RequestDefinition.php',
    ),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/RequestDefinitions/Middleware/CheckServiceAvailability.php' => 
  array (
    'fileHash' => '04082c611e0ac0bb86e6da633fd4501f8ea8af30d4ec64ae7dd2a5df9daca3ee',
    'dependentFiles' => 
    array (
      0 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/RequestDefinitions/RequestDefinition.php',
    ),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/RequestDefinitions/Middleware/GuardAgainstDuplicates.php' => 
  array (
    'fileHash' => '64a2fc11947f2c731e3c905e5ed9a487a34b7234a2be5a56494a7dbe66f42a63',
    'dependentFiles' => 
    array (
      0 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/RequestDefinitions/RequestDefinition.php',
    ),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/RequestDefinitions/RequestDefinition.php' => 
  array (
    'fileHash' => 'f8ce1294c1195b1a119b5cad8197de8b7a51fa94b07ab9617f0118e3a7457291',
    'dependentFiles' => 
    array (
      0 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/BestSellersBooks/BestSellersBookService.php',
      1 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/BestSellersBooks/RequestDefinitions/AbstractRequestDefinition.php',
      2 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/BestSellersBooks/RequestDefinitions/GetBooksByListAndDate.php',
      3 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/BestSellersBooks/RequestDefinitions/GetBooksByListName.php',
      4 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/BestSellersBooks/RequestDefinitions/GetListsOverview.php',
      5 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/RequestDefinitions/Exceptions/ValidationException.php',
      6 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/RequestDefinitions/External/AbstractHttpClient.php',
      7 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/RequestDefinitions/External/AbstractRequestDefinition.php',
    ),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/RequestDefinitions/Traits/AlwaysConsideredUnique.php' => 
  array (
    'fileHash' => 'f77311b915ecf3cbb7dadefb8802301e5f7df591e6af842ef74d98cc9a29cee2',
    'dependentFiles' => 
    array (
      0 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/RequestDefinitions/RequestDefinition.php',
    ),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Users/Enums/Permission.php' => 
  array (
    'fileHash' => 'a83ea10b65680fb615af39bdde2f5d98c1ae73e16a5c89df8697aafc18cda13b',
    'dependentFiles' => 
    array (
      0 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Policies/BookPolicy.php',
      1 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Policies/BooksPolicy.php',
      2 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Policies/ListPolicy.php',
      3 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Policies/ListsPolicy.php',
      4 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Policies/UserPolicy.php',
      5 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Policies/UsersPolicy.php',
      6 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Users/Enums/Role.php',
      7 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/database/seeders/RolesAndPermissionsSeeder.php',
      8 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/tests/Feature/Http/Controllers/BestSellersBooksControllerTest.php',
    ),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Users/Enums/Role.php' => 
  array (
    'fileHash' => 'c4f6ec71f43aec61218b9bed79d527340cfcff81f9013382e9bc029aabee065b',
    'dependentFiles' => 
    array (
      0 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Console/Commands/CreateAdminUser.php',
      1 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Http/Requests/CreateUserRequest.php',
      2 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Http/Requests/UpdateUserRequest.php',
      3 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Models/User.php',
      4 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/database/seeders/RolesAndPermissionsSeeder.php',
      5 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/tests/Feature/Http/Controllers/BestSellersBooksControllerTest.php',
    ),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/database/factories/UserFactory.php' => 
  array (
    'fileHash' => '05c4cfa8e4dc7ebe659c66717b30ea6970f62d732a1bbce32b55650cccc6aa8d',
    'dependentFiles' => 
    array (
      0 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/tests/Feature/Http/Controllers/BestSellersBooksControllerTest.php',
    ),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/database/migrations/0001_01_01_000000_create_users_table.php' => 
  array (
    'fileHash' => '10d79883bc08ce46510f9ad8b1830b4d06d586dc56ae2c8bac3b3e491f69a90f',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/database/migrations/0001_01_01_000001_create_cache_table.php' => 
  array (
    'fileHash' => '2ca8398390ecef8eaf72aeac7fefce67f7de631b6f2ec7b7081c8db8953215dc',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/database/migrations/0001_01_01_000002_create_jobs_table.php' => 
  array (
    'fileHash' => '7c9c712adf4091c87bf2612f4d0dccdfa1df4501553e4ac068b83d7bd5462fa5',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/database/migrations/2026_02_07_034235_create_personal_access_tokens_table.php' => 
  array (
    'fileHash' => 'c81ecde85ea5072188c468dcaf79776728b6eb8f684d63fc0d88a4908484ca75',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/database/migrations/2026_02_26_051510_create_permission_tables.php' => 
  array (
    'fileHash' => 'bd097ba10f37a131a9a8885ed4723387521a2f222f636b37b911e7b9ed34eec2',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/database/seeders/DatabaseSeeder.php' => 
  array (
    'fileHash' => 'fa6c1a0fc589f1b610207adbf7823e62d940c4a94f78066ec33c1b07a6a2fa4f',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/database/seeders/RolesAndPermissionsSeeder.php' => 
  array (
    'fileHash' => '430f0047ab1cfa1101f7660b61b82a6b6984cbf7f051f7f0f902e2bf133de9a0',
    'dependentFiles' => 
    array (
      0 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/database/seeders/DatabaseSeeder.php',
      1 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/tests/TestCase.php',
    ),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/routes/api.php' => 
  array (
    'fileHash' => 'e9e9e5eee8d5ba8fc07703630fdc510082f12c78dbecd9a61bd8753847475e36',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/routes/auth.php' => 
  array (
    'fileHash' => '05c55311be84f4ef9e66d1e84915d19f493f2375fbf67b3e2b9b6f71631bc9ce',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/routes/console.php' => 
  array (
    'fileHash' => '9adccc33e7dd400683e434774077c7fdb2f299c5712cedf16a43fdf56f2850fa',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/routes/web.php' => 
  array (
    'fileHash' => '248c7eeeb43bb61ee4fb6603e52b44843c64f72a841d671bcd41871aab23f970',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/tests/Feature/Http/Controllers/BestSellersBooksControllerTest.php' => 
  array (
    'fileHash' => '34f337f267e5d1b8ba6252982a3e5e6cf33f75468d1f30c985ba284854296eba',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/tests/Support/helpers.php' => 
  array (
    'fileHash' => '6475fbf184e1fd7a468284bfbbfe68e8f2419a6ee46e875ba7727931fcafc73a',
    'dependentFiles' => 
    array (
      0 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/tests/Feature/Http/Controllers/BestSellersBooksControllerTest.php',
      1 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/tests/Unit/Services/BestSellersBooks/BestSellerBookServiceTest.php',
    ),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/tests/TestCase.php' => 
  array (
    'fileHash' => '664e4fab9debba85d244fa9fb9c20ac72c757519e015184363b141ac9fd9cf0a',
    'dependentFiles' => 
    array (
      0 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/tests/Feature/Http/Controllers/BestSellersBooksControllerTest.php',
      1 => '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/tests/Unit/Services/BestSellersBooks/BestSellerBookServiceTest.php',
    ),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/tests/Unit/Services/BestSellersBooks/BestSellerBookServiceTest.php' => 
  array (
    'fileHash' => '030a1bed4ad600d2c92ed3fac554f75490a1f7600bf39694e6b4344673b2943a',
    'dependentFiles' => 
    array (
    ),
  ),
),
	'exportedNodesCallback' => static function (): array { return array (
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Console/Commands/CreateAdminUser.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Console\\Commands\\CreateAdminUser',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Console\\Command',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'signature',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The name and signature of the console command.
     *
     * @var string
     */',
             'namespace' => 'App\\Console\\Commands',
             'uses' => 
            array (
              'user' => 'App\\Models\\User',
              'role' => 'App\\Users\\Enums\\Role',
              'command' => 'Illuminate\\Console\\Command',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'description',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The console command description.
     *
     * @var string
     */',
             'namespace' => 'App\\Console\\Commands',
             'uses' => 
            array (
              'user' => 'App\\Models\\User',
              'role' => 'App\\Users\\Enums\\Role',
              'command' => 'Illuminate\\Console\\Command',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Execute the console command.
     */',
             'namespace' => 'App\\Console\\Commands',
             'uses' => 
            array (
              'user' => 'App\\Models\\User',
              'role' => 'App\\Users\\Enums\\Role',
              'command' => 'Illuminate\\Console\\Command',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Http/Controllers/AuthController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\AuthController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'login',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Http/Controllers/BestSellersBooksController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\BestSellersBooksController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'service',
               'type' => 'App\\Services\\BestSellersBooks\\BestSellersBookService',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'lists',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\Resources\\Json\\JsonResource',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'App\\Http\\Requests\\ListNamesRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'books',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\Resources\\Json\\JsonResource',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'listsOverview',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'App\\Http\\Requests\\ListsOverviewRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'booksByListName',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\Resources\\Json\\JsonResource',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'App\\Http\\Requests\\BooksByListNameRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'booksByListNameAndDate',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\Resources\\Json\\JsonResource',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'App\\Http\\Requests\\BooksByListNameAndDateRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Http/Controllers/Controller.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Controller',
       'phpDoc' => NULL,
       'abstract' => true,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Foundation\\Auth\\Access\\AuthorizesRequests',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Http/Controllers/UsersController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\UsersController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Http\\Controllers\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'index',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\Resources\\Json\\JsonResource',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'show',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\Resources\\Json\\JsonResource',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'App\\Models\\User',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'store',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\Resources\\Json\\JsonResource',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'App\\Http\\Requests\\CreateUserRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'update',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\Resources\\Json\\JsonResource',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'App\\Http\\Requests\\UpdateUserRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'App\\Models\\User',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'destroy',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'App\\Models\\User',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Http/Requests/BooksByListNameAndDateRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Requests\\BooksByListNameAndDateRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'authorize',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Determine if the user is authorized to make this request.
     */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'rule' => 'Illuminate\\Validation\\Rule',
              'booklist' => 'App\\Services\\BestSellersBooks\\Enums\\BookList',
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'prepareForValidation',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rules',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'list',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'App\\Services\\BestSellersBooks\\Enums\\BookList',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'publishedDate',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Http/Requests/BooksByListNameRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Requests\\BooksByListNameRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'authorize',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Determine if the user is authorized to make this request.
     */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'booklist' => 'App\\Services\\BestSellersBooks\\Enums\\BookList',
              'rule' => 'Illuminate\\Validation\\Rule',
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'prepareForValidation',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rules',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'list',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?App\\Services\\BestSellersBooks\\Enums\\BookList',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Http/Requests/CreateUserRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Requests\\CreateUserRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'authorize',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Determine if the user is authorized to make this request.
     */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'user' => 'App\\Models\\User',
              'role' => 'App\\Users\\Enums\\Role',
              'rule' => 'Illuminate\\Validation\\Rule',
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rules',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \\Illuminate\\Contracts\\Validation\\ValidationRule|array<mixed>|string>
     */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'user' => 'App\\Models\\User',
              'role' => 'App\\Users\\Enums\\Role',
              'rule' => 'Illuminate\\Validation\\Rule',
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Http/Requests/ListNamesRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Requests\\ListNamesRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'authorize',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Determine if the user is authorized to make this request.
     */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rules',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \\Illuminate\\Contracts\\Validation\\ValidationRule|array<mixed>|string>
     */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Http/Requests/ListsOverviewRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Requests\\ListsOverviewRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'authorize',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Determine if the user is authorized to make this request.
     */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rules',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \\Illuminate\\Contracts\\Validation\\ValidationRule|array<mixed>|string>
     */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Http/Requests/UpdateUserRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Requests\\UpdateUserRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'authorize',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Determine if the user is authorized to make this request.
     */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'user' => 'App\\Models\\User',
              'role' => 'App\\Users\\Enums\\Role',
              'rule' => 'Illuminate\\Validation\\Rule',
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rules',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \\Illuminate\\Contracts\\Validation\\ValidationRule|array<mixed>|string>
     */',
             'namespace' => 'App\\Http\\Requests',
             'uses' => 
            array (
              'user' => 'App\\Models\\User',
              'role' => 'App\\Users\\Enums\\Role',
              'rule' => 'Illuminate\\Validation\\Rule',
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Http/Resources/BestSellersListResource.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Resources\\BestSellersListResource',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Http\\Resources\\Json\\JsonResource',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'toArray',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */',
             'namespace' => 'App\\Http\\Resources',
             'uses' => 
            array (
              'request' => 'Illuminate\\Http\\Request',
              'jsonresource' => 'Illuminate\\Http\\Resources\\Json\\JsonResource',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Http/Resources/BookResource.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Resources\\BookResource',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Http\\Resources\\Json\\JsonResource',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'toArray',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */',
             'namespace' => 'App\\Http\\Resources',
             'uses' => 
            array (
              'request' => 'Illuminate\\Http\\Request',
              'jsonresource' => 'Illuminate\\Http\\Resources\\Json\\JsonResource',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Http/Resources/UserResource.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Resources\\UserResource',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * @mixin User
 */',
         'namespace' => 'App\\Http\\Resources',
         'uses' => 
        array (
          'user' => 'App\\Models\\User',
          'request' => 'Illuminate\\Http\\Request',
          'jsonresource' => 'Illuminate\\Http\\Resources\\Json\\JsonResource',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Http\\Resources\\Json\\JsonResource',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'toArray',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */',
             'namespace' => 'App\\Http\\Resources',
             'uses' => 
            array (
              'user' => 'App\\Models\\User',
              'request' => 'Illuminate\\Http\\Request',
              'jsonresource' => 'Illuminate\\Http\\Resources\\Json\\JsonResource',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Models/User.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\User',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Auth\\User',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
        1 => 'Illuminate\\Notifications\\Notifiable',
        2 => 'Spatie\\Permission\\Traits\\HasRoles',
        3 => 'Laravel\\Sanctum\\HasApiTokens',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'role' => 'App\\Users\\Enums\\Role',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
              'notifiable' => 'Illuminate\\Notifications\\Notifiable',
              'hasapitokens' => 'Laravel\\Sanctum\\HasApiTokens',
              'hasroles' => 'Spatie\\Permission\\Traits\\HasRoles',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'hidden',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'role' => 'App\\Users\\Enums\\Role',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
              'notifiable' => 'Illuminate\\Notifications\\Notifiable',
              'hasapitokens' => 'Laravel\\Sanctum\\HasApiTokens',
              'hasroles' => 'Spatie\\Permission\\Traits\\HasRoles',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'casts',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'role' => 'App\\Users\\Enums\\Role',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
              'notifiable' => 'Illuminate\\Notifications\\Notifiable',
              'hasapitokens' => 'Laravel\\Sanctum\\HasApiTokens',
              'hasroles' => 'Spatie\\Permission\\Traits\\HasRoles',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'isAdmin',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Policies/BookPolicy.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Policies\\BookPolicy',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'viewBooks',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'App\\Models\\User',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'viewBooksByList',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'App\\Models\\User',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'viewBooksByDate',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'App\\Models\\User',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'viewBooksByListAndDate',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'App\\Models\\User',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Policies/ListPolicy.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Policies\\ListPolicy',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'viewLists',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'App\\Models\\User',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'viewListNames',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'App\\Models\\User',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Policies/UserPolicy.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Policies\\UserPolicy',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'viewUsers',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'App\\Models\\User',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'createUser',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'App\\Models\\User',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'updateUser',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'App\\Models\\User',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'deleteUser',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'App\\Models\\User',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Providers/AppServiceProvider.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Providers\\AppServiceProvider',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Support\\ServiceProvider',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'register',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Register any application services.
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'bookpolicy' => 'App\\Policies\\BookPolicy',
              'listpolicy' => 'App\\Policies\\ListPolicy',
              'gate' => 'Illuminate\\Support\\Facades\\Gate',
              'serviceprovider' => 'Illuminate\\Support\\ServiceProvider',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'boot',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Bootstrap any application services.
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'bookpolicy' => 'App\\Policies\\BookPolicy',
              'listpolicy' => 'App\\Policies\\ListPolicy',
              'gate' => 'Illuminate\\Support\\Facades\\Gate',
              'serviceprovider' => 'Illuminate\\Support\\ServiceProvider',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/AbstractExternalService.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Services\\AbstractExternalService',
       'phpDoc' => NULL,
       'abstract' => true,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'externalService',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => true,
           'final' => false,
           'static' => true,
           'returnType' => 'App\\Services\\Enums\\ExternalService',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/BestSellersBooks/BestSellersBookService.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Services\\BestSellersBooks\\BestSellersBookService',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Services\\AbstractExternalService',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'externalService',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'App\\Services\\Enums\\ExternalService',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getBooks',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** @return Collection<int, Book> */',
             'namespace' => 'App\\Services\\BestSellersBooks',
             'uses' => 
            array (
              'exception' => 'Exception',
              'invalidargumentexception' => 'InvalidArgumentException',
              'carbon' => 'Illuminate\\Support\\Carbon',
              'collection' => 'Illuminate\\Support\\Collection',
              'externalservice' => 'App\\Services\\Enums\\ExternalService',
              'abstractexternalservice' => 'App\\Services\\AbstractExternalService',
              'book' => 'App\\Services\\BestSellersBooks\\DTO\\Book',
              'response' => 'Symfony\\Component\\HttpFoundation\\Response',
              'unauthorizedexception' => 'Illuminate\\Validation\\UnauthorizedException',
              'booklist' => 'App\\Services\\BestSellersBooks\\Enums\\BookList',
              'httpresponse' => 'Illuminate\\Http\\Client\\Response',
              'bestsellerslist' => 'App\\Services\\BestSellersBooks\\DTO\\BestSellersList',
              'notfoundhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException',
              'getlistsoverview' => 'App\\Services\\BestSellersBooks\\RequestDefinitions\\GetListsOverview',
              'getbooksbylistname' => 'App\\Services\\BestSellersBooks\\RequestDefinitions\\GetBooksByListName',
              'getbooksbylistanddate' => 'App\\Services\\BestSellersBooks\\RequestDefinitions\\GetBooksByListAndDate',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Support\\Collection',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getLists',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** @return Collection<int, BestSellersList> */',
             'namespace' => 'App\\Services\\BestSellersBooks',
             'uses' => 
            array (
              'exception' => 'Exception',
              'invalidargumentexception' => 'InvalidArgumentException',
              'carbon' => 'Illuminate\\Support\\Carbon',
              'collection' => 'Illuminate\\Support\\Collection',
              'externalservice' => 'App\\Services\\Enums\\ExternalService',
              'abstractexternalservice' => 'App\\Services\\AbstractExternalService',
              'book' => 'App\\Services\\BestSellersBooks\\DTO\\Book',
              'response' => 'Symfony\\Component\\HttpFoundation\\Response',
              'unauthorizedexception' => 'Illuminate\\Validation\\UnauthorizedException',
              'booklist' => 'App\\Services\\BestSellersBooks\\Enums\\BookList',
              'httpresponse' => 'Illuminate\\Http\\Client\\Response',
              'bestsellerslist' => 'App\\Services\\BestSellersBooks\\DTO\\BestSellersList',
              'notfoundhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException',
              'getlistsoverview' => 'App\\Services\\BestSellersBooks\\RequestDefinitions\\GetListsOverview',
              'getbooksbylistname' => 'App\\Services\\BestSellersBooks\\RequestDefinitions\\GetBooksByListName',
              'getbooksbylistanddate' => 'App\\Services\\BestSellersBooks\\RequestDefinitions\\GetBooksByListAndDate',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Support\\Collection',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getListsOverview',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array|string',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'date',
               'type' => 'Illuminate\\Support\\Carbon|string|null|null',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getBooksByListName',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** @return Collection<int, Book> */',
             'namespace' => 'App\\Services\\BestSellersBooks',
             'uses' => 
            array (
              'exception' => 'Exception',
              'invalidargumentexception' => 'InvalidArgumentException',
              'carbon' => 'Illuminate\\Support\\Carbon',
              'collection' => 'Illuminate\\Support\\Collection',
              'externalservice' => 'App\\Services\\Enums\\ExternalService',
              'abstractexternalservice' => 'App\\Services\\AbstractExternalService',
              'book' => 'App\\Services\\BestSellersBooks\\DTO\\Book',
              'response' => 'Symfony\\Component\\HttpFoundation\\Response',
              'unauthorizedexception' => 'Illuminate\\Validation\\UnauthorizedException',
              'booklist' => 'App\\Services\\BestSellersBooks\\Enums\\BookList',
              'httpresponse' => 'Illuminate\\Http\\Client\\Response',
              'bestsellerslist' => 'App\\Services\\BestSellersBooks\\DTO\\BestSellersList',
              'notfoundhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException',
              'getlistsoverview' => 'App\\Services\\BestSellersBooks\\RequestDefinitions\\GetListsOverview',
              'getbooksbylistname' => 'App\\Services\\BestSellersBooks\\RequestDefinitions\\GetBooksByListName',
              'getbooksbylistanddate' => 'App\\Services\\BestSellersBooks\\RequestDefinitions\\GetBooksByListAndDate',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Support\\Collection',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'bookList',
               'type' => 'App\\Services\\BestSellersBooks\\Enums\\BookList|string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getBooksByListAndDate',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** @return Collection<int, Book> */',
             'namespace' => 'App\\Services\\BestSellersBooks',
             'uses' => 
            array (
              'exception' => 'Exception',
              'invalidargumentexception' => 'InvalidArgumentException',
              'carbon' => 'Illuminate\\Support\\Carbon',
              'collection' => 'Illuminate\\Support\\Collection',
              'externalservice' => 'App\\Services\\Enums\\ExternalService',
              'abstractexternalservice' => 'App\\Services\\AbstractExternalService',
              'book' => 'App\\Services\\BestSellersBooks\\DTO\\Book',
              'response' => 'Symfony\\Component\\HttpFoundation\\Response',
              'unauthorizedexception' => 'Illuminate\\Validation\\UnauthorizedException',
              'booklist' => 'App\\Services\\BestSellersBooks\\Enums\\BookList',
              'httpresponse' => 'Illuminate\\Http\\Client\\Response',
              'bestsellerslist' => 'App\\Services\\BestSellersBooks\\DTO\\BestSellersList',
              'notfoundhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException',
              'getlistsoverview' => 'App\\Services\\BestSellersBooks\\RequestDefinitions\\GetListsOverview',
              'getbooksbylistname' => 'App\\Services\\BestSellersBooks\\RequestDefinitions\\GetBooksByListName',
              'getbooksbylistanddate' => 'App\\Services\\BestSellersBooks\\RequestDefinitions\\GetBooksByListAndDate',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Support\\Collection',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'bookList',
               'type' => 'App\\Services\\BestSellersBooks\\Enums\\BookList|string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'date',
               'type' => 'Illuminate\\Support\\Carbon|string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/BestSellersBooks/DTO/BestSellersList.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Services\\BestSellersBooks\\DTO\\BestSellersList',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * @implements Arrayable<string, mixed>
 */',
         'namespace' => 'App\\Services\\BestSellersBooks\\DTO',
         'uses' => 
        array (
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'Illuminate\\Contracts\\Support\\Arrayable',
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'listData',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'create',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'App\\Services\\BestSellersBooks\\DTO\\BestSellersList',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'listData',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'toArray',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the instance as an array.
     *
     * @return array{
     *     id: mixed,
     *     name: mixed,
     *     encoding: mixed
     * }
     */',
             'namespace' => 'App\\Services\\BestSellersBooks\\DTO',
             'uses' => 
            array (
              'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/BestSellersBooks/DTO/Book.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Services\\BestSellersBooks\\DTO\\Book',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * @implements Arrayable<string, mixed>
 */',
         'namespace' => 'App\\Services\\BestSellersBooks\\DTO',
         'uses' => 
        array (
          'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'Illuminate\\Contracts\\Support\\Arrayable',
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'bookData',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'create',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'App\\Services\\BestSellersBooks\\DTO\\Book',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'bookData',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'toArray',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the instance as an array.
     *
     * @return array{
     *     title: mixed,
     *     author: mixed,
     *     publisher: mixed,
     *     description: mixed,
     *     rank: mixed,
     *     weeks_on_list: mixed,
     *     isbns: array<mixed>
     * }
     */',
             'namespace' => 'App\\Services\\BestSellersBooks\\DTO',
             'uses' => 
            array (
              'arrayable' => 'Illuminate\\Contracts\\Support\\Arrayable',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/BestSellersBooks/Enums/BookList.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedEnumNode::__set_state(array(
       'name' => 'App\\Services\\BestSellersBooks\\Enums\\BookList',
       'scalarType' => 'string',
       'phpDoc' => NULL,
       'implements' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'CombinedPrintAndEbookFiction',
           'value' => '\'combined-print-and-e-book-fiction\'',
           'phpDoc' => NULL,
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'CombinedPrintAndEbookNonfiction',
           'value' => '\'combined-print-and-e-book-nonfiction\'',
           'phpDoc' => NULL,
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'HardcoverFiction',
           'value' => '\'hardcover-fiction\'',
           'phpDoc' => NULL,
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'HardcoverNonfiction',
           'value' => '\'hardcover-nonfiction\'',
           'phpDoc' => NULL,
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'PaperbackTradeFiction',
           'value' => '\'trade-fiction-paperback\'',
           'phpDoc' => NULL,
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'PaperbackNonfiction',
           'value' => '\'paperback-nonfiction\'',
           'phpDoc' => NULL,
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'AdviceHowToAndMisc',
           'value' => '\'advice-how-to-and-miscellaneous\'',
           'phpDoc' => NULL,
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'ChildrensMiddleGradeHardcover',
           'value' => '\'childrens-middle-grade-hardcover\'',
           'phpDoc' => NULL,
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'ChildrensPictureBooks',
           'value' => '\'picture-books\'',
           'phpDoc' => NULL,
        )),
        9 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'ChildrensAndYoungAdultSeries',
           'value' => '\'series-books\'',
           'phpDoc' => NULL,
        )),
        10 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'YoungAdultHardcover',
           'value' => '\'young-adult-hardcover\'',
           'phpDoc' => NULL,
        )),
        11 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'AudioFiction',
           'value' => '\'audio-fiction\'',
           'phpDoc' => NULL,
        )),
        12 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'AudioNonfiction',
           'value' => '\'audio-nonfiction\'',
           'phpDoc' => NULL,
        )),
        13 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'Business',
           'value' => '\'business-books\'',
           'phpDoc' => NULL,
        )),
        14 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'GraphicBooksAndManga',
           'value' => '\'graphic-books-and-manga\'',
           'phpDoc' => NULL,
        )),
        15 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'MassMarket',
           'value' => '\'mass-market-monthly\'',
           'phpDoc' => NULL,
        )),
        16 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'MiddleGradePaperback',
           'value' => '\'middle-grade-paperback-monthly\'',
           'phpDoc' => NULL,
        )),
        17 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'YoungAdultPaperback',
           'value' => '\'young-adult-paperback-monthly\'',
           'phpDoc' => NULL,
        )),
        18 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'tryFromMixed',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => '?self',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'instance',
               'type' => 'mixed',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/BestSellersBooks/RequestDefinitions/AbstractRequestDefinition.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Services\\BestSellersBooks\\RequestDefinitions\\AbstractRequestDefinition',
       'phpDoc' => NULL,
       'abstract' => true,
       'final' => false,
       'extends' => 'App\\Services\\RequestDefinitions\\RequestDefinition',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'method',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'queryParams',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rules',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'externalService',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?App\\Services\\Enums\\ExternalService',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/BestSellersBooks/RequestDefinitions/GetBooksByListAndDate.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Services\\BestSellersBooks\\RequestDefinitions\\GetBooksByListAndDate',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Services\\BestSellersBooks\\RequestDefinitions\\AbstractRequestDefinition',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'listName',
               'type' => 'App\\Services\\BestSellersBooks\\Enums\\BookList',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'date',
               'type' => 'Illuminate\\Support\\Carbon',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'url',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/BestSellersBooks/RequestDefinitions/GetBooksByListName.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Services\\BestSellersBooks\\RequestDefinitions\\GetBooksByListName',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Services\\BestSellersBooks\\RequestDefinitions\\AbstractRequestDefinition',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'listName',
               'type' => 'App\\Services\\BestSellersBooks\\Enums\\BookList',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'url',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/BestSellersBooks/RequestDefinitions/GetListsOverview.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Services\\BestSellersBooks\\RequestDefinitions\\GetListsOverview',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Services\\BestSellersBooks\\RequestDefinitions\\AbstractRequestDefinition',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'publishedDate',
               'type' => '?Illuminate\\Support\\Carbon',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'url',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'queryParams',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/Enums/ExternalService.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedEnumNode::__set_state(array(
       'name' => 'App\\Services\\Enums\\ExternalService',
       'scalarType' => 'string',
       'phpDoc' => NULL,
       'implements' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'NewYorkTimesBestSellersBooks',
           'value' => '\'nyt_best_sellers_books\'',
           'phpDoc' => NULL,
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/RequestDefinitions/Exceptions/DuplicateRequestException.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Services\\RequestDefinitions\\Exceptions\\DuplicateRequestException',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Services\\RequestDefinitions\\Exceptions\\Exception',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'definition',
               'type' => 'App\\Services\\RequestDefinitions\\GenericRequestDefinition',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'message',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/RequestDefinitions/Exceptions/Exception.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Services\\RequestDefinitions\\Exceptions\\Exception',
       'phpDoc' => NULL,
       'abstract' => true,
       'final' => false,
       'extends' => 'GuzzleHttp\\Exception\\TransferException',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'definition',
               'type' => 'App\\Services\\RequestDefinitions\\GenericRequestDefinition',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'message',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'code',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'previous',
               'type' => '?Throwable',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/RequestDefinitions/Exceptions/ServiceUnavailableException.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Services\\RequestDefinitions\\Exceptions\\ServiceUnavailableException',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'GuzzleHttp\\Exception\\BadResponseException',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'DEFAULT_MESSAGE',
               'value' => '\'The service did not respond within a reasonable time. Try again later.\'',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'message',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => '?Psr\\Http\\Message\\RequestInterface',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'response',
               'type' => '?Psr\\Http\\Message\\ResponseInterface',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'previous',
               'type' => '?Throwable',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            4 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'handlerContext',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/RequestDefinitions/Exceptions/ValidationException.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Services\\RequestDefinitions\\Exceptions\\ValidationException',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Validation\\ValidationException',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'definition',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The request definition which failed validation.
     * 
     * @var RequestDefinition
     */',
             'namespace' => 'App\\Services\\RequestDefinitions\\Exceptions',
             'uses' => 
            array (
              'genericrequestdefinition' => 'App\\Services\\RequestDefinitions\\GenericRequestDefinition',
              'requestdefinition' => 'App\\Services\\RequestDefinitions\\RequestDefinition',
              'validator' => 'Illuminate\\Contracts\\Validation\\Validator',
              'response' => 'Illuminate\\Http\\Response',
              'jsonresponse' => 'Illuminate\\Http\\JsonResponse',
              'request' => 'Illuminate\\Http\\Request',
              'arr' => 'Illuminate\\Support\\Arr',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'App\\Services\\RequestDefinitions\\RequestDefinition',
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Create a new validation exception instance.
     */',
             'namespace' => 'App\\Services\\RequestDefinitions\\Exceptions',
             'uses' => 
            array (
              'genericrequestdefinition' => 'App\\Services\\RequestDefinitions\\GenericRequestDefinition',
              'requestdefinition' => 'App\\Services\\RequestDefinitions\\RequestDefinition',
              'validator' => 'Illuminate\\Contracts\\Validation\\Validator',
              'response' => 'Illuminate\\Http\\Response',
              'jsonresponse' => 'Illuminate\\Http\\JsonResponse',
              'request' => 'Illuminate\\Http\\Request',
              'arr' => 'Illuminate\\Support\\Arr',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'definition',
               'type' => 'App\\Services\\RequestDefinitions\\GenericRequestDefinition',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'validator',
               'type' => 'Illuminate\\Contracts\\Validation\\Validator',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'render',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Render the exception into an HTTP response.
     */',
             'namespace' => 'App\\Services\\RequestDefinitions\\Exceptions',
             'uses' => 
            array (
              'genericrequestdefinition' => 'App\\Services\\RequestDefinitions\\GenericRequestDefinition',
              'requestdefinition' => 'App\\Services\\RequestDefinitions\\RequestDefinition',
              'validator' => 'Illuminate\\Contracts\\Validation\\Validator',
              'response' => 'Illuminate\\Http\\Response',
              'jsonresponse' => 'Illuminate\\Http\\JsonResponse',
              'request' => 'Illuminate\\Http\\Request',
              'arr' => 'Illuminate\\Support\\Arr',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/RequestDefinitions/External/AbstractHttpClient.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Services\\RequestDefinitions\\External\\AbstractHttpClient',
       'phpDoc' => NULL,
       'abstract' => true,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'lastRequest',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Last request to allow implementation of generic request definition
     */',
             'namespace' => 'App\\Services\\RequestDefinitions\\External',
             'uses' => 
            array (
              'requestdefinition' => 'App\\Services\\RequestDefinitions\\RequestDefinition',
              'request' => 'Illuminate\\Http\\Request',
              'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => '?Psr\\Http\\Message\\RequestInterface',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'definition',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Request definition for external guzzle client
     */',
             'namespace' => 'App\\Services\\RequestDefinitions\\External',
             'uses' => 
            array (
              'requestdefinition' => 'App\\Services\\RequestDefinitions\\RequestDefinition',
              'request' => 'Illuminate\\Http\\Request',
              'requestinterface' => 'Psr\\Http\\Message\\RequestInterface',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => '?App\\Services\\RequestDefinitions\\RequestDefinition',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getCurrentMethod',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getCurrentUrl',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getCurrentHeaders',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getCurrentPayload',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getCurrentQueryParams',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'setDefinition',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'definition',
               'type' => 'App\\Services\\RequestDefinitions\\RequestDefinition',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/RequestDefinitions/External/AbstractRequestDefinition.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Services\\RequestDefinitions\\External\\AbstractRequestDefinition',
       'phpDoc' => NULL,
       'abstract' => true,
       'final' => false,
       'extends' => 'App\\Services\\RequestDefinitions\\RequestDefinition',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'httpClient',
               'type' => 'App\\Services\\RequestDefinitions\\External\\AbstractHttpClient',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rules',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'method',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'url',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'headers',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'payload',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'queryParams',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/RequestDefinitions/GenericRequestDefinition.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Services\\RequestDefinitions\\GenericRequestDefinition',
       'phpDoc' => NULL,
       'abstract' => true,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'MAX_EXECUTION_WITHIN_DECAY_WINDOW',
               'value' => '2',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'DECAY_WINDOW_SECONDS',
               'value' => '15',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'options',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Options set on the request.
     *
     * These are usually applied from the code creating the definition instance,
     * as the definition itself has an options() method for defaults.
     */',
             'namespace' => 'App\\Services\\RequestDefinitions',
             'uses' => 
            array (
              'externalservice' => 'App\\Services\\Enums\\ExternalService',
              'validationexception' => 'App\\Services\\RequestDefinitions\\Exceptions\\ValidationException',
              'messagebag' => 'Illuminate\\Contracts\\Support\\MessageBag',
              'validation' => 'Illuminate\\Validation',
              'validator' => 'Illuminate\\Support\\Facades\\Validator',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'array',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'uniqueID',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Generate a unique identifier for the request.
     *
     * This is used to track and prevent identical/duplicate
     * calls from being processed in quick succession.
     */',
             'namespace' => 'App\\Services\\RequestDefinitions',
             'uses' => 
            array (
              'externalservice' => 'App\\Services\\Enums\\ExternalService',
              'validationexception' => 'App\\Services\\RequestDefinitions\\Exceptions\\ValidationException',
              'messagebag' => 'Illuminate\\Contracts\\Support\\MessageBag',
              'validation' => 'Illuminate\\Validation',
              'validator' => 'Illuminate\\Support\\Facades\\Validator',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => true,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'isCacheAware',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => true,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'cacheTtl',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => true,
           'final' => false,
           'static' => false,
           'returnType' => 'int',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'externalService',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => true,
           'final' => false,
           'static' => false,
           'returnType' => '?App\\Services\\Enums\\ExternalService',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'options',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => true,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rules',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Validation rules to apply to the request.
     *
     * @link https://laravel.com/docs/12.x/validation#available-validation-rules
     */',
             'namespace' => 'App\\Services\\RequestDefinitions',
             'uses' => 
            array (
              'externalservice' => 'App\\Services\\Enums\\ExternalService',
              'validationexception' => 'App\\Services\\RequestDefinitions\\Exceptions\\ValidationException',
              'messagebag' => 'Illuminate\\Contracts\\Support\\MessageBag',
              'validation' => 'Illuminate\\Validation',
              'validator' => 'Illuminate\\Support\\Facades\\Validator',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => true,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        9 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'send',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Send the built request defined by this class.
     */',
             'namespace' => 'App\\Services\\RequestDefinitions',
             'uses' => 
            array (
              'externalservice' => 'App\\Services\\Enums\\ExternalService',
              'validationexception' => 'App\\Services\\RequestDefinitions\\Exceptions\\ValidationException',
              'messagebag' => 'Illuminate\\Contracts\\Support\\MessageBag',
              'validation' => 'Illuminate\\Validation',
              'validator' => 'Illuminate\\Support\\Facades\\Validator',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => true,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        10 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'headers',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Headers to apply to the request.
     */',
             'namespace' => 'App\\Services\\RequestDefinitions',
             'uses' => 
            array (
              'externalservice' => 'App\\Services\\Enums\\ExternalService',
              'validationexception' => 'App\\Services\\RequestDefinitions\\Exceptions\\ValidationException',
              'messagebag' => 'Illuminate\\Contracts\\Support\\MessageBag',
              'validation' => 'Illuminate\\Validation',
              'validator' => 'Illuminate\\Support\\Facades\\Validator',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => true,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        11 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__invoke',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * When invoking a concrete instance of this class, build and
     * send a PendingRequest based on the request definition.
     */',
             'namespace' => 'App\\Services\\RequestDefinitions',
             'uses' => 
            array (
              'externalservice' => 'App\\Services\\Enums\\ExternalService',
              'validationexception' => 'App\\Services\\RequestDefinitions\\Exceptions\\ValidationException',
              'messagebag' => 'Illuminate\\Contracts\\Support\\MessageBag',
              'validation' => 'Illuminate\\Validation',
              'validator' => 'Illuminate\\Support\\Facades\\Validator',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        12 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'validate',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'static',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        13 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'payload',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * JSON data to set within the request body.
     *
     * @link https://docs.guzzlephp.org/en/stable/request-options.html#json
     */',
             'namespace' => 'App\\Services\\RequestDefinitions',
             'uses' => 
            array (
              'externalservice' => 'App\\Services\\Enums\\ExternalService',
              'validationexception' => 'App\\Services\\RequestDefinitions\\Exceptions\\ValidationException',
              'messagebag' => 'Illuminate\\Contracts\\Support\\MessageBag',
              'validation' => 'Illuminate\\Validation',
              'validator' => 'Illuminate\\Support\\Facades\\Validator',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        14 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'validator',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Validation\\Validator',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        15 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'errors',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Contracts\\Support\\MessageBag',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        16 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'validationMessages',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        17 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'validationAttributes',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        18 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'validationData',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Collect all information needed to pass validation
     * for this definition.
     */',
             'namespace' => 'App\\Services\\RequestDefinitions',
             'uses' => 
            array (
              'externalservice' => 'App\\Services\\Enums\\ExternalService',
              'validationexception' => 'App\\Services\\RequestDefinitions\\Exceptions\\ValidationException',
              'messagebag' => 'Illuminate\\Contracts\\Support\\MessageBag',
              'validation' => 'Illuminate\\Validation',
              'validator' => 'Illuminate\\Support\\Facades\\Validator',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        19 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'isValid',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Has the form_params/json/query data passed all validation rules?
     */',
             'namespace' => 'App\\Services\\RequestDefinitions',
             'uses' => 
            array (
              'externalservice' => 'App\\Services\\Enums\\ExternalService',
              'validationexception' => 'App\\Services\\RequestDefinitions\\Exceptions\\ValidationException',
              'messagebag' => 'Illuminate\\Contracts\\Support\\MessageBag',
              'validation' => 'Illuminate\\Validation',
              'validator' => 'Illuminate\\Support\\Facades\\Validator',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        20 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'isInvalid',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        21 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'addOptions',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Add one or more Guzzle options.
     */',
             'namespace' => 'App\\Services\\RequestDefinitions',
             'uses' => 
            array (
              'externalservice' => 'App\\Services\\Enums\\ExternalService',
              'validationexception' => 'App\\Services\\RequestDefinitions\\Exceptions\\ValidationException',
              'messagebag' => 'Illuminate\\Contracts\\Support\\MessageBag',
              'validation' => 'Illuminate\\Validation',
              'validator' => 'Illuminate\\Support\\Facades\\Validator',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'static',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'options',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        22 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'allOptions',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Gather all options for the request.
     */',
             'namespace' => 'App\\Services\\RequestDefinitions',
             'uses' => 
            array (
              'externalservice' => 'App\\Services\\Enums\\ExternalService',
              'validationexception' => 'App\\Services\\RequestDefinitions\\Exceptions\\ValidationException',
              'messagebag' => 'Illuminate\\Contracts\\Support\\MessageBag',
              'validation' => 'Illuminate\\Validation',
              'validator' => 'Illuminate\\Support\\Facades\\Validator',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        23 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'isExternal',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Is the request definition hitting a 3rd party API?
     */',
             'namespace' => 'App\\Services\\RequestDefinitions',
             'uses' => 
            array (
              'externalservice' => 'App\\Services\\Enums\\ExternalService',
              'validationexception' => 'App\\Services\\RequestDefinitions\\Exceptions\\ValidationException',
              'messagebag' => 'Illuminate\\Contracts\\Support\\MessageBag',
              'validation' => 'Illuminate\\Validation',
              'validator' => 'Illuminate\\Support\\Facades\\Validator',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        24 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'description',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Description of the request definition. By default, this is the FQN
     * for the class on the bottom of the concrete class.
     */',
             'namespace' => 'App\\Services\\RequestDefinitions',
             'uses' => 
            array (
              'externalservice' => 'App\\Services\\Enums\\ExternalService',
              'validationexception' => 'App\\Services\\RequestDefinitions\\Exceptions\\ValidationException',
              'messagebag' => 'Illuminate\\Contracts\\Support\\MessageBag',
              'validation' => 'Illuminate\\Validation',
              'validator' => 'Illuminate\\Support\\Facades\\Validator',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        25 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'maxExecutionsWithinDecayWindow',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * How many times can the EXACT SAME request be issued
     * to an external serice within the decay window?
     *
     * @see decayWindowSeconds())
     */',
             'namespace' => 'App\\Services\\RequestDefinitions',
             'uses' => 
            array (
              'externalservice' => 'App\\Services\\Enums\\ExternalService',
              'validationexception' => 'App\\Services\\RequestDefinitions\\Exceptions\\ValidationException',
              'messagebag' => 'Illuminate\\Contracts\\Support\\MessageBag',
              'validation' => 'Illuminate\\Validation',
              'validator' => 'Illuminate\\Support\\Facades\\Validator',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'int',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        26 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'decayWindowSeconds',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
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
             'namespace' => 'App\\Services\\RequestDefinitions',
             'uses' => 
            array (
              'externalservice' => 'App\\Services\\Enums\\ExternalService',
              'validationexception' => 'App\\Services\\RequestDefinitions\\Exceptions\\ValidationException',
              'messagebag' => 'Illuminate\\Contracts\\Support\\MessageBag',
              'validation' => 'Illuminate\\Validation',
              'validator' => 'Illuminate\\Support\\Facades\\Validator',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'int',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/RequestDefinitions/Guards/DuplicateRequestGuard.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Services\\RequestDefinitions\\Guards\\DuplicateRequestGuard',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'App\\Services\\RequestDefinitions\\Guards\\Guard',
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'guard',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'definition',
               'type' => 'App\\Services\\RequestDefinitions\\GenericRequestDefinition',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/RequestDefinitions/Guards/Guard.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedInterfaceNode::__set_state(array(
       'name' => 'App\\Services\\RequestDefinitions\\Guards\\Guard',
       'phpDoc' => NULL,
       'extends' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'guard',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'definition',
               'type' => 'App\\Services\\RequestDefinitions\\GenericRequestDefinition',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
    )),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/RequestDefinitions/Middleware/AbstractMiddleware.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Services\\RequestDefinitions\\Middleware\\AbstractMiddleware',
       'phpDoc' => NULL,
       'abstract' => true,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'definition',
               'type' => 'App\\Services\\RequestDefinitions\\GenericRequestDefinition',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__invoke',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => true,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'handler',
               'type' => 'callable',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/RequestDefinitions/Middleware/CacheAware.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Services\\RequestDefinitions\\Middleware\\CacheAware',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Services\\RequestDefinitions\\Middleware\\AbstractMiddleware',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__invoke',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'handler',
               'type' => 'callable',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/RequestDefinitions/Middleware/CheckServiceAvailability.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Services\\RequestDefinitions\\Middleware\\CheckServiceAvailability',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Services\\RequestDefinitions\\Middleware\\AbstractMiddleware',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__invoke',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'handler',
               'type' => 'callable',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'throwIfNeeded',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'response',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'statusCodes',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/RequestDefinitions/Middleware/GuardAgainstDuplicates.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Services\\RequestDefinitions\\Middleware\\GuardAgainstDuplicates',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'App\\Services\\RequestDefinitions\\Middleware\\AbstractMiddleware',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__invoke',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Closure',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'handler',
               'type' => 'callable',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/RequestDefinitions/RequestDefinition.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Services\\RequestDefinitions\\RequestDefinition',
       'phpDoc' => NULL,
       'abstract' => true,
       'final' => false,
       'extends' => 'App\\Services\\RequestDefinitions\\GenericRequestDefinition',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_GET',
               'value' => '\'GET\'',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_POST',
               'value' => '\'POST\'',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_PUT',
               'value' => '\'PUT\'',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_PATCH',
               'value' => '\'PATCH\'',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_DELETE',
               'value' => '\'DELETE\'',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_HEAD',
               'value' => '\'HEAD\'',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'HTTP_OPTIONS',
               'value' => '\'OPTIONS\'',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => NULL,
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'queryParams',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Query string params to apply to the request.
     *
     * @link https://docs.guzzlephp.org/en/stable/request-options.html#query
     */',
             'namespace' => 'App\\Services\\RequestDefinitions',
             'uses' => 
            array (
              'guardagainstduplicates' => 'App\\Services\\RequestDefinitions\\Middleware\\GuardAgainstDuplicates',
              'alwaysconsideredunique' => 'App\\Services\\RequestDefinitions\\Traits\\AlwaysConsideredUnique',
              'badmethodcallexception' => 'BadMethodCallException',
              'closure' => 'Closure',
              'promiseinterface' => 'GuzzleHttp\\Promise\\PromiseInterface',
              'pendingrequest' => 'Illuminate\\Http\\Client\\PendingRequest',
              'response' => 'Illuminate\\Http\\Client\\Response',
              'http' => 'Illuminate\\Support\\Facades\\Http',
              'reflectionclass' => 'ReflectionClass',
              'runtimeexception' => 'RuntimeException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'headers',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Headers to apply to the request.
     *
     * @link https://docs.guzzlephp.org/en/stable/request-options.html#headers
     */',
             'namespace' => 'App\\Services\\RequestDefinitions',
             'uses' => 
            array (
              'guardagainstduplicates' => 'App\\Services\\RequestDefinitions\\Middleware\\GuardAgainstDuplicates',
              'alwaysconsideredunique' => 'App\\Services\\RequestDefinitions\\Traits\\AlwaysConsideredUnique',
              'badmethodcallexception' => 'BadMethodCallException',
              'closure' => 'Closure',
              'promiseinterface' => 'GuzzleHttp\\Promise\\PromiseInterface',
              'pendingrequest' => 'Illuminate\\Http\\Client\\PendingRequest',
              'response' => 'Illuminate\\Http\\Client\\Response',
              'http' => 'Illuminate\\Support\\Facades\\Http',
              'reflectionclass' => 'ReflectionClass',
              'runtimeexception' => 'RuntimeException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        9 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'validationData',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Combine the form params, json data, and query string params
     * into a single array to be used to validate the request.
     */',
             'namespace' => 'App\\Services\\RequestDefinitions',
             'uses' => 
            array (
              'guardagainstduplicates' => 'App\\Services\\RequestDefinitions\\Middleware\\GuardAgainstDuplicates',
              'alwaysconsideredunique' => 'App\\Services\\RequestDefinitions\\Traits\\AlwaysConsideredUnique',
              'badmethodcallexception' => 'BadMethodCallException',
              'closure' => 'Closure',
              'promiseinterface' => 'GuzzleHttp\\Promise\\PromiseInterface',
              'pendingrequest' => 'Illuminate\\Http\\Client\\PendingRequest',
              'response' => 'Illuminate\\Http\\Client\\Response',
              'http' => 'Illuminate\\Support\\Facades\\Http',
              'reflectionclass' => 'ReflectionClass',
              'runtimeexception' => 'RuntimeException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        10 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'cacheAware',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @throws \\BadMethodCallException when the request definition is not allowed to be cache-aware.
     */',
             'namespace' => 'App\\Services\\RequestDefinitions',
             'uses' => 
            array (
              'guardagainstduplicates' => 'App\\Services\\RequestDefinitions\\Middleware\\GuardAgainstDuplicates',
              'alwaysconsideredunique' => 'App\\Services\\RequestDefinitions\\Traits\\AlwaysConsideredUnique',
              'badmethodcallexception' => 'BadMethodCallException',
              'closure' => 'Closure',
              'promiseinterface' => 'GuzzleHttp\\Promise\\PromiseInterface',
              'pendingrequest' => 'Illuminate\\Http\\Client\\PendingRequest',
              'response' => 'Illuminate\\Http\\Client\\Response',
              'http' => 'Illuminate\\Support\\Facades\\Http',
              'reflectionclass' => 'ReflectionClass',
              'runtimeexception' => 'RuntimeException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => true,
           'static' => false,
           'returnType' => 'static',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        11 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'isCacheAware',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        12 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'cacheTtl',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'int',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        13 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'buildRequest',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Attempt to build a PendingRequest instance based on this class definition.
     *
     * Guzzle request options can be passed to merge with those set on the definition.
     *
     * This method will throw a ValidationException if the data for the
     * request does not pass all validation rules set on the definition.
     */',
             'namespace' => 'App\\Services\\RequestDefinitions',
             'uses' => 
            array (
              'guardagainstduplicates' => 'App\\Services\\RequestDefinitions\\Middleware\\GuardAgainstDuplicates',
              'alwaysconsideredunique' => 'App\\Services\\RequestDefinitions\\Traits\\AlwaysConsideredUnique',
              'badmethodcallexception' => 'BadMethodCallException',
              'closure' => 'Closure',
              'promiseinterface' => 'GuzzleHttp\\Promise\\PromiseInterface',
              'pendingrequest' => 'Illuminate\\Http\\Client\\PendingRequest',
              'response' => 'Illuminate\\Http\\Client\\Response',
              'http' => 'Illuminate\\Support\\Facades\\Http',
              'reflectionclass' => 'ReflectionClass',
              'runtimeexception' => 'RuntimeException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\Client\\PendingRequest',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'options',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        14 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'middleware',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        15 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'saveToFile',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Use Guzzle\'s \'sink\' abilty to dump the response content into storage.
     */',
             'namespace' => 'App\\Services\\RequestDefinitions',
             'uses' => 
            array (
              'guardagainstduplicates' => 'App\\Services\\RequestDefinitions\\Middleware\\GuardAgainstDuplicates',
              'alwaysconsideredunique' => 'App\\Services\\RequestDefinitions\\Traits\\AlwaysConsideredUnique',
              'badmethodcallexception' => 'BadMethodCallException',
              'closure' => 'Closure',
              'promiseinterface' => 'GuzzleHttp\\Promise\\PromiseInterface',
              'pendingrequest' => 'Illuminate\\Http\\Client\\PendingRequest',
              'response' => 'Illuminate\\Http\\Client\\Response',
              'http' => 'Illuminate\\Support\\Facades\\Http',
              'reflectionclass' => 'ReflectionClass',
              'runtimeexception' => 'RuntimeException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'filePath',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        16 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'options',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Manually customize options for the request.
     *
     * @link https://docs.guzzlephp.org/en/stable/request-options.html
     */',
             'namespace' => 'App\\Services\\RequestDefinitions',
             'uses' => 
            array (
              'guardagainstduplicates' => 'App\\Services\\RequestDefinitions\\Middleware\\GuardAgainstDuplicates',
              'alwaysconsideredunique' => 'App\\Services\\RequestDefinitions\\Traits\\AlwaysConsideredUnique',
              'badmethodcallexception' => 'BadMethodCallException',
              'closure' => 'Closure',
              'promiseinterface' => 'GuzzleHttp\\Promise\\PromiseInterface',
              'pendingrequest' => 'Illuminate\\Http\\Client\\PendingRequest',
              'response' => 'Illuminate\\Http\\Client\\Response',
              'http' => 'Illuminate\\Support\\Facades\\Http',
              'reflectionclass' => 'ReflectionClass',
              'runtimeexception' => 'RuntimeException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        17 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'timeout',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * After how many seconds should Guzzle kill the request?
     */',
             'namespace' => 'App\\Services\\RequestDefinitions',
             'uses' => 
            array (
              'guardagainstduplicates' => 'App\\Services\\RequestDefinitions\\Middleware\\GuardAgainstDuplicates',
              'alwaysconsideredunique' => 'App\\Services\\RequestDefinitions\\Traits\\AlwaysConsideredUnique',
              'badmethodcallexception' => 'BadMethodCallException',
              'closure' => 'Closure',
              'promiseinterface' => 'GuzzleHttp\\Promise\\PromiseInterface',
              'pendingrequest' => 'Illuminate\\Http\\Client\\PendingRequest',
              'response' => 'Illuminate\\Http\\Client\\Response',
              'http' => 'Illuminate\\Support\\Facades\\Http',
              'reflectionclass' => 'ReflectionClass',
              'runtimeexception' => 'RuntimeException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'int',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        18 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'send',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Convert the definition into a PendingRequest instance.
     */',
             'namespace' => 'App\\Services\\RequestDefinitions',
             'uses' => 
            array (
              'guardagainstduplicates' => 'App\\Services\\RequestDefinitions\\Middleware\\GuardAgainstDuplicates',
              'alwaysconsideredunique' => 'App\\Services\\RequestDefinitions\\Traits\\AlwaysConsideredUnique',
              'badmethodcallexception' => 'BadMethodCallException',
              'closure' => 'Closure',
              'promiseinterface' => 'GuzzleHttp\\Promise\\PromiseInterface',
              'pendingrequest' => 'Illuminate\\Http\\Client\\PendingRequest',
              'response' => 'Illuminate\\Http\\Client\\Response',
              'http' => 'Illuminate\\Support\\Facades\\Http',
              'reflectionclass' => 'ReflectionClass',
              'runtimeexception' => 'RuntimeException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\Client\\Response|GuzzleHttp\\Promise\\PromiseInterface',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        19 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'setRequestResolver',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Set a function that returns a base PendingRequest instance the
     * definition should use as the starting point when building new requests.
     */',
             'namespace' => 'App\\Services\\RequestDefinitions',
             'uses' => 
            array (
              'guardagainstduplicates' => 'App\\Services\\RequestDefinitions\\Middleware\\GuardAgainstDuplicates',
              'alwaysconsideredunique' => 'App\\Services\\RequestDefinitions\\Traits\\AlwaysConsideredUnique',
              'badmethodcallexception' => 'BadMethodCallException',
              'closure' => 'Closure',
              'promiseinterface' => 'GuzzleHttp\\Promise\\PromiseInterface',
              'pendingrequest' => 'Illuminate\\Http\\Client\\PendingRequest',
              'response' => 'Illuminate\\Http\\Client\\Response',
              'http' => 'Illuminate\\Support\\Facades\\Http',
              'reflectionclass' => 'ReflectionClass',
              'runtimeexception' => 'RuntimeException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'resolver',
               'type' => 'Closure',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        20 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'asMultipart',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Set the request resolver to one that expects/interprets
     * the body as multipart/form-data.
     *
     * Guzzle will properly set the Content-Type header with
     * correct boundary for the request.
     */',
             'namespace' => 'App\\Services\\RequestDefinitions',
             'uses' => 
            array (
              'guardagainstduplicates' => 'App\\Services\\RequestDefinitions\\Middleware\\GuardAgainstDuplicates',
              'alwaysconsideredunique' => 'App\\Services\\RequestDefinitions\\Traits\\AlwaysConsideredUnique',
              'badmethodcallexception' => 'BadMethodCallException',
              'closure' => 'Closure',
              'promiseinterface' => 'GuzzleHttp\\Promise\\PromiseInterface',
              'pendingrequest' => 'Illuminate\\Http\\Client\\PendingRequest',
              'response' => 'Illuminate\\Http\\Client\\Response',
              'http' => 'Illuminate\\Support\\Facades\\Http',
              'reflectionclass' => 'ReflectionClass',
              'runtimeexception' => 'RuntimeException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        21 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'asForm',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Set the request resolver to one that expects/interprets
     * thebody as application/x-www-form-urlencoded form data.
     *
     * Guzzle will properly set the Content-Type header for the request.
     */',
             'namespace' => 'App\\Services\\RequestDefinitions',
             'uses' => 
            array (
              'guardagainstduplicates' => 'App\\Services\\RequestDefinitions\\Middleware\\GuardAgainstDuplicates',
              'alwaysconsideredunique' => 'App\\Services\\RequestDefinitions\\Traits\\AlwaysConsideredUnique',
              'badmethodcallexception' => 'BadMethodCallException',
              'closure' => 'Closure',
              'promiseinterface' => 'GuzzleHttp\\Promise\\PromiseInterface',
              'pendingrequest' => 'Illuminate\\Http\\Client\\PendingRequest',
              'response' => 'Illuminate\\Http\\Client\\Response',
              'http' => 'Illuminate\\Support\\Facades\\Http',
              'reflectionclass' => 'ReflectionClass',
              'runtimeexception' => 'RuntimeException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        22 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getRequestResolver',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Fetch the closure that defines the origin of the PendingRequest
     * the definition should use to build up a request
     */',
             'namespace' => 'App\\Services\\RequestDefinitions',
             'uses' => 
            array (
              'guardagainstduplicates' => 'App\\Services\\RequestDefinitions\\Middleware\\GuardAgainstDuplicates',
              'alwaysconsideredunique' => 'App\\Services\\RequestDefinitions\\Traits\\AlwaysConsideredUnique',
              'badmethodcallexception' => 'BadMethodCallException',
              'closure' => 'Closure',
              'promiseinterface' => 'GuzzleHttp\\Promise\\PromiseInterface',
              'pendingrequest' => 'Illuminate\\Http\\Client\\PendingRequest',
              'response' => 'Illuminate\\Http\\Client\\Response',
              'http' => 'Illuminate\\Support\\Facades\\Http',
              'reflectionclass' => 'ReflectionClass',
              'runtimeexception' => 'RuntimeException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Closure',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        23 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'createNewRequest',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Create a new PendingRequest instance by calling through
     * to the current set request resolver.
     */',
             'namespace' => 'App\\Services\\RequestDefinitions',
             'uses' => 
            array (
              'guardagainstduplicates' => 'App\\Services\\RequestDefinitions\\Middleware\\GuardAgainstDuplicates',
              'alwaysconsideredunique' => 'App\\Services\\RequestDefinitions\\Traits\\AlwaysConsideredUnique',
              'badmethodcallexception' => 'BadMethodCallException',
              'closure' => 'Closure',
              'promiseinterface' => 'GuzzleHttp\\Promise\\PromiseInterface',
              'pendingrequest' => 'Illuminate\\Http\\Client\\PendingRequest',
              'response' => 'Illuminate\\Http\\Client\\Response',
              'http' => 'Illuminate\\Support\\Facades\\Http',
              'reflectionclass' => 'ReflectionClass',
              'runtimeexception' => 'RuntimeException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\Client\\PendingRequest',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        24 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'uniqueID',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Generate a unique identifier for the request.
     *
     * This is used to track and prevent identical/duplicate
     * calls from being processed in quick succession.
     */',
             'namespace' => 'App\\Services\\RequestDefinitions',
             'uses' => 
            array (
              'guardagainstduplicates' => 'App\\Services\\RequestDefinitions\\Middleware\\GuardAgainstDuplicates',
              'alwaysconsideredunique' => 'App\\Services\\RequestDefinitions\\Traits\\AlwaysConsideredUnique',
              'badmethodcallexception' => 'BadMethodCallException',
              'closure' => 'Closure',
              'promiseinterface' => 'GuzzleHttp\\Promise\\PromiseInterface',
              'pendingrequest' => 'Illuminate\\Http\\Client\\PendingRequest',
              'response' => 'Illuminate\\Http\\Client\\Response',
              'http' => 'Illuminate\\Support\\Facades\\Http',
              'reflectionclass' => 'ReflectionClass',
              'runtimeexception' => 'RuntimeException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        25 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'method',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The HTTP method to use when sending the request.
     */',
             'namespace' => 'App\\Services\\RequestDefinitions',
             'uses' => 
            array (
              'guardagainstduplicates' => 'App\\Services\\RequestDefinitions\\Middleware\\GuardAgainstDuplicates',
              'alwaysconsideredunique' => 'App\\Services\\RequestDefinitions\\Traits\\AlwaysConsideredUnique',
              'badmethodcallexception' => 'BadMethodCallException',
              'closure' => 'Closure',
              'promiseinterface' => 'GuzzleHttp\\Promise\\PromiseInterface',
              'pendingrequest' => 'Illuminate\\Http\\Client\\PendingRequest',
              'response' => 'Illuminate\\Http\\Client\\Response',
              'http' => 'Illuminate\\Support\\Facades\\Http',
              'reflectionclass' => 'ReflectionClass',
              'runtimeexception' => 'RuntimeException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => true,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        26 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'url',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The URL (or endpoint if the base URL has been previously set
     * on the request) to send the request to.
     */',
             'namespace' => 'App\\Services\\RequestDefinitions',
             'uses' => 
            array (
              'guardagainstduplicates' => 'App\\Services\\RequestDefinitions\\Middleware\\GuardAgainstDuplicates',
              'alwaysconsideredunique' => 'App\\Services\\RequestDefinitions\\Traits\\AlwaysConsideredUnique',
              'badmethodcallexception' => 'BadMethodCallException',
              'closure' => 'Closure',
              'promiseinterface' => 'GuzzleHttp\\Promise\\PromiseInterface',
              'pendingrequest' => 'Illuminate\\Http\\Client\\PendingRequest',
              'response' => 'Illuminate\\Http\\Client\\Response',
              'http' => 'Illuminate\\Support\\Facades\\Http',
              'reflectionclass' => 'ReflectionClass',
              'runtimeexception' => 'RuntimeException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => true,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Services/RequestDefinitions/Traits/AlwaysConsideredUnique.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedTraitNode::__set_state(array(
       'name' => 'App\\Services\\RequestDefinitions\\Traits\\AlwaysConsideredUnique',
       'phpDoc' => NULL,
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'uniqueId',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Generate a unique identifier for the request.
     * 
     * This is used to track and prevent identical/duplicate
     * calls from being processed in quick succession.
     */',
             'namespace' => 'App\\Services\\RequestDefinitions\\Traits',
             'uses' => 
            array (
              'str' => 'Illuminate\\Support\\Str',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Users/Enums/Permission.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedEnumNode::__set_state(array(
       'name' => 'App\\Users\\Enums\\Permission',
       'scalarType' => 'string',
       'phpDoc' => NULL,
       'implements' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'ViewAllLists',
           'value' => '\'view_all_lists\'',
           'phpDoc' => NULL,
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'ViewListNames',
           'value' => '\'view_list_names\'',
           'phpDoc' => NULL,
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'ViewAllBooks',
           'value' => '\'view_all_books\'',
           'phpDoc' => NULL,
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'ViewBooksByDate',
           'value' => '\'view_books_by_date\'',
           'phpDoc' => NULL,
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'ViewBooksByList',
           'value' => '\'view_books_by_list\'',
           'phpDoc' => NULL,
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'ViewBooksByListAndDate',
           'value' => '\'view_books_by_list_and_date\'',
           'phpDoc' => NULL,
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'CreateUsers',
           'value' => '\'create_users\'',
           'phpDoc' => NULL,
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'UpdateUsers',
           'value' => '\'update_users\'',
           'phpDoc' => NULL,
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'DeleteUsers',
           'value' => '\'delete_users\'',
           'phpDoc' => NULL,
        )),
        9 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'values',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** @return Collection<int|string> */',
             'namespace' => 'App\\Users\\Enums',
             'uses' => 
            array (
              'collection' => 'Illuminate\\Support\\Collection',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'Illuminate\\Support\\Collection',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/app/Users/Enums/Role.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedEnumNode::__set_state(array(
       'name' => 'App\\Users\\Enums\\Role',
       'scalarType' => 'string',
       'phpDoc' => NULL,
       'implements' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'Admin',
           'value' => '\'admin\'',
           'phpDoc' => NULL,
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state(array(
           'name' => 'Viewer',
           'value' => '\'viewer\'',
           'phpDoc' => NULL,
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'permissions',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** @return list<Permission> */',
             'namespace' => 'App\\Users\\Enums',
             'uses' => 
            array (
              'permission' => 'App\\Users\\Enums\\Permission',
              'collection' => 'Illuminate\\Support\\Collection',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'values',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/** @return Collection<int|string> */',
             'namespace' => 'App\\Users\\Enums',
             'uses' => 
            array (
              'permission' => 'App\\Users\\Enums\\Permission',
              'collection' => 'Illuminate\\Support\\Collection',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'Illuminate\\Support\\Collection',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/database/factories/UserFactory.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Database\\Factories\\UserFactory',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * @extends \\Illuminate\\Database\\Eloquent\\Factories\\Factory<\\App\\Models\\User>
 */',
         'namespace' => 'Database\\Factories',
         'uses' => 
        array (
          'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
          'hash' => 'Illuminate\\Support\\Facades\\Hash',
          'str' => 'Illuminate\\Support\\Str',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'password',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The current password being used by the factory.
     */',
             'namespace' => 'Database\\Factories',
             'uses' => 
            array (
              'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
              'str' => 'Illuminate\\Support\\Str',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => '?string',
           'public' => false,
           'private' => false,
           'static' => true,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'definition',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Define the model\'s default state.
     *
     * @return array<string, mixed>
     */',
             'namespace' => 'Database\\Factories',
             'uses' => 
            array (
              'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
              'str' => 'Illuminate\\Support\\Str',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'unverified',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Indicate that the model\'s email address should be unverified.
     */',
             'namespace' => 'Database\\Factories',
             'uses' => 
            array (
              'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
              'str' => 'Illuminate\\Support\\Str',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'static',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/database/seeders/DatabaseSeeder.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Database\\Seeders\\DatabaseSeeder',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Seeder',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Database\\Console\\Seeds\\WithoutModelEvents',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'run',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Seed the application\'s database.
     */',
             'namespace' => 'Database\\Seeders',
             'uses' => 
            array (
              'withoutmodelevents' => 'Illuminate\\Database\\Console\\Seeds\\WithoutModelEvents',
              'seeder' => 'Illuminate\\Database\\Seeder',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/database/seeders/RolesAndPermissionsSeeder.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Database\\Seeders\\RolesAndPermissionsSeeder',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Seeder',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'run',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/tests/Feature/Http/Controllers/BestSellersBooksControllerTest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Tests\\Feature\\Http\\Controllers\\BestSellersBooksControllerTest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Tests\\TestCase',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'testBooksSuccess',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'testListNamesSuccess',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'testListNamesAuthorization',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'testListsOverviewSuccess',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'testListsOverviewAuthorization',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'testBooksByListNameSuccess',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'testBooksByListNameAuthorization',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'testBooksByListAndDateSuccess',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'testBooksByListAndDateAuthorization',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        9 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'testBooksByListNameValidation',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        10 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'testBooksByListNameAndDateValidation',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/tests/Support/helpers.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'payload',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
     * Load a JSON mock payload from storage/mocks.
     *
     * @param  string  $path  Path relative to storage/mocks
     */',
         'namespace' => NULL,
         'uses' => 
        array (
          'assert' => 'PHPUnit\\Framework\\Assert',
        ),
         'constUses' => 
        array (
        ),
      )),
       'byRef' => false,
       'returnType' => 'array',
       'parameters' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'path',
           'type' => 'string',
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/tests/TestCase.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Tests\\TestCase',
       'phpDoc' => NULL,
       'abstract' => true,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Testing\\TestCase',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Foundation\\Testing\\RefreshDatabase',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'seed',
          ),
           'phpDoc' => NULL,
           'type' => 'bool',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'seeder',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'setUp',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/kevindavis/Sites/Laravel/ny-times-best-sellers/tests/Unit/Services/BestSellersBooks/BestSellerBookServiceTest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Tests\\Unit\\Services\\BestSellersBooks\\BestSellerBookServiceTest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Tests\\TestCase',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'testGetListOverviewSuccess',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'testGetListOverviewWithDate',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'testGetListOverviewUnauthorized',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'testGetListOverviewNotFound',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'testGetBooksByListNameSuccess',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'testGetBooksByListNameUnauthorized',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'testGetBooksByListNameNotFound',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'testGetBooksByListNameThrowsWithInvalidList',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'testGetBooksByListAndDateSuccess',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        9 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'testGetBooksByListAndDateUnauthorized',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        10 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'testGetBooksByListAndDateNotFound',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        11 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'testGetBooksByListAndDateThrowsWithInvalidList',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        12 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'testGetBooksByListAndDateThrowsWithInvalidDate',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
); },
];
