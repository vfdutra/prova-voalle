<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PerguntasRespostasModel;
use App\Models\RespostasUsuario;
use App\Models\Usuario;
use Exception;

class QuestionarioController extends Controller
{
    public function index()
    {
        $perguntas = PerguntasRespostasModel::get(['pergunta', 'valor'])->toArray();
        return view('questionario', compact('perguntas'));
    }

    public function store(Request $request)
    {
        $regras = [
            'nome' => 'required|string|max:255',
            'resposta_1' => 'required',
            'resposta_2' => 'required',
            'resposta_3' => 'required',
        ];

        $msgs = [
            'required' => 'O campo :attribute é obrigatório',
            'string'   => 'O campo :attribute deve ser uma frase',
            'max'      => 'O campo :attribute deve ter no máximo :max caracteres',
        ];

        $request->validate($regras, $msgs);
        try {
            $dados = $this->pontuacao($request->all());
            $request->merge(['pontuacao' => $dados['pontuacao']]);
            $id_usuario = Usuario::create($request->all());
            $request->merge(['id_usuario' => $id_usuario->id_usuario]);
            RespostasUsuario::create($request->all());
            return redirect('/ranking')->with('acertos', $dados['acertou']);
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }

    public function pontuacao($respostas_usuario)
    {
        $respostas = PerguntasRespostasModel::get(['resposta', 'valor'])->toArray();

        $dados = [
            'pontuacao' => 0,
            'acertou' => 0
        ];

        unset($respostas_usuario['_token']);
        unset($respostas_usuario['nome']);
        $respostas_usuario = array_chunk($respostas_usuario, 1);

        foreach ($respostas as $key => $value) {
            if ($respostas[$key]['resposta'] == $respostas_usuario[$key][0]) {
                $dados['pontuacao'] += $respostas[$key]['valor'];
                $dados['acertou']++;
            }
        }
        return $dados;
    }
}
