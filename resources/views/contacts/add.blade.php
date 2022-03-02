@extends('layouts.admin')

@section('title', 'Adição de tarefas')

@section('content') 
    <a href="{{ route('list' )}}">Voltar</a>
    <h1>Adição</h1>
{{-- 
    @if($errors->any())
        <x-alert>
            @slot('type')
            Aviso:
            @endslot
            @foreach($errors->all() as $error)
                {{ $error }} <br/>
            @endforeach            
        </x-alert>
    @endif --}}

    <form method="POST"> 
        @csrf
        <label>Nome:</label>
        <input type="text" name="name">        
        <label>Contato:</label>
        <input type="text" name="contact">
        <label>Email:</label>
        <input type="text" name="email">        
        <input type="submit" value="Adicionar">
    </form>
@endsection