<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculadoraController extends Controller
{
    public function mostrar(Request $request)
    {
        $resultado = null;

        if ($request->isMethod('post')) {
            $a = $request->input('num1');
            $b = $request->input('num2');
            $op = $request->input('operacion');

            switch ($op) {
                case 'suma': $resultado = $a + $b; break;
                case 'resta': $resultado = $a - $b; break;
                case 'multiplicacion': $resultado = $a * $b; break;
                case 'division': $resultado = $b != 0 ? $a / $b : 'Error'; break;
                default: $resultado = 'Operación inválida';

            }
        }

        return view('calculadora', compact('resultado'));
    }

}

