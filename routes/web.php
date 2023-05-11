<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BuyController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UsersController;
use LionRoute\Route;

/**
 * ------------------------------------------------------------------------------
 * Web Routes
 * ------------------------------------------------------------------------------
 * Here is where you can register web routes for your application
 * ------------------------------------------------------------------------------
 **/

Route::get('/', fn() => info("Welcome to index"));

Route::prefix("api",function() {
    Route::prefix("auth",function() {
        Route::post("authenticate",[LoginController::class,"auth"]);
    });

    Route::prefix("buy",function() {
        Route::get("read-buys/{users_identification_number}",[BuyController::class,"read"]);
        Route::post('create', [BuyController::class, 'create']);

    });

    Route::post("create-users",[UsersController::class,"create"]);
     Route::get("read-products",[ProductsController::class,"read"]);



});