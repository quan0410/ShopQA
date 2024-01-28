<?php

namespace App\Providers;

use App\Models\OrderDetail;
use App\Observers\OrderObserver;
use App\Repositories\Product\ProductRepository;
use App\Repositories\Product\ProductRepositoryinterface;
use App\Service\Product\ProductServices;
use App\Service\Product\ProductServicesInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
//        //product
//        $this->app->singleton(
//            ProductRepositoryinterface::class,
//            ProductRepository::class
//        );
//
//        $this->app->singleton(
//            ProductServicesInterface::class,
//            ProductServices::class
//        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
