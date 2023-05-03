@extends('layouts.app')

@section('conteudo')
    <div class="container">
        <h2>Cadastro de posts</h2>
    </div>

    <form action="{{route('posts.update', $posts->id)}}" method="POST">
       @csrf
       @method('PUT')
        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Titulo</label>
        <input type="cadastro" class="form-control" name="title" id="" value="{{$posts->title}}">
        </div>
        <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Comentario</label>
        <input type="cadastro" class="form-control" name="coment" id="" value="{{$posts->coment}}">
        <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Receita</label>
        <input type="cadastro" class="form-control" name="moneyPlus" id="" value="{{$posts->moneyPlus}}">
        <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Despesa</label>
        <input type="cadastro" class="form-control" name="moneyLess" id="" value="{{$posts->moneyLess}}">
        <br>
        <button type="submit"  class="btn btn-primary">Submit</button>
    </form>

@endsection
