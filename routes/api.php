<?php

use Illuminate\Support\Facades\Route;

// LOGIN
Route::post('/login', [App\Http\Controllers\Api\Auth\LoginController::class, 'index']);

// MIDDLEWARE AUTH
Route::group(['middleware' => 'auth:api'], function() {

    //logout
    Route::post('/logout', [App\Http\Controllers\Api\Auth\LoginController::class, 'logout']);

});

// DASHBOARD ADMIN
Route::prefix('admin')->group(function () {
    //group route with middleware "auth:api"
    Route::group(['middleware' => 'auth:api'], function () {
        //dashboard
        Route::get('/dashboard', App\Http\Controllers\Api\Admin\DashboardController::class);
    });
});
