<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="navbar-nav">
            <a href="/questionario" class="nav-item nav-link"> Questionário </a>
            <a href="/cadastrar" class="nav-item nav-link"> Cadastrar Perguntas </a>
        </div>
    </nav>
    <div class="container">
        <br>
        <div class="title m-d-md col-10 offset-1">
            <h1> @yield('titulo') </h1>
            <br>
        </div>
        <section>
            <div class="col-10 offset-1">
                @yield('conteudo')
            </div>
        </section>
    </div>
</body>

</html>
