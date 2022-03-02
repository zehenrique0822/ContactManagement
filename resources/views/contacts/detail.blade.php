@extends('layouts.admin')

@section('title', 'dataagem de contatos')

@section('content') 
    <div class="container">
    <a href="{{ route('list')}}">Voltar</a> 
    <h1>Detalhes do {{ $data->name }}</h1>
    <div class="detail">
        <h2>Nome: {{ $data->name }}</h2>
        <p>Contato: {{ $data->contact }}</p>
        <p>Email: {{ $data->email }}</p>
        <a href="{{ route('edit', ['id'=>$data->id])}}">Editar</a>                  
        <a href="{{ route('del', ['id'=>$data->id]) }}" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</a>
    </div>
@endsection