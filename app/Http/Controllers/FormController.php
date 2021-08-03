<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\FormAnswer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FormController extends Controller
{
    public function index()
    {
        $forms = Form::with('questions')->where('id', 1)->get()->toArray();
        foreach ($forms[0]['questions'] as $question) {
            return view('questions.index', ['question' => $question, 'form_id' => $forms[0]['id']]);
        }
    }

    public function nextQuestion(Request $request)
    {
        FormAnswer::create([
            'user_id' => auth()->user()->id,
            'form_id' => request()->segment(2),
            'question_id' => request()->segment(3),
            'answer' => $request[request()->segment(3)]
        ]);

    }
}
