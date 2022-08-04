<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PerguntasRespostasModel;
use Exception;

class PerguntasRespostasController extends Controller
{
    public function index()
    {
        return view('formulario-cadastro-perguntas');
    }

    public function store(Request $request)
    {
        $regras = [
            'pergunta' => 'required|string|max:255',
            'resposta' => 'required',
            'valor'    => 'required|integer',
        ];

        $msgs = [
            'required' => 'O campo :attribute é obrigatório',
            'string'   => 'O campo :attribute deve ser uma frase',
            'max'      => 'O campo :attribute deve ter no máximo :max caracteres',
            'integer'  => 'O campo :attribute deve ser um número inteiro',
        ];

        //dd($request);

        $request->validate($regras, $msgs);
        try {
            PerguntasRespostasModel::create($request->all());
            return redirect()->back()->with('mensagem', 'Pergunta cadastrada com sucesso!');
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
