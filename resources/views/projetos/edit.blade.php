@extends('adminlte::page')

@section('title', 'Novo Projeto')

@section('content_header')
    <h1>Editar Projeto</h1>
@stop

@section('content')
    <form action="{{ route('projetos.update', $projeto) }}" method="post">
        @method('PUT')
        @include('projetos._form')
    </form>
@stop