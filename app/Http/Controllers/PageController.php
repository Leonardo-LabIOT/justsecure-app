<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function questionOne()
    {
        return view('questionOne');
    }
    public function questionTwo()
    {
        return view('questionTwo');
    }
    public function questionThree()
    {
        return view('questionThree');
    }
    public function questionFour()
    {
        return view('questionFour');
    }
    public function questionFive()
    {
        return view('questionFive');
    }
    public function questionSix()
    {
        return view('questionSix');
    }
}
