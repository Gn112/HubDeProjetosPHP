<?php
header('Content-Type: text/html; charset=utf-8');
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Exercícios</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand text-white text-center" href="#">
                <img src="images/logo.svg" alt="Logo" width="50" height="40" class="d-inline-block align-text-center">
                Hub de Projetos
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="text-nowrap text-white nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="text-nowrap text-white nav-item">
                        <a class="text-white nav-link active" aria-current="page" href="#">Lista Projetos</a>
                    </li>
                </ul>

                <div
                    class="text-center d-flex flex-wrap justify-content-end align-items-center text-white gap-4  container-fluid">
                    <div>
                        <span class="text-white nav-bar-text material-symbols-outlined">
                            person
                        </span>
                        <a href="#" class="navbar-text m-0 text-white">Usuário</a>
                    </div>
                    <div>
                        <span class="text-white nav-bar-text material-symbols-outlined">
                            logout
                        </span>
                        <a href="#" class="navbar-text m-0 text-white">LogOut</a>
                    </div>
                </div>

                <!-- 
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Pesquisa" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Pesquisa</button>
                </form>
                -->

            </div>
        </div>
    </nav>
    <nav>
        <a href="index.php">Voltar</a>
    </nav>
    <main class="conteudo">
        <div class="conteiner">
            <?php
            include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php");

            ?>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
            crossorigin="anonymous"></script>
</body>

</html