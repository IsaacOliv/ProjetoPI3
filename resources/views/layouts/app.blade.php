<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>

    input[type=cadastro]{
        background-color: gray;
        border-color: black;
    }
    .sair{
        position: relative;
        left: 100%;
        top: 1px;

    }
    body{
    background: linear-gradient(#bedef4, #93c8ec);
    height: 100vh;
    font-family: 'Arial Narrow', Arial, sans-serif;
}
    </style>
    <title>Document</title>
</head>
<body>

    <div class="container">

        <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark" >
            <div class="container-fluid">
              <a class="navbar-brand" href="{{route('posts.index')}}">Inicio</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('posts.index')}}">Listar posts</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('posts.create')}}">Novo post</a>
                  </li>
                        <form action="{{route('logout')}}" method="get" class="d-flex">
                            <button class="btn btn-outline-danger mt-2 position-absolute top-0 end-0"  >sair</button>
                        </form>
                </ul>
              </div>

            </div>
          </nav>
<br>
        @yield('conteudo')
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
