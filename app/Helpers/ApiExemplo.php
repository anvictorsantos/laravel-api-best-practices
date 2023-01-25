<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Http;

class ApiExemplo
{
    private $api;

    public function __construct()
    {
        $this->api = Http::withHeaders([
            'Authorization' => 'Bearer ',
        ]);    
    }

    public function getApi()
    {
        return $this->api;
    }
}
