<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index()
    {
        $forms=Form::with('questions')->where('id',1)->get()->toArray();
        return view('questions.index',compact('forms'));
    }
}
