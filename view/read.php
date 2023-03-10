<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read</title>

    <!-- Booststrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>

<?php
    require('../controller/getSession.php');
    require('../model/livro.php');

    $data = read();

    if(!empty($_GET['id'])){
      echo delete();
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
        <a class="nav-link" href="read.php">Home<span class="sr-only"></span></a>
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
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nome</th>
      <th scope="col">Preço</th>
      <th scope="col">Pagina</th>
      <th scope="col">Autor</th>
      <th scope="col">Quantidade</th>

      <th scope="col"></th>
    </tr>

  </thead>
  <tbody>
    <?php foreach($data as $row){ ?>
    <tr>
      <th scope="row"><?php echo $row['id']; ?></th>
      <td><?php echo $row['nome']; ?></td>
      <td><?php echo $row['preco']; ?></td>
      <td><?php echo $row['paginas']; ?></td>
      <td><?php echo $row['autor']; ?></td>
      <td><?php echo $row['quantidade']; ?></td>
      <td>
        <a href="edit.php?id=<?php echo $row['id']; ?>">✏️</a>
        <a href="read.php?id=<?php echo $row['id']; ?>">🗑️</a>
      </td>
    </tr>
    <?php } ?>
  </tbody>
</table>
</body>
</html>