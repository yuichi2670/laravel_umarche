<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class SampleServiceProvider extends ServiceProvider
{
    public function register()
    {
        app()->bind('serviceProviderTest', function() {
            return 'サービスプロバイダのテスト';
        });
    }

    public function boot()
    {
        //
    }
}
