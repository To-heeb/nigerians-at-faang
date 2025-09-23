<?php

namespace App\Providers;

use App\Rules\Recaptcha;
use Filament\Facades\Filament;
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
        Filament::registerRenderHook(
            'panels::body.start',
            fn(): string => <<<HTML
            <script>
                localStorage.setItem("isOpen", false);
            </script>
        HTML
        );

        Paginator::defaultView('livewire.custom-pagination');
        // \DB::listen(function ($query) {
        //     logger($query->sql);
        //     logger($query->bindings);
        // });
    }
}
