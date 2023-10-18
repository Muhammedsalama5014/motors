<?php

namespace App\Providers;

use App\Interface\CarInterface;
use App\Repository\CarRepository;
use Illuminate\Support\ServiceProvider;

class CarProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(CarInterface::class,CarRepository::class);

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
