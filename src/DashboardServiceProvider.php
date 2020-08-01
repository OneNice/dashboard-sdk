<?php

namespace OneNice\Dashboard\Sdk;

use Illuminate\Foundation\Support\Providers\EventServiceProvider;
use Illuminate\Support\Facades\Route;
use OZiTAG\Tager\Backend\Admin\Observers\TokenObserver;

class DashboardServiceProvider extends EventServiceProvider
{

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();


        $this->publishes([
            __DIR__ . '/../config.php' => config_path('dashboard-sdk.php'),
        ]);

        $this->loadRoutesFrom(__DIR__ . '/../routes/routes.php');
    }
}
