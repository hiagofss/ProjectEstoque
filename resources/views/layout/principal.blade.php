<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Controle de Estoque</title>
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <link rel="stylesheet" type="text/css" href="/css/custom.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script src="main.js"></script>
</head>
<body>
<div class="container">

    <nav class="navbar navbar-default">
        <div class="container-fluid">

            <div class="navbar-header">
                <a href="/produtos" class="navbar-brand">Estoque Laravel</a>
            </div>

            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="{{action('ProdutoController@lista')}}">
                        Listagem
                    </a>
                </li>
                <li>
                    <a href="{{action('ProdutoController@novo')}}">
                        Novo
                    </a>
                </li>
            </ul>

        </div>
    </nav>

    @yield('conteudo')

    <footer class="footer">
        <p>Hiago Souza Devlopment.</p>
    </footer>

</div>



</body>
</html>
