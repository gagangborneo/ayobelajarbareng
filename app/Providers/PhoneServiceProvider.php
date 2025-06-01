<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class PhoneServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(\App\Contracts\NotificationService::class, \App\Services\WhatsappService::class);
        $this->app->bind(\App\Contracts\UserPhoneService::class, \App\Services\UserPhoneService::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
