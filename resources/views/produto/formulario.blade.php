@extends('layout.principal')

@section('conteudo')

    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>

    </div>


    <form class="" method="post" action="/produtos/adiciona">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="form-group">
            <label for="">Nome</label>
            <input class="form-control" type="text" name="nome">
        </div>
        <div class="form-group">
            <label for="">Valor</label>
            <input class="form-control" type="text" name="valor">
        </div>
        <div class="form-group">
            <label for="">Quantidade</label>
            <input class="form-control" type="text" name="quantidade">
        </div>
        <div class="form-group">
            <label for="">Tamanho</label>
            <input class="form-control" type="text" name="tamanho">
        </div>
        <div class="form-group">
            <label for="">Descrição</label>
            <textarea class="form-control" name="descricao" id="" cols="30" rows="10"></textarea>
        </div>

        <button class="btn btn-primary btn-block" type="submit">Adicionar</button>
    </form>

@stop
