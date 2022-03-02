@extends('layouts.admin')

@section('title', 'Listagem de contatos')

@section('content') 
    <div class="container">
    <div>
    <h1>Listagem de contatos</h1>
    <a class="button" href="{{ route('add')}}">Cadastrar</a><br>
    </div>
    @if(count($list) > 0)
    <div>
    <table class="tables"> 
        <tr> 
            <td>ID</td>
            <td>Nome</td>
            <td>Contato</td>
            <td>Email</td>
            <td colspan="3">Ações</td>
        </tr>         
    @foreach($list as $item)                
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->contact}}</td>            
            <td>{{$item->email}}</td>      
            <td><a href="{{ route('detail', ['id'=>$item->id])}}">Detalhes</a></td>                  
            <td><a href="{{ route('edit', ['id'=>$item->id]) }}">Editar</a></td>
            <td><a href="{{ route('del', ['id'=>$item->id]) }}" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</a></td>       
        </tr>
    @endforeach
        </tr> 
    </table>
    </div>
    </div>
    @else
        <p id="alert">Não há itens a serem listados, cadastre por favor!</p>
    @endif  
@endsection