<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CLientesController;
use App\Http\Controllers\TecnicoController;
use App\Http\Controllers\TiposChamadosController;
use App\Http\Controllers\AtendimentosController;


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
    Route::resource('clientes', ClientesController::class);
    Route::resource('tecnico', TecnicoController::class);
    Route::resource('tiposchamados', TiposChamadosController::class);
    Route::resource('atendimentos', AtendimentosController::class);

});

require __DIR__.'/auth.php';