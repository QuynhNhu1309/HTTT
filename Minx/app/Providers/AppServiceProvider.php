<?php

namespace App\Providers;

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
        $this->publishes([
            __DIR__.'/../../node_modules/bootstrap' => public_path('packages/bootstrap'),
            __DIR__.'/../../node_modules/bootstrap-progressbar' => public_path('packages/bootstrap-progressbar'),
            __DIR__.'/../../node_modules/font-awesome' => public_path('packages/font-awesome'),
            __DIR__.'/../../node_modules/icheck' => public_path('packages/icheck'),
            __DIR__.'/../../node_modules/jquery' => public_path('packages/jquery'),
            __DIR__.'/../../node_modules/jqvmap' => public_path('packages/jqvmap'),
            __DIR__.'/../../node_modules/nprogress' => public_path('packages/nprogress'),
            __DIR__.'/../../node_modules/flot' => public_path('packages/flot'),
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
