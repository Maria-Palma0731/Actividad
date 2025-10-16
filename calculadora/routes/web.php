<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CalculadoraController;
Route::match(['get', 'post'], '/calculadora', [CalculadoraController::class, 'mostrar']);


