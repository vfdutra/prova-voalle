@extends('layout.layout')

@section('titulo')
    Questionário
@endsection

@section('conteudo')
    <form action="{{ url('/questionario/salvar') }}" method="POST" class="form-horizontal">
        @csrf
        <div class="form-group">
            <label for="pergunta">Nome Completo</label>
            <input type="text" class="form-control" name="nome" placeholder="Nome">
        </div>
        <br>

        <small>Questão 1 - Valor {{ $perguntas[0]->valor }}</small><br>
        {{ $perguntas[0]->pergunta }}
        <br>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="resposta_1" value="1">
            <label class="form-check-label" for="verdadeiro">
                Verdadeiro
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="resposta_1" value="0">
            <label class="form-check-label" for="falso">
                Falso
            </label>
        </div>
        <br>

        <small>Questão 2 - Valor {{ $perguntas[1]->valor }}</small><br>
        {{ $perguntas[1]->pergunta }}
        <br>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="resposta" value="1">
            <label class="form-check-label" for="verdadeiro">
                Verdadeiro
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="resposta" value="2">
            <label class="form-check-label" for="falso">
                Falso
            </label>
        </div>
        <br>

        <small>Questão 3 - Valor {{ $perguntas[2]->valor }}</small><br>
        {{ $perguntas[2]->pergunta }}
        <br>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="resposta" value="1">
            <label class="form-check-label" for="verdadeiro">
                Verdadeiro
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="resposta" value="2">
            <label class="form-check-label" for="falso">
                Falso
            </label>
        </div>
        <br>
        <div>
            <a href="/home" class="btn btn-danger">Cancelar</a>
            <button type="submit" class="btn btn-primary">Responder</button>
        </div>
    </form>
@endsection
