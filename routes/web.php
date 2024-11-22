<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Customers', [CustomerController::class,'Customers']);
Route::post('/add-customer', [CustomerController::class,'Customer']);