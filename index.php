<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- Booststrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</head>

<?php 
    echo "<script>console.log('index.php line 14');</script>";
    if(isset($_POST['login'])){
        echo "<script>console.log('index.php line 16');</script>";
        header('Location: controller/newSession.php?email='.$_POST['email'].'&senha='.$_POST['senha']);
    }
?>
<body>
    <div class="container">
        <form method="post">
            <div class="mb-3">
                <label for="inputEmail" class="form-label">Email address</label>
                <input type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" name="email" required>
            </div>
            <div class="mb-3">
                <label for="inputPassword" class="form-label">Password</label>
                <input type="password" class="form-control" id="inputPassword" name="senha" required>
            </div>
            <button type="submit" class="btn btn-primary" name="login">Submit</button>
        </form>
        <br>
        <div class="Register">
        <a href="view/register.php">Criar Usuario</a>
        </div>
    </div>
</body>
</html>