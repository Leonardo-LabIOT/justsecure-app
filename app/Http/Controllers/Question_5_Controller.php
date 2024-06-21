<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Question_5_Controller extends Controller
{
    public function handle(Request $request)
    {
        $crescimento = intval($request->input('crescimento'));

        if ($crescimento < 3) {
            return "O crescimento de Juca deve ser maior ou igual a 3 cm por ano para que ele ultrapasse Chico.";
        }

        $alturaChico = 150;
        $alturaJuca = 110;
        $anos = 0;

        while ($alturaJuca <= $alturaChico) {
            $alturaChico += 2;
            $alturaJuca += $crescimento;
            $time = 100;
            $anos++;
            if ($anos > $time) {
                return view('questionFive', [
                    'never' => $time
                ]);
            }
        }

        return view('questionFive', [
            'anos' => $anos,
            'alturaChico' => $alturaChico,
            'alturaJuca' => $alturaJuca,
        ]);
    }
}
