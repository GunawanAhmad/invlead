<?php

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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'dashboard']);

// users
Route::get('/profil', [App\Http\Controllers\UserController::class, 'my_profile'])->name('my profile');
Route::get('/profil/edit', [App\Http\Controllers\UserController::class, 'edit_my_profile'])->name('edit my profile');
Route::post('/profile/update', [App\Http\Controllers\UserController::class, 'update_my_profile'])->name('update my profile');
Route::get('/user/list', [App\Http\Controllers\UserController::class, 'list_and_manage'])->name('user tm')->middleware('permission:view users list');
Route::get('/user/list/create', [App\Http\Controllers\UserController::class, 'create'])->name('create user')->middleware('permission:create users');
Route::get('/user/list/{id}', [App\Http\Controllers\UserController::class, 'view'])->name('view user')->middleware('permission:view users list');
Route::post('/user/list/store', [App\Http\Controllers\UserController::class, 'store'])->name('store user')->middleware('permission:create users');
Route::post('/user/list/update/{id}', [App\Http\Controllers\UserController::class, 'update'])->name('update user')->middleware('permission:update users');
Route::get('/user/list/edit/{id}', [App\Http\Controllers\UserController::class, 'edit'])->name('edit user')->middleware('permission:update users');
Route::get('/user/list/delete/{id}', [App\Http\Controllers\UserController::class, 'delete'])->name('delete user')->middleware('permission:delete users');

Route::get('/rekening', [App\Http\Controllers\UserController::class, 'view_my_bank_account'])->name('view my bank account');

Route::get('/transfer', [App\Http\Controllers\UserController::class, 'transfer'])->name('transfer');
Route::post('/transfer/store', [App\Http\Controllers\UserController::class, 'store_transfer'])->name('store transfer');

Route::get('/pembayaran', [App\Http\Controllers\UserController::class, 'list_payment'])->name('list payment');
Route::get('/pembayaran/{id}', [App\Http\Controllers\UserController::class, 'view_payment'])->name('view payment');
Route::post('/pembayaran/confirm/sender', [App\Http\Controllers\UserController::class, 'payment_confirmation_sender'])->name('confirm payment sender');
Route::get('/pembayaran/confirm/{id}', [App\Http\Controllers\UserController::class, 'payment_confirmation'])->name('confirm payment');
Route::post('/pembayaran/confirm/store', [App\Http\Controllers\UserController::class, 'payment_confirmation_store'])->name('store confirm payment');
