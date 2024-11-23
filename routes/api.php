<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('add-Customer', [CustomerController::class,'addCustomer']);
Route::get('Customers', [CustomerController::class,'Customers']);
