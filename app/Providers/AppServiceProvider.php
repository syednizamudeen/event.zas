<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        $this->publishes([
            __DIR__ . '/../../vendor/components/font-awesome/css' => public_path('vendor/components/font-awesome/css'),
            __DIR__ . '/../../vendor/components/font-awesome/webfonts' => public_path('vendor/components/font-awesome/webfonts'),
            __DIR__ . '/../../vendor/jquery' => public_path('vendor/jquery'),
            __DIR__ . '/../../vendor/twitter/bootstrap/dist' => public_path('vendor/bootstrap/dist'),
            __DIR__ . '/../../vendor/grimmlink/jquery-slimscroll' => public_path('vendor/jquery-slimscroll')
        ], 'public');
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
