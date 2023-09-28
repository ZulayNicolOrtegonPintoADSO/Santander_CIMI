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

// RUTAS DE LAS VISTAS
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Rutas para municipios
Route::get('/adminMunicipios', [App\Http\Controllers\HomeController::class, 'vista_municipio'])->name('adminMunicipios');

Route::get('/vistaAgg', [App\Http\Controllers\HomeController::class, 'vistaAggMun'])->name('vistaAgg');
Route::post('/aggMunicipio', [App\Http\Controllers\CrudController::class, 'aggMunicipio'])->name('aggMunicipio');

Route::get('/vistaEdit/{codigo}', [App\Http\Controllers\HomeController::class, 'vistaEditMun'])->name('vistaEdit');
Route::post('/editMunicipio/{codigo}', [App\Http\Controllers\CrudController::class, 'editMunicipio'])->name('editMunicipio');

Route::get('/eliminar/{codigo}', [App\Http\Controllers\HomeController::class, 'eliminarMun'])->name('eliminar');





