<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<title>Projeto PHP</title>
</head>
<body>
<div class="container">
 
<nav class="navbar navbar-expand-lg navbar-dark bg-black">
<div class="container-fluid">
<a class="navbar-brand" href="/projeto/lojagamesTI11T/viws/">Jogos On-line </a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"aria-controls="navbarSupportedContent"aria-expanded="false"aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav me-auto mb-2 mb-lg-0">
 
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"role="button" data-bs-toggle="dropdown"aria-expanded="false">
            Usuários
</a>
<ul class="dropdown-menu"aria-labelledby="navbarDropdown">
<li><a class="dropdown-item" href="../viws/cadastrousuarios.php">cadastro</a></li>
<li><a class="dropdown-item" href="../viws/listadeusuarios.php">Visualizar</a></li>
<li><hr class="dropdown-divider"></li>
<li><a class="dropdown-item" href="../viws/listadeusuariosCod.php">Busca por código</a></li>
</ul>
</li>
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"role="button" data-bs-toggle="dropdown"aria-expanded="false">
           Jogos   
 </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="../viws/cadastroJogos.php">Cadastro</a></li>
            <li><a class="dropdown-item" href="../viws/listatudojogos.php">Visualizar Tudo</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="../viws/listatudojogosCod.php">Buscar por código</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Cliente
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="cadastrocliente.php">cadastro</a></li>
            <li><a class="dropdown-item" href="../viws/listadecliente.php">Visualizar</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="../viws/listadeclienteCod.php">Busca por código</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Funcionários
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">cadastro</a></li>
            <li><a class="dropdown-item" href="#">Visualizar</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Busca por código</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Pedidos
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">cadastro</a></li>
            <li><a class="dropdown-item" href="#">Visualizar</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Busca por código</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Procurar" aria-label="Procurar">
        <button class="btn btn-outline-success" type="submit">Procurar</button>
      </form>
    </div>
  </div>
</nav>

