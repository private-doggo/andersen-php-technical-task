<?php

use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Route;

Route::resource('message', MessageController::class);
