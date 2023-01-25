<?php

namespace App\Providers;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\ServiceProvider;

class ApiExampleProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('api-example', function(){
            return Http::withOptions([
                'verify' => false,
                'base_uri' => 'https://jsonplaceholder.typicode.com/'
            ])->withHeaders([
                'Authorization' => 'Bearer ',
            ]);
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
