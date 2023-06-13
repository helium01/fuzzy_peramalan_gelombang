<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GelombangController;

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

Route::get('/upload/file', function () {
    return view('user.gelombang.upload');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [GelombangController::class, 'index'])->name('user.gelombang.index');
Route::get('/user/gelombang/create', [GelombangController::class, 'create'])->name('user.gelombang.create');
Route::post('/user/gelombang', [GelombangController::class, 'store'])->name('user.gelombang.store');
Route::get('/user/gelombang/{gelombang}/edit', [GelombangController::class, 'edit'])->name('user.gelombang.edit');
Route::put('/user/gelombang/{gelombang}', [GelombangController::class, 'update'])->name('user.gelombang.update');
Route::get('/user/gelombang/{gelombang}/hapus', [GelombangController::class, 'destroy'])->name('user.gelombang.destroy');
Route::get('/coba', [GelombangController::class, 'coba']);
Route::post('/file/upload', [GelombangController::class, 'uploadfile']);
Route::get('/search', [GelombangController::class, 'cari']);