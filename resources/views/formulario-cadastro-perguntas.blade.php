@extends('layout.layout')

@section('titulo')
    Cadastro
@endsection

@section('conteudo')
    <form action="{{ url('/store') }}" method="POST" class="form-horizontal">
        @csrf
        <div class="form-group">
            <label for="pergunta">Digite aqui a pergunta a ser cadastrada</label>
            <input type="text" class="form-control" name="pergunta" placeholder="Pergunta">
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="resposta" value="1">
            <label class="form-check-label" for="verdadeiro">
                Verdadeiro
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="resposta" value="0">
            <label class="form-check-label" for="falso">
                Falso
            </label>
        </div>
        <br>
        <div class="form-group">
            <label for="pergunta">Digite o valor da questão</label>
            <input type="text" class="form-control" name="valor" placeholder="Valor">
        </div>
        <br>
        <div>
            <a href="/home" class="btn btn-danger">Cancelar</a>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
    </form>

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
