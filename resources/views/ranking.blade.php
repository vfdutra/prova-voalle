@extends('layout.layout')

@section('titulo')
    Ranking
@endsection

@section('conteudo')
    <p>Você teve {{ session('acertos') }} acertos de um total de 3 questões</p>

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
@endsection
