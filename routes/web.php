<?php

use App\Http\Controllers\InstitutController;
use Illuminate\Support\Facades\Auth;
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



Route::get('/register', [App\Http\Controllers\SiteController::class, 'register'])->middleware('auth', 'verified');
Auth::routes(['verify' => true]);
Route::get('/verify', [App\Http\Controllers\SiteController::class, 'verify']);
Route::get('/login', [App\Http\Controllers\LoginController::class, 'index'])->name('login');
Route::post('/login/auth', [App\Http\Controllers\LoginController::class, 'auth']);
Route::get('/inputprofil', [App\Http\Controllers\ProfilController::class, 'profil']);
Route::post('/inputprofil/store', [App\Http\Controllers\ProfilController::class, 'store']);
Route::get('/logout', [App\Http\Controllers\LoginController::class, 'logout']);
Route::get('/input/edit/{id}', [App\Http\Controllers\ProfilController::class, 'edit']);
Route::post('/input/update/{id}', [App\Http\Controllers\ProfilController::class, 'update']);
Route::get('/input-kerjasama', [App\Http\Controllers\kerjasamaController::class, 'input']);
Route::post('/input-kerjasama/simpan', [App\Http\Controllers\kerjasamaController::class, 'simpan']);

route::middleware('auth:institusi')->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard']);
});
