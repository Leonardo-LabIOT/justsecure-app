<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Question_2_Controller extends Controller
{
    public function handle(Request $request)
    {
        $somaPositivos = 0;
        $totalNegativos = 0;
        $num = 20;

        for ($i = 1; $i <= $num; $i++) {
            $numero = intval($request->input("num{$i}"));

            if ($numero > 0) {
                $somaPositivos += $numero;
            } elseif ($numero < 0) {
                $totalNegativos++;
            }
        }

        return view('questionTwo', [
            'somaPositivos' => $somaPositivos,
            'totalNegativos' => $totalNegativos,
        ]);
    }
}
