<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/menu', [App\Http\Controllers\MenuController::class, 'index'])->name('home');
Route::get('/pengguna', [App\Http\Controllers\PenggunaController::class, 'index'])->name('home');

Route::get('/kategori', [App\Http\Controllers\KategoriController::class, 'index'])->name('home');
Route::get('/kategori/create', [App\Http\Controllers\KategoriController::class, 'create'])->name('home');
Route::post('/kategori', [App\Http\Controllers\KategoriController::class, 'store'])->name('home');
Route::get('/kategori/{id}/edit', [App\Http\Controllers\KategoriController::class, 'edit'])->name('home');
Route::patch('/kategori/{id}/', [App\Http\Controllers\KategoriController::class, 'update'])->name('home');
Route::delete('/kategori/{id}/', [App\Http\Controllers\KategoriController::class, 'destroy'])->name('home');

Route::get('/produk', [App\Http\Controllers\ProdukController::class, 'index'])->name('home');
Route::get('/produk/create', [App\Http\Controllers\ProdukController::class, 'create'])->name('home');
Route::post('/produk', [App\Http\Controllers\ProdukController::class, 'store'])->name('home');
Route::get('/produk/{id}/edit', [App\Http\Controllers\ProdukController::class, 'edit'])->name('home');
Route::patch('/produk/{id}/', [App\Http\Controllers\ProdukController::class, 'update'])->name('home');
Route::delete('/produk/{id}/', [App\Http\Controllers\ProdukController::class, 'destroy'])->name('home');

Route::get('/pesanan', [App\Http\Controllers\PesananController::class, 'index'])->name('home');