<?php

namespace App\Providers;

use App\Interface\BrandInterface;
use App\Repository\BrandRepository;
use Illuminate\Support\ServiceProvider;

class BrandProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(BrandInterface::class,BrandRepository::class);

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
