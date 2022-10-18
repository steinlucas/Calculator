<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcController extends Controller
{
    public function index(){
        return view('index');
    }

    public function calc(Request $request){
        $val1 = $request->val1;
        $val2 = $request->val2;
        $operador = $request->operador;

        $resultado = "";

        switch($operador){
            case "add":
                $resultado = $val1 + $val2;
            break;

            case "sub":
                $resultado = $val1 - $val2;
            break;

            case "mult":
                $resultado = $val1 * $val2;
            break;

            case "div":
                $resultado = $val1 / $val2;
            break;
        }

        return redirect()->route('index')->with(
            ['resultado' => $resultado]
        );
        
    }

}
