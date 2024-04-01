<?php

namespace App\Providers;

use App\Models\Famille;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        view()->composer('layouts.header', function ($view) {
            $familles = Famille::with('sousFamilles')->get();
            $view->with('familles', $familles);
        });
    }
}
