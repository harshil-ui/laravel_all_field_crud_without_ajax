<?php

use App\Http\Controllers\ContractCategoryController;
use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::controller(CustomerController::class)->group(function () {
    Route::get('/', 'create')->name('home');
    Route::post('/store', 'store')->name('insertCustomer');
});

Route::controller(ContractCategoryController::class)->group(function () {
    Route::get('/create-contract', 'create')->name('create-contract');
    Route::post('/insert-contract', 'store')->name('insert-contract');
});
