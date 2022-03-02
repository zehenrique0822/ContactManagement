@extends('layouts.admin')

@section('title', 'Listagem de contatos')

@section('content') 
    <h1>Listagem de contatos</h1>
    <a href="{{ route('add')}}">Cadastrar</a><br>
    @if(count($list) > 0)
    <div>
    <table> 
        <tr> 
            <td>ID</td>
            <td>Nome</td>
            <td>Contato</td>
            <td>Email</td>
            <td>Ações</td>
        </tr>         
    @foreach($list as $item)                
        <tr>
            <td>{{$item->id}}<td>
            <td>{{$item->name}}<td>
            <td>{{$item->contact}}<td>            
            <td>{{$item->email}}<td>      
            <td>
                <a href="{{ route('detail', ['id'=>$item->id])}}">Detalhes</a>                  
                <a href="{{ route('edit', ['id'=>$item->id]) }}">Editar</a>
                <a href="{{ route('del', ['id'=>$item->id]) }}" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</a>       
            </td>
        </tr>
    @endforeach
        </tr> 
    </table>
    </div>
    @else
        Não há itens a serem listados.
    @endif  
@endsection