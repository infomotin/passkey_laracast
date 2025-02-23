<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PasskeyContorller;

Route::get('/passkey/register', [PasskeyContorller::class, 'registerOptions'])->middleware('auth:sanctum');
