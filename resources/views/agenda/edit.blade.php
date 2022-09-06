@extends('agenda.layout')

@section('titulo','Editar Usuários')

@section('conteudo')
    <form action="{{ route('agenda.update',$dados['id']) }}" method="post">
        @method("PATCH")
        @csrf
        <label for="id">ID</label>
        <input type="text" name="id" id="id" value="<?=$dados['id']?>" readonly><br>
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" value="<?=$dados['nome']?>"><br>
        <label for="telefone">Telefone</label>
        <input type="text" name="telefone" id="telefone" value="<?=$dados['telefone']?>"><br>
        <label for="email">E-mail</label>
        <input type="text" name="email" id="email" value="<?=$dados['email']?>"><br>
        <input type="submit" value="Enviar">
    </form>
@endsection