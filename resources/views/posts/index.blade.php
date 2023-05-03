@extends('layouts.app')

@section('conteudo')

<table class="table">
    <thead>
      <tr>
        <th scope="col">Titulo</th>
        <th scope="col">Comentario</th>
        <th scope="col">Receita</th>
        <th scope="col">Despesa</th>
        <th scope="col">Ações</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
      <tr>
        <td>{{$post->title}}</td>
        <td>{{$post->coment}}</td>
        <td>{{$post->moneyPlus}}</td>
        <td>{{$post->moneyLess}}</td>
        <td>
            <form action="{{route('posts.edit', $post->id)}}">
                <button class="btn btn-warning">Editar</button>
            </form>
            <form action="{{route('posts.delete', $post->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Excluir</button>
            </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection
