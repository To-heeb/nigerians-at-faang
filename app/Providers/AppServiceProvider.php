<?php

namespace App\Providers;

use App\Rules\Recaptcha;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

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
        Paginator::defaultView('livewire.custom-pagination');
        // \DB::listen(function ($query) {
        //     logger($query->sql);
        //     logger($query->bindings);
        // });
    }
}
