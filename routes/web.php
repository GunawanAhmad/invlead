<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/leaderboard', [App\Http\Controllers\LeaderboardController::class, 'index'])->name('leaderboard');

Route::get('/', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'dashboard']);

Route::post('/tambah_peserta', [App\Http\Controllers\PesertaController::class, 'tambah_peserta'])->name('tambah peserta');

Route::get('/tambah_peserta', [App\Http\Controllers\UserController::class, 'create'])->name('tambah peserta view');

Route::get('/edit_peserta/{id}', [App\Http\Controllers\PesertaController::class, 'edit_peserta_view'])->name('edit peserta view');

Route::post('/edit_peserta/{id}', [App\Http\Controllers\PesertaController::class, 'edit_peserta'])->name('edit peserta');

Route::post('/penilaian/kinerja/{id}', [App\Http\Controllers\PesertaController::class, 'penilaian_kinerja_peserta'])->name('penilaian peserta');

Route::post('/penilaian/kedisiplinan/{id}', [App\Http\Controllers\PesertaController::class, 'penilaian_kedisiplinan_peserta'])->name('penilaian peserta');

Route::post('/hapus_peserta/{id}', [App\Http\Controllers\PesertaController::class, 'hapus_peserta'])->name('hapus peserta');

Route::get('/absensi', [App\Http\Controllers\PesertaController::class, 'absensi_view'])->name('absensi view');

Route::post('/absensi', [App\Http\Controllers\PesertaController::class, 'absensi_peserta'])->name('absensi peserta');


Route::get('/profil', [App\Http\Controllers\UserController::class, 'my_profile'])->name('my profile');

Route::get('/profil/edit', [App\Http\Controllers\UserController::class, 'edit_my_profile'])->name('edit my profile');

Route::post('/profile/update', [App\Http\Controllers\UserController::class, 'update_my_profile'])->name('update my profile');

Route::get('/user/list', [App\Http\Controllers\UserController::class, 'list_and_manage'])->name('user tm');



Route::get('/user/list/{id}', [App\Http\Controllers\UserController::class, 'view'])->name('view user');

Route::post('/user/list/store', [App\Http\Controllers\UserController::class, 'store'])->name('store user');

Route::post('/user/list/update/{id}', [App\Http\Controllers\UserController::class, 'update'])->name('update user');
Route::get('/user/list/edit/{id}', [App\Http\Controllers\UserController::class, 'edit'])->name('edit user');

Route::get('/user/list/delete/{id}', [App\Http\Controllers\UserController::class, 'delete'])->name('delete user');

Route::get('/peserta', [App\Http\Controllers\PesertaController::class, 'get_peserta'])->name('daftar peserta');

Route::get('/penilaian', [App\Http\Controllers\PesertaController::class, 'penilaian_view'])->defaults('tab', 'kinerja');

Route::post('/transfer/store', [App\Http\Controllers\UserController::class, 'store_transfer'])->name('store transfer');



Route::get('/pembayaran/{id}', [App\Http\Controllers\UserController::class, 'view_payment'])->name('view payment');

Route::post('/pembayaran/confirm/sender', [App\Http\Controllers\UserController::class, 'payment_confirmation_sender'])->name('confirm payment sender');

Route::get('/pembayaran/confirm/{id}', [App\Http\Controllers\UserController::class, 'payment_confirmation'])->name('confirm payment');

Route::post('/pembayaran/confirm/store', [App\Http\Controllers\UserController::class, 'payment_confirmation_store'])->name('store confirm payment');