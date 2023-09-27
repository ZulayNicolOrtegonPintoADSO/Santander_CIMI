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
Route::get('/municipios', [App\Http\Controllers\HomeController::class, 'vista_municipio'])->name('municipios');
Route::get('/mujeres', [App\Http\Controllers\HomeController::class, 'vista_mujeres'])->name('mujeres');
Route::get('/servicios', [App\Http\Controllers\HomeController::class, 'vista_servicios'])->name('servicios');
Route::get('/establecimientos', [App\Http\Controllers\HomeController::class, 'vista_establecimientos'])->name('establecimientos');
Route::get('/agenda', [App\Http\Controllers\HomeController::class, 'vista_agenda'])->name('agenda');
Route::get('/manzana', [App\Http\Controllers\HomeController::class, 'vista_manzana'])->name('manzana');




