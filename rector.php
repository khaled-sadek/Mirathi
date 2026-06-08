<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use RectorLaravel\Set\LaravelSetProvider;

return RectorConfig::configure()
    ->withPaths([
        __DIR__.'/config',
        __DIR__.'/app',
        __DIR__.'/tests',
    ])
    ->withSetProviders(LaravelSetProvider::class)
    ->withComposerBased(laravel: true)
    ->withPhpSets(php85: true)
    ->withAttributesSets()
    ->withImportNames(removeUnusedImports: true)
    ->withTreatClassesAsFinal()
    ->withFluentCallNewLine();
