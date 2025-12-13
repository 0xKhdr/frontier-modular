<?php

declare(strict_types=1);

use Frontier\Modular\Providers\ServiceProvider;

describe('ServiceProvider', function (): void {
    it('can be instantiated', function (): void {
        $provider = new ServiceProvider($this->app);

        expect($provider)->toBeInstanceOf(ServiceProvider::class);
    });
});
