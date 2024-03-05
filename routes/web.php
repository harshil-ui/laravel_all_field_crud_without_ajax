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

Route::get('/', [CustomerController::class, 'create'])->name('home');

Route::post('/store', [CustomerController::class, 'store'])->name('insertCustomer');

Route::get('/create-contract', [ContractCategoryController::class, 'create'])->name('create-contract');

Route::post('/insert-contract', [ContractCategoryController::class, 'store'])->name('insert-contract');
