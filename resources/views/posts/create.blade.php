@extends('layouts.app')

@section('conteudo')
    <div class="container">
        <h2>Cadastro de posts</h2>
    </div>

    <form action="{{route('posts.store')}}" method="POST">
       @csrf
        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Titulo</label>
        <input type="cadastro" class="form-control" name="title" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Comentario</label>
        <input type="cadastro" class="form-control" name="coment" id="exampleInputPassword1">
        <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Receita</label>
        <input type="cadastro" class="form-control" name="moneyPlus" id="exampleInputPassword1">
        <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Despesa</label>
        <input type="cadastro" class="form-control" name="moneyLess" id="exampleInputPassword1">
        <br>
        <button type="submit"  class="btn btn-primary">Submit</button>
    </form>

@endsection
