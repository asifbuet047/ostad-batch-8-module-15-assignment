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

    public function showResumePage(Response $response)
    {
        return view('resume');
    }

    public function showProjectsPage(Response $response)
    {
        return view('projects');
    }

     public function showContactPage(Response $response)
    {
        return view('contact');
    }
}
