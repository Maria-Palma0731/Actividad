<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalculadoraController;
Route::match(['get', 'post'], '/calculadora', [CalculadoraController::class, 'mostrar']);

Route::get('/', function () {
    return view('welcome');
});

#hola