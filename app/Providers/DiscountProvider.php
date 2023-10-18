<?php

namespace App\Providers;

use App\Interface\DiscountInterface;
use App\Repository\DiscountRepository;
use Illuminate\Support\ServiceProvider;

class DiscountProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(DiscountInterface::class,DiscountRepository::class);

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
