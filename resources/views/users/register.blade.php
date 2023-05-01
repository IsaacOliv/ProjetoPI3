@extends('layouts.account')

@section('conteudo')

<style>
.botoes a{
    text-decoration: none;
    padding: 15px 75px;
    font-size: 30px;
    color: #ffffff;
    font-family: arial;
    background: #2981bc;
    border-radius: 2px;
}
a.a2{
    background: #34495e;
}
</style>

    <div class="cadastro-form"  >
        <div class="header">Register</div>
        <form action="{{route('users.store')}}" name="cadastroForm" method="post">
            @csrf
            <input class="email" name="name" type="text" placeholder="Nome" >
            <input class="email" name="email" type="text" placeholder="Email">
            <input class="senha" name="password" type="password" placeholder="Senha" >
            <input type="submit" value="Confirmar">
        </form>
    </div>
@endsection
