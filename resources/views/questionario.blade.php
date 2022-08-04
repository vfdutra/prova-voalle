@extends('layout.layout')

@section('titulo')
    Questionário
@endsection

@section('conteudo')
    @if (!empty($perguntas))
        <form action="{{ url('/questionario/salvar') }}" method="POST" class="form-horizontal">
            @csrf
            <div class="form-group">
                <label for="pergunta">Nome Completo</label>
                <input type="text" class="form-control @error('title') is_invalid @enderror" name="nome"
                    placeholder="Nome">

                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <br>

            <small>Questão 1 - Valor {{ $perguntas[0]['valor'] }}</small><br>
            {{ $perguntas[0]['pergunta'] }}
            <br>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="resposta_1" value="1" id="verdadeiro_1">
                <label class="form-check-label" for="verdadeiro_1">
                    Verdadeiro
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="resposta_1" value="0" id="falso_1">
                <label class="form-check-label" for="falso_1">
                    Falso
                </label>
            </div>
            <br>

            <small>Questão 2 - Valor {{ $perguntas[1]['valor'] }}</small><br>
            {{ $perguntas[1]['pergunta'] }}
            <br>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="resposta_2" value="1" id="verdadeiro_2">
                <label class="form-check-label" for="verdadeiro_2">
                    Verdadeiro
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="resposta_2" value="0" id="falso_2">
                <label class="form-check-label" for="falso_2">
                    Falso
                </label>
            </div>
            <br>

            <small>Questão 3 - Valor {{ $perguntas[2]['valor'] }}</small><br>
            {{ $perguntas[2]['pergunta'] }}
            <br>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="resposta_3" value="1" id="verdadeiro_3">
                <label class="form-check-label" for="verdadeiro_3">
                    Verdadeiro
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="resposta_3" value="0" id="falso_3">
                <label class="form-check-label" for="falso_3">
                    Falso
                </label>
            </div>
            <br>
            <div>
                <a href="/home" class="btn btn-danger">Cancelar</a>
                <button type="submit" class="btn btn-primary">Responder</button>
            </div>
        </form>
    @else
        <div class="alert alert-danger">
            Não existem perguntas cadastradas.
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong> Atenção!! </strong>
            Paciente não cadastrado devido aos seguintes erros:
            <ul>
                @foreach ($errors->all() as $erro)
                    <li> {{ $erro }} </li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection
