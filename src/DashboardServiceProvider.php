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

        $this->loadRoutesFrom(__DIR__ . '/../routes/routes.php');
    }
}
