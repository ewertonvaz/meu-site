@extends('layouts.master')

@section('titulo', 'Página número DOIS')

@section('conteudo')
    <h1>Esta é a página 02</h1>
    @foreach ($nomes as $nome)
        <p>Olá {{ $nome }}</p>
    @endforeach
     <a href="/page01">Visitar a página 01</a>
@endsection