@extends('layouts.admin')

@section('title', 'Adição de tarefas')

@section('content') 
    <a href="{{ route('list' )}}">Voltar</a>
    <h1>Edição de Contato</h1>
    <form method="POST"> 
        @csrf
        <label>Nome:</label>
        <input type="text" name="name" value="{{ $data->name }}">        
        <label>Contato:</label>
        <input type="text" name="contact" value="{{ $data->contact }}">
        <label>Email:</label>
        <input type="text" name="email" value="{{ $data->email }}">        
        <input type="submit" value="Adicionar">
    </form>
@endsection