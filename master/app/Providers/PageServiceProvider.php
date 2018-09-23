<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class PageServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('PageService', function()
        {
            return new \App\Services\PageService();
        });
    }
}
