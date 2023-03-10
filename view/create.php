<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>

     <!-- Booststrap-->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<?php 
     include('../model/livro.php');
     require('../controller/getSession.php');

     if(isset($_POST['create'])){

        echo create();
     }
?>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary bg-light" data-bs-theme="dark">
        <a class="navbar-brand" href="#">Livraria Santa</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="read.php">Home <span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="create.php">Create</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="../controller/endSession.php">Sair</a>
        </li>
        </div>
    </nav>
    <br>
    <form method="POST" class="row g-3">

    <div class="mb-3">
        <lebel for="exampleInputEmail1" class="form-label">Nome</label>
        <input type="text" class="form-control" id="nome" name='nome' required>
    </div>

    <div class="mb-3">
        <lebel for="paginas" class="form-label">Preço</lebel>
        <input type="text" class="form-control" id="preco" name='preco' required>
    </div>

    <div class="mb-3">
        <lebel for="paginas" class="form-label">Paginas</lebel>
        <input type="text" class="form-control" id="paginas" name='paginas' required>
    </div>

    <div class="mb-3">
        <lebel for="paginas" class="form-label">Autor</lebel>
        <input type="text" class="form-control" id="autor" name='autor' required>
    </div>

    <div class="mb-3">
        <lebel for="paginas" class="form-label">Quantidade</lebel>
        <input type="text" class="form-control" id="quantidade" name='quantidade' required>
    </div>

    <button type="submit" class="btn btn-primary" name='create'>Criar</button>

    </form>
</body>
</html>