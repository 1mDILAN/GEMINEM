<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

use App\Http\Controllers\ConciertoController;
Route::get('/conciertos/create', [ConciertoController::class, 'create'])->name('conciertos.create');
Route::delete('/conciertos/{concierto}/destroy', [ConciertoController::class, 'destroy'])->name('conciertos.destroy');
Route::get('/conciertos/{concierto}/edit', [ConciertoController::class, 'edit'])->name('conciertos.edit');
Route::get('/conciertos/index', [ConciertoController::class, 'index'])->name('conciertos.index');
Route::post('/conciertos/store', [ConciertoController::class, 'store'])->name('conciertos.store');
Route::put('/conciertos/{concierto}/update', [ConciertoController::class, 'update'])->name('conciertos.update');

use App\Http\Controllers\OrganizadorController;
Route::get('/organizadores/create', [OrganizadorController::class, 'create'])->name('organizadores.create');
Route::delete('/organizadores/{organizador}/destroy', [OrganizadorController::class, 'destroy'])->name('organizadores.destroy');
Route::get('/organizadores/{organizador}/edit', [OrganizadorController::class, 'edit'])->name('organizadores.edit');
Route::get('/organizadores/index', [OrganizadorController::class, 'index'])->name('organizadores.index');
Route::post('/organizadores/store', [OrganizadorController::class, 'store'])->name('organizadores.store');
Route::put('/organizadores/{organizador}/update', [OrganizadorController::class, 'update'])->name('organizadores.update');

use App\Http\Controllers\ParticipacionController;
Route::get('/participaciones/create', [ParticipacionController::class, 'create'])->name('participaciones.create');
Route::delete('/participaciones/{participacion}/destroy', [ParticipacionController::class, 'destroy'])->name('participaciones.destroy');
Route::get('/participaciones/{participacion}/edit', [ParticipacionController::class, 'edit'])->name('participaciones.edit');
Route::get('/participaciones/index', [ParticipacionController::class, 'index'])->name('participaciones.index');
Route::post('/participaciones/store', [ParticipacionController::class, 'store'])->name('participaciones.store');
Route::put('/participaciones/{participacion}/update', [ParticipacionController::class, 'update'])->name('participaciones.update');

use App\Http\Controllers\ClienteController;
Route::get('/clientes/create', [ClienteController::class, 'create'])->name('clientes.create');
Route::delete('/clientes/{cliente}/destroy', [ClienteController::class, 'destroy'])->name('clientes.destroy');
Route::get('/clientes/{cliente}/edit', [ClienteController::class, 'edit'])->name('clientes.edit');
Route::get('/clientes/index', [ClienteController::class, 'index'])->name('clientes.index');
Route::post('/clientes/store', [ClienteController::class, 'store'])->name('clientes.store');
Route::put('/clientes/{cliente}/update', [ClienteController::class, 'update'])->name('clientes.update');

use App\Http\Controllers\LocacionController;
Route::get('/locaciones/create', [LocacionController::class, 'create'])->name('locaciones.create');
Route::delete('/locaciones/{locacion}/destroy', [LocacionController::class, 'destroy'])->name('locaciones.destroy');
Route::get('/locaciones/{locacion}/edit', [LocacionController::class, 'edit'])->name('locaciones.edit');
Route::get('/locaciones/index', [LocacionController::class, 'index'])->name('locaciones.index');
Route::post('/locaciones/store', [LocacionController::class, 'store'])->name('locaciones.store');
Route::put('/locaciones/{locacion}/update', [LocacionController::class, 'update'])->name('locaciones.update');
