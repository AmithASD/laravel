<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/api/v1/customers',[CustomerController::class,'customers'])->name('customers.customer');

Route::get('/api/v1/new-customer',[CustomerController::class,'new']) -> name('customers.new');

Route::post('/api/v1/add-customer',[CustomerController::class,'add']) -> name('customers.add');

Route::get('/api/v1/customers/{customer}/modify',[CustomerController::class,'modify']) -> name('customers.modify');

Route::get('/api/v1/customers/{customer}/update',[CustomerController::class,'update']) -> name('customers.update');

Route::get('/api/v1/customers/{customer}/delete',[CustomerController::class,'delete']) -> name('customers.delete');

