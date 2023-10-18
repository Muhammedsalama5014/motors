<?php

namespace App\Providers;

use App\Interface\ModelCarInterface;
use App\Repository\ModelCarRepository;
use Illuminate\Support\ServiceProvider;

class ModelCarProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ModelCarInterface::class,ModelCarRepository::class);
        
      
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
