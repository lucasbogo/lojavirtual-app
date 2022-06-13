@extends('store.templates.master')

@section('content')

<h1 class="title">Meu Perfil</h1>

<!--Mostra mensagem de perfil atualizado com sucesso dinamicamente-->
@if ( session('success') ) 
<div class="alert alert-success">

    {{session('success')}}

</div>
@endif

<!--Exibir exceptions de nome usuário e senha-->
@if ( @isset($errors) && count($errors) > 0 )<!--Verificar se a variável 'erro' é maior do que 0, se for, mostrar mensagem de erro--> 
<div class="alert alert-warning">

    <!--Exibir os erros-->
    @foreach($errors->all() as $error)
        <p>{{$error}}</p>
    @endforeach

</div>    
@endif


<form class="form" action="{{route('update.profile')}}" method="POST"> <!--rota do formulário é o update profile-->
    {!! csrf_field() !!}<!--Método csrf_field que gera o token de autenticação do usuário-->
                                <!--Segurança do Laravel que evita ataques csrf-->

    <div class="form-group">
        <label>Nome:</label> <!--Value="{{auth()->user()->name}}" Serve para mostrar o nome do usuário dinamicamente-->
        <input type="text" name="name" placeholder="Meu Nome" class="form-control" value="{{auth()->user()->name}}">
    </div>

    <div class="form-group">
        <label>E-mail:</label> <!--Value="{{auth()->user()->email}}" Serve para mostrar o email do usuário dinamicamente-->
        <input type="email" name="email" placeholder="Meu e-mail" disabled="disabled"  class="form-control" value="{{auth()->user()->email}}">
    </div>

    <div class="form-group">
        <input type="submit" class="btn btn-default">
    </div>

</form>

@endsection

