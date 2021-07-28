@extends('adminlte::page')

@section('title', 'Novo Projeto')

@section('content_header')
    <h1>Novo Projeto</h1>
@stop

@section('content')
    <form action="{{ route('projetos.store') }}" method="post">
        @include('projetos._form')
    </form>
@stop