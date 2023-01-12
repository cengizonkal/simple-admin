<?php
namespace Conkal\SimpleAdmin;
class SimpleAdminServiceProvider extends \Illuminate\Support\ServiceProvider
{


    public function boot()
    {

        $this->loadViewsFrom(__DIR__ . '/views', 'simple-admin');
        $this->publishes([
            __DIR__ . '/views' => resource_path('views/vendor/simple-admin'),
        ], 'simple-admin');

    }

    public function register()
    {

    }
}