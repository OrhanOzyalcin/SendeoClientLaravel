<?php

namespace SendeoClientLaravel\Providers;

use App\Services\SendeoClient;
use Illuminate\Support\ServiceProvider;

class SendeoServiceProvider extends ServiceProvider
{
    /**
     * Servisleri kaydet.
     *
     * @return void
     */
    public function register()
    {
        // SendeoClient'i singleton olarak kaydet
        $this->app->singleton('sendeo-client', function ($app) {
            return new SendeoClient();
        });
    }

    /**
     * Servislerin yüklenmesi için işlemler.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
