<?php

use App\Http\Controllers\ApplicationController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ApplicationController::class, 'showHomePage']);

Route::get('/resume', [ApplicationController::class, 'showResumePage']);

Route::get('/projects', [ApplicationController::class, 'showProjectsPage']);

Route::get('/contact', [ApplicationController::class, 'showContactPage']);
