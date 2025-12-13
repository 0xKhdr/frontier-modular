<?php

declare(strict_types=1);

namespace Frontier\Modular\Providers;

use Illuminate\Support\ServiceProvider as IlluminateServiceProvider;

/**
 * Frontier Modular package service provider.
 *
 * Provides integration with internachi/modular for modular Laravel applications.
 */
class ServiceProvider extends IlluminateServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                $this->getModularConfigPath() => config_path('app-modules.php'),
            ], 'frontier-modular-config');
        }
    }

    /**
     * Get the path to the internachi/modular config file.
     */
    protected function getModularConfigPath(): string
    {
        return base_path('vendor/internachi/modular/config.php');
    }
}
