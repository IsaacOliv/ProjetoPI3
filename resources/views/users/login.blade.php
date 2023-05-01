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
a.a1{
    background: #34495e;
}
</style>

        <div class="header header1">Login</div>
        <form action="home.html" name="loginForm" method="get">
            <input class="email" name="email" type="text" placeholder="Email" >
            <input class="senha" name="senha" type="password" placeholder="Senha">
            <input type="submit" value="Confirmar">
        </form>

@endsection




