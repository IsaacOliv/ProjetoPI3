<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/account.css">
    <title>Document</title>
</head>
<body>

<div class="center">
    <div class="botoes">
        <a class="a1"href="{{route('users.register')}}">Cadastrar</a>
        <a class="a2"href="{{route('users.login')}}">Entrar</a>
    </div>
    @yield('conteudo')
</div>
</body>
</html>
