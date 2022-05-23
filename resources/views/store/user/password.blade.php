@extends('store.templates.master')

@section('content')

<h1 class="title">Atualizar Senha</h1>

@if ( session('success') ) <!--Mostra mensagem de perfil atualizado com sucesso dinamicamente-->
<div class="alert alert-success">

    {{session('success')}}

</div>
    
@endif

<!--Exibir exceptions de nome usuário e senha-->
@if ( @isset($errors) && count($erros) >0 )<!--Verificar se a variável 'erro' é maior do que 0, se for, mostrar mensagem de erro--> 
<div class="alert alert-warning">

    <!--Exibir os erros-->
    @foreach($errors->all() as $error)
        <p>{{$error}}</p>
    @endforeach

</div>    
@endif

<form class="form" action="{{route('update.password')}}" method="POST"> <!--rota do formulário é o update profile-->
    {!! csrf_field() !!}<!--Método csrf_field que gera o token de autenticação do usuário-->
                                <!--Segurança do Laravel que evita ataques csrf-->

    <div class="form-group">
        <label>Senha:</label> 
        <input type="password" name="password" placeholder="Senha" class="form-control" required="">
    </div>

    <div class="form-group">
        <label>Confirmar Senha:</label> 
        <input type="password" class="form-control" name="password_confirmation" required>
    </div>

    <div class="form-group">
        <input type="submit" class="btn btn-default" value="Atualizar Senha">
    </div>

</form>

@endsection

