<?php

namespace App\Providers;

use App\Interface\AdminCrudInterface;
use App\Repository\AdminCrudRepository;
use Illuminate\Support\ServiceProvider;

class AdminCrudProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(AdminCrudInterface::class,AdminCrudRepository::class);

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
