<?php
include "config/connection.php";

$stmt = $conectar->prepare("SELECT * FROM posts ORDER BY id DESC");
$stmt->execute();

$results = $stmt->fetchALL(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <!--icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <title>Blog::Robert Alves</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="Logo" id="logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Posts</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Conteúdo
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="">Sobre nós</a></li>
                            <li><a class="dropdown-item" href="">O que há de novo</a></li>
                            <li>
                                <h5 class="blog-link">Filtro</h5>
                            </li>
                            <li><a class="dropdown-item" href="#">Filtro</a></li>
                            <li class="nav-item">
                                <a class="dropdown-item" href="category.php?cat=xbox">Xbox</a>
                            </li>
                            <li class="nav-item">
                                <a class="dropdown-item" href="category.php?cat=ps4">PS4</a>
                            </li>
                            <li class="nav-item">
                                <a class="dropdown-item" href="category.php?cat=multiplataforma">Multiplataforma</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <form action="buscar.php" method="post" class="d-flex" role="search">
                    <input name="buscar" class="form-control me-2" type="search" placeholder="Quer pesquisar o quê?" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Pequisar</button>
                </form>                
            </div>
        </div>
    </nav>