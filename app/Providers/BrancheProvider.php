<?php

namespace App\Providers;

use App\Interface\BrancheInterface;
use App\Repository\BrancheRepository;
use Illuminate\Support\ServiceProvider;

class BrancheProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(BrancheInterface::class,BrancheRepository::class);

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
