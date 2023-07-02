<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
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
        View::share('ortat', Orteat::all()); 
        View::share('gutachter', Gutachter::all()); 
    }
}
