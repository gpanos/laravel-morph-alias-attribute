<?php

namespace Gpanos\MorphAliasAttribute;

use Illuminate\Support\ServiceProvider;

class MorphAliasAttributeServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->registerPublishing();

        $this->registerMorphAliases();
    }

    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/morph-alias-attribute.php', 'morph-alias-attribute');
    }

    protected function registerPublishing(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/morph-alias-attribute.php' => $this->app->configPath('morph-alias-attribute.php'),
            ], 'morph-alias-attribute');
        }
    }

    protected function registerMorphAliases(): void
    {
        (new MorphAliasRegistrar())
            ->useRootNamespace(app()->getNamespace())
            ->registerDirectory(config('morph-alias-attribute.directory'));
    }
}
