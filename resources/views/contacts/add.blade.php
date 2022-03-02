@extends('layouts.admin')

@section('title', 'Adição de tarefas')

@section('content') 
    <div class="container">
    <a class="button" href="{{ route('list' )}}">Voltar</a>
    <h1>Cadastro de Contato</h1>
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
        <input type="text" name="name" minlength="5" required>        
        <label>Contato:</label>
        <input type="text" name="contact" minlength="9" required>
        <label>Email:</label>
        <input type="email" name="email" required>        
        <input type="submit" value="Adicionar">
        <br><p id="alert">Adicione um novo cadastro, caso o contato ou email já exista será redirecionado de volta!</p>
    </form>
    </div>
@endsection