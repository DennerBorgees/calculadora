<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Calculadora extends Controller
{
    public function calculadora()
    {
        return view('calculadora');
    }

    public function calcular(Request $request)
    {
        if($request->operador != "+" || $request->operador != "-" || $request->operador != "*" || $request->operador != "/")
        {
            $result = "Operador Invalido";
        }

        if($request->operador == '+') {
            $result = $request->num1 + $request->num2;
        }

        if($request->operador == '-')
        {
            $result = $request->num1 - $request->num2;
        }

        if($request->operador == '*')
        {
            $result = $request->num1 * $request->num2;
        }

        if($request->operador == '/')
        {
            $result = $request->num1 / $request->num2;
        }

        return view('calcular', compact('result'));
    }
}
