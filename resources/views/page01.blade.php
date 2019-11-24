@extends('layouts.master')

@section('titulo', 'Página número UM')

@section('conteudo')
    <h1>Esta é a página 01</h1>
    <p>Olá {{ $meunome }}</p>
    <a href="/page02">Visitar a página 02</a>
@endsection
