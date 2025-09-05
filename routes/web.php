<?php

use App\Http\Controllers\ApplicationController;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

Route::get('/', [ApplicationController::class, 'showHomePage']);

Route::get('/resume', [ApplicationController::class, 'showResumePage']);

Route::get('/projects', [ApplicationController::class, 'showProjectsPage']);

Route::get('/contact', [ApplicationController::class, 'showContactPage'])->name('contact.form');

Route::post('/contact', [ApplicationController::class, 'postContactMessage'])->name('contact.success');


//Live test route
Route::get('/user', function (Request $request) {
    $name = $request->query('name');
    $email = $request->query('email');

    Session::put('last_action', ['name' => $name, 'email' => $email]);

    Log::info('user data stored', ['name' => $name, 'email' => $email]);

    return response()->json(['status' => 'success', 'message' => 'User data stored in session and logged.', 'code' => 201]);
});
