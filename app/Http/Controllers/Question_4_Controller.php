<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Question_4_Controller extends Controller
{

    public function handle(Request $request)
    {
        $numero = intval($request->input('numero'));
        $meses = [
            1 => 'Janeiro',
            2 => 'Fevereiro',
            3 => 'Março',
            4 => 'Abril',
            5 => 'Maio',
            6 => 'Junho',
            7 => 'Julho',
            8 => 'Agosto',
            9 => 'Setembro',
            10 => 'Outubro',
            11 => 'Novembro',
            12 => 'Dezembro',
        ];

        $message = isset($meses[$numero]) ? $meses[$numero] : 'Não existe mês com este número';

        return view('questionFour', ['message' => $message]);
    }
}
