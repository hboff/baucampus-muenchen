<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Ort;
use App\Models\Orteat;
use App\Models\Gutachter;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        View::share('ort', Ort::all());
        View::share('ortat', Orteat::all());
        View::share('status', Ort::all());
        View::share('status', Orteat::all());
        View::share('gutachter', Gutachter::all());
        
    }
}
