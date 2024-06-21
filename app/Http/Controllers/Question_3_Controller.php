<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Question_3_Controller extends Controller
{
    public function handle(Request $request)
    {

        $num = 20;
        $results = [];
        $my_num = intval($request->input("my_num"));
        for ($i = 0; $i <= $num; $i++) {
            array_push($results, $i * $my_num);
        }


        return view('questionThree', [
            'my_num' => $my_num,
            'results' => $results,
        ]);
    }
}
