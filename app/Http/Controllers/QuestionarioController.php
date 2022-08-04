<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PerguntasRespostasModel;

class QuestionarioController extends Controller
{
    public function index()
    {
        $perguntas = PerguntasRespostasModel::get(['pergunta', 'valor']);
        return view('questionario', compact('perguntas'));
    }
}
