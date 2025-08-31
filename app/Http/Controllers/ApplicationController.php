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
            'phone' => 'required|digits:11',
            'message' => 'required|max:255',
            'file' => 'required|file|max:2048'
        ]);

        if ($request->hasFile('file')) {
            Session::flash('success', true);

            Session::flash('data', $request->except('file'));

            $file = $request->file('file');

            $filename = time() . '__' . $file->getClientOriginalName();
            $file->storeAs('uploads', $filename);

            return redirect()->route('contact.form')->withCookie(cookie('file_uploaded', true, 10));
        } else {
            return back()->with('error', 'Please upload a file');
        }
    }
}
