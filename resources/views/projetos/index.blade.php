@extends('adminlte::page')

@section('title', 'Lista de projetos')

@section('content_header')
    <h1>Lista de Projetos</h1>
@stop

@section('content')
<table class="table">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Nome</th>
        <th scope="col">UTM Campaign</th>
        <th scope="col">Tipo de lançamento</th>
        <th scope="col">Projeção de captação</th>
        <th scope="col">Ações</th>
    </tr>
    </thead>
    <tbody>
        @forelse ($projetos as $projeto)
            <tr>
                <th>{{ $projeto->id }}</th>
                <td>{{ $projeto->nome_projeto }}</td>
                <td>{{ $projeto->utm_campaign }}</td>
                <td>{{ $projeto->tipo_lancamento }}</td>
                <td>{{ $projeto->projecao_captacao_leads }}</td>
                <td>
                    <a href="{{route('projetos.edit', $projeto)}}" class="btn btn-primary">Atualizar</a>
                </td>
            </tr>           
        @empty
            <tr>
                <th></th>
                <th>Nenhum registro foi encontrado</th>
                <th></th>
            </tr>
        @endforelse
    </tbody>
</table>
    <div class="d-flex justify-content-center">
    {{ $projetos->links() }}
    </div>

    <div class="float-right">
        <a href="{{ route('projetos.cadastro') }}" class="btn btn-success">Novo projeto</a>
    </div>
@stop