<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ApplicationController extends Controller
{
    public function showHomePage(Response $response)
    {
        return view('home');
    }
}
