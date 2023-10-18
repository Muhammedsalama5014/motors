<?php

namespace App\Providers;

use App\Interface\AdminSettingInterface;
use App\Repository\AdminSettingRepository;
use Illuminate\Support\ServiceProvider;

class AdminSettingProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(AdminSettingInterface::class,AdminSettingRepository::class);

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
