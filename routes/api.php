<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

use App\Http\Controllers\api\conciertoController;
Route::get('/conciertos', [conciertoController::class, 'index'])->name('conciertos.index');
Route::post('/conciertos', [conciertoController::class, 'store'])->name('conciertos.store');
Route::get('/conciertos/{id}', [conciertoController::class, 'show'])->name('conciertos.show');
Route::put('/conciertos/{id}', [conciertoController::class, 'update'])->name('conciertos.update');
Route::delete('/conciertos/{id}', [conciertoController::class, 'destroy'])->name('conciertos.destroy');

use App\Http\Controllers\api\organizadorController;
Route::get('/organizadores', [organizadorController::class, 'index'])->name('organizadores.index');
Route::post('/organizadores', [organizadorController::class, 'store'])->name('organizadores.store');
Route::get('/organizadores/{id}/edit', [organizadorController::class, 'edit'])->name('organizadores.edit');
Route::get('/organizadores/{id}', [organizadorController::class, 'show'])->name('organizadores.show');
Route::put('/organizadores/{id}', [organizadorController::class, 'update'])->name('organizadores.update');
Route::delete('/organizadores/{id}', [organizadorController::class, 'destroy'])->name('organizadores.destroy');


use App\Http\Controllers\api\clienteController;
Route::get('/clientes', [clienteController::class, 'index'])->name('clientes.index');
Route::post('/clientes', [clienteController::class, 'store'])->name('clientes.store');
Route::get('/clientes/{id}/edit', [clienteController::class, 'edit'])->name('clientes.edit');
Route::get('/clientes/{id}', [clienteController::class, 'show'])->name('clientes.show');
Route::put('/clientes/{id}', [clienteController::class, 'update'])->name('clientes.update');
Route::delete('/clientes/{id}', [clienteController::class, 'destroy'])->name('clientes.destroy');

use App\Http\Controllers\api\locacionController;
Route::get('/locaciones', [locacionController::class, 'index'])->name('locaciones.index');
Route::post('/locaciones', [locacionController::class, 'store'])->name('locaciones.store');
Route::get('/locaciones/{id}/edit', [locacionController::class, 'edit'])->name('locaciones.edit');
Route::get('/locaciones/{id}', [locacionController::class, 'show'])->name('locaciones.show');
Route::put('/locaciones/{id}', [locacionController::class, 'update'])->name('locaciones.update');
Route::delete('/locaciones/{id}', [locacionController::class, 'destroy'])->name('locaciones.destroy');

use App\Http\Controllers\api\participacionController;
Route::get('/participaciones', [participacionController::class, 'index'])->name('participaciones.index');
Route::post('/participaciones', [participacionController::class, 'store'])->name('participaciones.store');
Route::get('/participaciones/{id}/edit', [participacionController::class, 'edit'])->name('participaciones.edit');
Route::get('/participaciones/{id}', [participacionController::class, 'show'])->name('participaciones.show');
Route::put('/participaciones/{id}', [participacionController::class, 'update'])->name('participaciones.update');
Route::delete('/participaciones/{id}', [participacionController::class, 'destroy'])->name('participaciones.destroy');
