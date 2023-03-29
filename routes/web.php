<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductsController;
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
Route::get('/', [CustomerController::class, 'index']);
Route::get('/register', [UserController::class, 'register']);
Route::post('/store', [UserController::class, 'store']);
Route::get('/login', [UserController::class, 'login']);
Route::post('/login/process', [UserController::class, 'process']);

Route::get('/', [CustomerController::class, 'index']);

Route::get('/logout', [UserController::class, 'logout']);
Route::get('/delete/{id}', [CustomerController::class, 'delete']);

Route::get('addCustomer', [CustomerController::class, 'addCustomer']);
Route::post('saveCustomer', [CustomerController::class, 'saveCustomer']);

Route::get('edit/{id}', [CustomerController::class, 'edit']);
Route::post('updateCustomer', [CustomerController::class, 'updateCustomer']);

Route::get('/products', [ProductsController::class, 'index']);
Route::get('/deleteProd/{prodId}', [ProductsController::class, 'delete']);

Route::get('addProducts', [ProductsController::class, 'addProducts']);
Route::post('saveProducts', [ProductsController::class, 'saveProducts']);

Route::get('editProd/{prodId}', [ProductsController::class, 'edit']);
Route::post('updateProducts', [ProductsController::class, 'updateProducts']);

?>