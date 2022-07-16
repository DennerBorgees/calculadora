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
        if($request->operador == '+') {
            $result = $request->nro1 + $request->nro2;
        }

        if($request->operador == '-')
        {
            $result = $request->nro1 - $request->nro2;
        }
        if($request->operador == '*')
        {
            $result = $request->nro1 * $request->nro2;
        }
        if($request->operador == '/')
        {
            $result = $request->nro1 / $request->nro2;
        }

        return view('calcular', compact('result'));
    }
}
