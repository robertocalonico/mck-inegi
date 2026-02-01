<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstadoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/estados', [EstadoController::class, 'index'])->name('estados.index');
Route::get('/estados/{estado}', [EstadoController::class, 'show'])->name('estados.show');
Route::get('/', function () {
    return redirect()->route('estados.index');
});
