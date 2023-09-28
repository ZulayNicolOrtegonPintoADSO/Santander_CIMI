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


// Rutas para manzanas
Route::get('/adminManzanas', [App\Http\Controllers\HomeController::class, 'vista_manzana'])->name('adminManzanas');

Route::get('/vistaAggManz', [App\Http\Controllers\HomeController::class, 'vistaAggManz'])->name('vistaAggManz');
Route::post('/aggManzana', [App\Http\Controllers\CrudController::class, 'aggManzana'])->name('aggManzana');

Route::get('/vistaEditManz/{codigo}', [App\Http\Controllers\HomeController::class, 'vistaEditManz'])->name('vistaEditManz');
Route::post('/editManzana/{codigo}', [App\Http\Controllers\CrudController::class, 'editManzana'])->name('editManzana');

Route::get('/eliminarManz/{codigo}', [App\Http\Controllers\HomeController::class, 'eliminarManz'])->name('eliminarManz');

Route::get('/vistaMapa', [App\Http\Controllers\HomeController::class, 'vistaMapa'])->name('vistaMapa');


// Rutas para servicios
Route::get('/adminServicios', [App\Http\Controllers\HomeController::class, 'vista_servicio'])->name('adminServicios');

Route::get('/vistaAggServ', [App\Http\Controllers\HomeController::class, 'vistaAggServ'])->name('vistaAggServ');
Route::post('/aggServicio', [App\Http\Controllers\CrudController::class, 'aggServicio'])->name('aggServicio');

Route::get('/vistaEditServ/{codigo}', [App\Http\Controllers\HomeController::class, 'vistaEditServ'])->name('vistaEditServ');
Route::post('/editServicio/{codigo}', [App\Http\Controllers\CrudController::class, 'editServicio'])->name('editServicio');

Route::get('/eliminarServ/{codigo}', [App\Http\Controllers\HomeController::class, 'eliminarServ'])->name('eliminarServ');
