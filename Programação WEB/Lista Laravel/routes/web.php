<?php

use App\Http\Controllers\ExerciciosController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/exer1', [ExerciciosController::class, 'mostrarExer1']);
Route::post('/respexer1', [ExerciciosController::class, 'calcularExer1']);

Route::get('/exer2', [ExerciciosController::class, 'mostrarExer2']);
Route::post('/respexer2', [ExerciciosController::class, 'calcularExer2']);

Route::get('/exer3', [ExerciciosController::class, 'mostrarExer3']);
Route::post('/respexer3', [ExerciciosController::class, 'calcularExer3']);

Route::get('/exer4', [ExerciciosController::class, 'mostrarExer4']);
Route::post('/respexer4', [ExerciciosController::class, 'calcularExer4']);

Route::get('/exer5', [ExerciciosController::class, 'mostrarExer5']);
Route::post('/respexer5', [ExerciciosController::class, 'calcularExer5']);

Route::get('/exer6', [ExerciciosController::class, 'mostrarExer6']);
Route::post('/respexer6', [ExerciciosController::class, 'calcularExer6']);

Route::get('/exer7', [ExerciciosController::class, 'mostrarExer7']);
Route::post('/respexer7', [ExerciciosController::class, 'calcularExer7']);

Route::get('/exer8', [ExerciciosController::class, 'mostrarExer8']);
Route::post('/respexer8', [ExerciciosController::class, 'calcularExer8']);

Route::get('/exer9', [ExerciciosController::class, 'mostrarExer9']);
Route::post('/respexer9', [ExerciciosController::class, 'calcularExer9']);

Route::get('/exer10', [ExerciciosController::class, 'mostrarExer10']);
Route::post('/respexer10', [ExerciciosController::class, 'calcularExer10']);

Route::get('/exer11', [ExerciciosController::class, 'mostrarExer11']);
Route::post('/respexer11', [ExerciciosController::class, 'calcularExer11']);

Route::get('/exer12', [ExerciciosController::class, 'mostrarExer12']);
Route::post('/respexer12', [ExerciciosController::class, 'calcularExer12']);

Route::get('/exer13', [ExerciciosController::class, 'mostrarExer13']);
Route::post('/respexer13', [ExerciciosController::class, 'calcularExer13']);

Route::get('/exer14', [ExerciciosController::class, 'mostrarExer14']);
Route::post('/respexer14', [ExerciciosController::class, 'calcularExer14']);

Route::get('/exer15', [ExerciciosController::class, 'mostrarExer15']);
Route::post('/respexer15', [ExerciciosController::class, 'calcularExer15']);

Route::get('/exer16', [ExerciciosController::class, 'mostrarExer16']);
Route::post('/respexer16', [ExerciciosController::class, 'calcularExer16']);

Route::get('/exer17', [ExerciciosController::class, 'mostrarExer17']);
Route::post('/respexer17', [ExerciciosController::class, 'calcularExer17']);

Route::get('/exer18', [ExerciciosController::class, 'mostrarExer18']);
Route::post('/respexer18', [ExerciciosController::class, 'calcularExer18']);

Route::get('/exer19', [ExerciciosController::class, 'mostrarExer19']);
Route::post('/respexer19', [ExerciciosController::class, 'calcularExer19']);

Route::get('/exer20', [ExerciciosController::class, 'mostrarExer20']);
Route::post('/respexer20', [ExerciciosController::class, 'calcularExer20']);