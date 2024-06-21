<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Question_1_Controller extends Controller
{
    public function handle(Request $request)
    {
        $a = intval($request->input('lado1'));
        $b = intval($request->input('lado2'));
        $c = intval($request->input('lado3'));

        $mensagem = $this->classificarTriangulo($a, $b, $c);

        return view('questionOne', ['mensagem' => $mensagem]);
    }

    private function classificarTriangulo($a, $b, $c)
    {
        if ($a + $b <= $c || $a + $c <= $b || $b + $c <= $a) {
            return "Os lados fornecidos não formam um triângulo válido.";
        }
        if ($a == $b && $b == $c) {
            return "Triângulo Equilátero";
        } elseif ($a == $b || $a == $c || $b == $c) {
            return "Triângulo Isósceles";
        } else {
            return "Triângulo Escaleno";
        }
    }
}
