<?php

namespace App\Providers;

use App\Discipline;
use App\Manufacturer;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('bikes.form', function ($view) {
        	$view->with([
        		'manufacturers' => Manufacturer::orderBy('name')->get(['id', 'name']),
        		'disciplines'   => Discipline::orderBy('name')->get(['id', 'name']),
        	]);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
