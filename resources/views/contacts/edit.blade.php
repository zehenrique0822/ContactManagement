@extends('layouts.admin')

@section('title', 'Adição de tarefas')

@section('content') 
    <div class="container">
    <a class="button" href="{{ route('list' )}}">Voltar</a>
    <h1>Edição de Contato</h1>
    @if($errors->any())
    @slot('type')
    Aviso:
    @endslot
    @foreach($errors->all() as $error)
        {{ $error }} <br/>
    @endforeach     
    @endif
    <form method="POST"> 
        @csrf
        <label>Nome:</label>
        <input type="text" name="name" value="{{ $data->name }}" minlength="5" required>        
        <label>Contato:</label>
        <input type="text" name="contact" value="{{ $data->contact }}" minlength="9" required>
        <label>Email:</label>
        <input type="text" name="email" value="{{ $data->email }}" required>        
        <input type="submit" value="Alterar">
    </form>
    </div>
@endsection