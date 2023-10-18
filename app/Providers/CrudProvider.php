<?php

namespace App\Providers;

use App\Interface\CrudInterface;

use App\Repository\CatRepository;
use Illuminate\Support\ServiceProvider;

class CrudProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(CrudInterface::class,CatRepository::class);

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
