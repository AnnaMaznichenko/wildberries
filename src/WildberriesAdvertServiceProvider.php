<?php

namespace Filippovk997\Wildberries;

use Illuminate\Support\ServiceProvider;

class WildberriesAdvertServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('wildberries_advert', function () {
            return new WildberriesAdvert();
        });
    }
}
