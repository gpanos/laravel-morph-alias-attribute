<?php

namespace Gpanos\MorphAliasAttribute\Tests;

use Gpanos\MorphAliasAttribute\MorphAliasAttributeServiceProvider;
use Gpanos\MorphAliasAttribute\MorphAliasRegistrar;
use Orchestra\Testbench\TestCase as Orchestra;

abstract class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        (new MorphAliasRegistrar())
            ->useBasePath(__DIR__)
            ->useRootNamespace('Gpanos\MorphAliasAttribute\Tests\\')
            ->registerDirectory(__DIR__ . '/Stubs');
    }

    protected function getPackageProviders($app)
    {
        return [MorphAliasAttributeServiceProvider::class];
    }
}
