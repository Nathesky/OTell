<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestão de controle</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body
style="background-color: #3d3d3d;
       margin: 0;"
>
    <header
     style="position: fixed;
      top: 0;
      width: 100%;"
    >
        <nav class="navbar navbar-expand-lg bg-body-tertiary absolute-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">O'Tell</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="navbar-brand" href="#">{{ Auth::user()->name }}</a>
                    </li>
                       
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{'/'}}">Home</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Hospede
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{'/cadastro-hospede'}}">Cadastro</a></li>
                                <li><a class="dropdown-item" href="{{'/gerenciar-hospede'}}">Gerenciar</a></li>
        
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Funcionário
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{'/cadastro-funcionario'}}">Cadastro</a></li>
                                <li><a class="dropdown-item" href="{{'/gerenciar-funcionario'}}">Gerenciar</a></li>
                                <li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                 Quartos
                            </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{'/cadastro-quarto'}}">Cadastro</a></li>
                                    <li><a class="dropdown-item" href="{{'/gerenciar-quarto'}}">Gerenciar</a></li>
                                </ul>
                            </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Reservas
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{'/cadastro-reserva'}}">Cadastro</a></li>
                                <li><a class="dropdown-item" href="{{'/gerenciar-reserva'}}">Gerenciar</a></li>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
        <div></div>
    </header>

    <main>
        @yield('content')
    </main>
    <footer>

    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>