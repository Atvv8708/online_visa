<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    public function index()
    {

        $answer = Answer::all();
        return view('answers.index', ['answers' => $answer]);

    }
}
