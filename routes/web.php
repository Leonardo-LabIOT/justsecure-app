<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;
use App\Http\Controllers\Question_1_Controller;
use App\Http\Controllers\Question_2_Controller;
use App\Http\Controllers\Question_3_Controller;
use App\Http\Controllers\Question_4_Controller;
use App\Http\Controllers\Question_5_Controller;
use App\Http\Controllers\Question_6_Controller;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/questionOne', [PageController::class, 'questionOne'])->name('questionOne');
Route::get('/questionTwo', [PageController::class, 'questionTwo'])->name('questionTwo');
Route::get('/questionThree', [PageController::class, 'questionThree'])->name('questionThree');
Route::get('/questionFour', [PageController::class, 'questionFour'])->name('questionFour');
Route::get('/questionFive', [PageController::class, 'questionFive'])->name('questionFive');
Route::get('/questionSix', [PageController::class, 'questionSix'])->name('questionSix');

Route::post('/question-one', [Question_1_Controller::class, 'handle']);
Route::post('/question-two', [Question_2_Controller::class, 'handle']);
Route::post('/question-three', [Question_3_Controller::class, 'handle']);
Route::post('/question-four', [Question_4_Controller::class, 'handle']);
Route::post('/question-five', [Question_5_Controller::class, 'handle']);
Route::post('/question-six', [Question_6_Controller::class, 'handle']);
