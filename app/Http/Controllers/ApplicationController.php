<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Session;

class ApplicationController extends Controller
{
    public function showHomePage()
    {
        return view('home');
    }

    public function showResumePage()
    {
        return view('resume');
    }

    public function showProjectsPage()
    {
        return view('projects');
    }

    public function showContactPage()
    {
        return view('contact');
    }


    public function postContactMessage(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:50',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required|max:255',
        ]);

        Session::flash('success', true);

        Session::flash('data', $request->all());

        return redirect()->route('contact.form');
    }
}
