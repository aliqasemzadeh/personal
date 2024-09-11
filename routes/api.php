<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::any('/telegram/api_login', [\App\Http\Controllers\TelegramController::class, 'api_login'])->name('telegram.api_login');
