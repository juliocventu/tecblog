<?php
    /**
     * Inclusão de arquivos padronizados do nosso projeto
     */
    include "../funcoes/configuracao.php";  // Inclusão do arquivo de configuração do nosso projeto
    include "../funcoes/conecta.php";       // Inclusão do arquivo de conexão com banco de dados
    include "../funcoes/funcoes.php";       // Inclusão do arquivo de funções do nosso projeto
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Curso Técnico Desenvolvimento Web Senac"/>
    <meta name="description" content="PI - projeto Integrador dos alunos do curso técnico em desenvolvimento web SENAC Erechim">
    <meta name="keywords" content="Blog, Bolg Tecnologia, Tecnologia, Desenvolvimento web, desenvolvimento">
    

    <title>TecBlog</title>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- <script src="" ></script> -->
    
    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="../css/style.css" rel="stylesheet">

</head>
<body>
    <!-- Header --> 
    <header id="header" class="container-fluid bg-dark">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a href="/" class="navbar-brand" id="main-logo" title="Nome do projeto" name="Nome do projeto">TecBlog</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contato.php">Contato</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/login.php">Login</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>