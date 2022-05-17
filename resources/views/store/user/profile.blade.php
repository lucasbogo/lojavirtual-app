@extends('store.templates.master')

@section('content')

<h1 class="title">Meu Perfil</h1>

<form class="form">
    <div class="form-group">
        <label>Nome:</label>
        <input type="text" name="name" placeholder="Meu Nome" class="form-control">
    </div>

    <div class="form-group">
        <label>E-mail:</label>
        <input type="email" name="email" placeholder="Meu e-mail" disabled="disabled"  class="form-control">
    </div>

    <div class="form-group">
        <input type="submit" class="btn btn-default">
    </div>

</form>

@endsection

