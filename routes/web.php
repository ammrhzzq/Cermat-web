<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\CertController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->name('dashboard');

Route::get('/client', [ClientController::class, 'index'])->name('clients.index');
Route::get('/client/create', [ClientController::class, 'create'])->name('clients.create');
Route::post('/client', [ClientController::class, 'store'])->name('clients.store');
Route::get('/client/{client}/edit', [ClientController::class, 'edit'])->name('clients.edit');
Route::put('/client/{client}/update', [ClientController::class, 'update'])->name('clients.update');
Route::delete('/client/{client}/destroy', [ClientController::class, 'destroy'])->name('clients.destroy');

Route::get('/certificate', [CertController::class, 'index'])->name('certificates.index');
Route::get('/certificate/create', [CertController::class, 'create'])->name('certificates.create');
Route::post('/certificate', [CertController::class, 'store'])->name('certificates.store');
Route::get('/certificate/{cert}/edit', [CertController::class, 'edit'])->name('certificates.edit');
Route::put('/certificate/{cert}/update', [CertController::class, 'update'])->name('certificates.update');
Route::delete('/certificate/{cert}/destroy', [CertController::class, 'destroy'])->name('certificates.destroy');