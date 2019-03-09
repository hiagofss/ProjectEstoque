@extends('layout.principal')

@section('conteudo')

    <form class="" method="post" action="/login">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="form-group">
            <label for="">E-Mail</label>
            <input class="form-control" type="text" name="email">
        </div>
        <div class="form-group">
            <label for="">Senha</label>
            <input class="form-control" type="password" name="password">
        </div>
        <button class="btn btn-primary" type="submit">Login</button>
    </form>

@stop
