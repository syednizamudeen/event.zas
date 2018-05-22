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
            __DIR__ . '/../../vendor/grimmlink/jquery-slimscroll' => public_path('vendor/jquery-slimscroll'),
            __DIR__ . '/../../vendor/select2/dist' => public_path('vendor/select2/dist'),
            __DIR__ . '/../../vendor/kartik-v/bootstrap-fileinput/css' => public_path('vendor/bootstrap-fileinput/css'),
            __DIR__ . '/../../vendor/kartik-v/bootstrap-fileinput/js' => public_path('vendor/bootstrap-fileinput/js'),
            __DIR__ . '/../../vendor/kartik-v/bootstrap-fileinput/img' => public_path('vendor/bootstrap-fileinput/img'),
            __DIR__ . '/../../vendor/kartik-v/bootstrap-fileinput/themes' => public_path('vendor/bootstrap-fileinput/themes')
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
