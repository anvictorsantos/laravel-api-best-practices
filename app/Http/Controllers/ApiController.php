<?php

namespace App\Http\Controllers;

use App\Facades\ApiExample;
use App\Helpers\ApiExemplo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function index()
    {
        return ApiExample::get('posts');
    }
}
