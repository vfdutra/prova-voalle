@extends('layout.layout')

@section('titulo')
    Ranking
@endsection

@section('conteudo')

    @if (!@empty($usuarios->items))
        <p>Você teve <br>{{ session('acertos') }}<br> acertos de um total de 3 questões</p>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Pontuação</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($usuarios as $usuario)
                    <tr>
                        <td>{{ $usuario->nome }}</td>
                        <td>{{ $usuario->pontuacao }}</td>
                    </tr>
                @endforeach
        </table>
    @else
        <div class="alert alert-danger">
            Ainda não existem respostas ao questionário. <a href="/questionario">Seja o primeiro aqui!</a>
        </div>
    @endif
@endsection
