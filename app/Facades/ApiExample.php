<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class ApiExample extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'api-example';
    }
}
