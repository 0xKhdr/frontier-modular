<?php

declare(strict_types=1);

use Frontier\Modules\Providers\ServiceProvider;

describe('ServiceProvider', function (): void {
    it('can be instantiated', function (): void {
        $provider = new ServiceProvider($this->app);

        expect($provider)->toBeInstanceOf(ServiceProvider::class);
    });
});
