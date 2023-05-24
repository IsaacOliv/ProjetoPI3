@extends('layouts.app')



@section('conteudo')
<div class="row gx-5">
    <p> Receita total: {{$somaReceita}}</p>
    <p> Despesa total: -{{$somaDespesa}} </p>
    @if ($somaDespesa > $somaReceita )
    <p> <span class="badge text-bg-danger">Total: {{$somaReceita - $somaDespesa}}</span></p>
    @else
    <p> <span class="badge text-bg-success">Total: {{$somaReceita - $somaDespesa}}</span></p>
    @endif
</div>



<table class="table">
    <thead>
      <tr>
        <th scope="col">Titulo</th>
        <th scope="col">Comentario</th>
        <th scope="col">Ações</th>
        <th scope="col">Receita: {{$somaReceita}}</th>
        <th scope="col">Despesa: {{$somaDespesa}}</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)

      <tr>
        <td>{{$post->title}}</td>
        <td>{{$post->coment}}</td>
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
        <td>{{$post->moneyPlus}}</td>
        <td>{{$post->moneyLess}}</td>
      </tr>

      @endforeach
    </tbody>

  </table>
  <div class="py-4">
    {{$posts->links()}}
    </div>

@endsection
