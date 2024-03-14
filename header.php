<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Fonte que peguei do google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Angkor&display=swap" rel="stylesheet">

</head>
<body>
    
    <!-- Container Fluid para abrigar o logotipo --->
    <div class="container-fluid text-info text-center mt-3">
        <img src="img/logo.png" width="300">
        <h1 style='font-family:Angkor'>Empresa de Motos</h1>
    </div>

    <!-- Barra de Navegaçao -->
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Página inicial</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="formLogin.php">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Container que abrigará o conteádo da página--->
    <div class="container text-center bg-warning mt-3 mb-5">