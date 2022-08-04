@extends('layout.layout')

@section('titulo')
    Cadastro
@endsection

@section('conteudo')

    @if (session('mensagem'))
        <div class="alert alert-success">
            {{ session('mensagem') }}
        </div>
    @endif

    @if ($numeroPerguntas <= 2)
        <form action="{{ url('/store') }}" method="POST" class="form-horizontal">
            @csrf
            <div class="form-group">
                <label for="pergunta">Digite aqui a pergunta a ser cadastrada</label>
                <input type="text" class="form-control" name="pergunta" placeholder="Pergunta">
            </div>
            <br>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="resposta" value="1"
                    {{ old('resposta') === '1' ? 'checked' : '' }}>
                <label class="form-check-label" for="verdadeiro">
                    Verdadeiro
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="resposta" value="0"
                    {{ old('resposta') === '0' ? 'checked' : '' }}>
                <label class="form-check-label" for="falso">
                    Falso
                </label>
            </div>
            <br>
            <div class="form-group">
                <label for="pergunta">Digite o valor da questão</label>
                <input type="text" class="form-control" name="valor" placeholder="Valor" value="{{ old('valor') }}">
            </div>
            <br>
            <div class="d-grid gap-5 d-md-flex justify-content-md-center">
                <a href="/home" class="btn btn-danger me-md-2">Cancelar</a>
                <button type="submit" class="btn btn-primary">Responder</button>
            </div>
        </form>
        <br>
    @else
        <div class="alert alert-danger">
            Não é possível cadastrar mais do que 3 perguntas.
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong> Atenção!! </strong>
            Questionário não enviado devido aos seguintes erros:
            <ul>
                @foreach ($errors->all() as $erro)
                    <li> {{ $erro }} </li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection
