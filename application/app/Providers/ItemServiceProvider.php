<?php

namespace App\Providers;

use App\Library\Services\ItemService;
use App\Library\Services\PageService;
use Illuminate\Support\ServiceProvider;

class ItemServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Library\Services\ItemService', function($app) {
                return new ItemService('itemsss');
            }
        );

        $this->app->bind(
            'App\Library\Services\PageService', function($app) {
                return new PageService('pagessss');
            }
        );
    }
}
