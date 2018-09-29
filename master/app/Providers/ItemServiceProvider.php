<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Library\Services\ItemService;

class ItemServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        echo 'ive booted';
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Library\Services\ItemService',
            function($app) {
                return new ItemService('tester');
            }
        );
    }
}
