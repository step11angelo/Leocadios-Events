<?php

use App\Http\Controllers\Api\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ConnectController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\QuestionsController;
use App\Http\Controllers\PackagesController;

Route::post('connection', [ConnectController::class, 'store' ]);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout']);

Route::get('/test', function () {
    return "Hello";
});


Route::apiResource('/customer', CustomerController::class)->only('index', 'show');

Route::apiResource('/questions', QuestionsController::class)->only('index', 'show');

Route::apiResource('/package', PackagesController::class)->only('index', 'show');

// Route::post('store', "AuthApi@store");
