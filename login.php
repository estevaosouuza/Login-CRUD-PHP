<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <script src="main.js"></script>
</head>

<?php
session_start();


if (isset($_SESSION['id'])) {
    header('location:index.php');
    
}
?>

<body class="bg-primary">
    <div class="container">
        <div id="login"  class="shadow-lg p-3 mb-5 bg-white rounded">
            <h3>Login</h3>
            <div class="form-group">
                    <form method="POST" action="checar.php">
                            <label for=user>Usuário:</label>
                            <input type="text" name="user" placeholder="Usuario"  class="form-control" required>
                            <label for=senha>Senha:</label>
                            <input type="password" name="senha" placeholder="senha"  class="form-control" required><br>
                            <input type="submit" value="Login"  class="btn btn-primary">
                            <input type="button" value="Cadastrar" onclick="window.location.href='cadastrar.php'"  class="btn btn-dark">
                    </form>
            </div>
        <div>
    </div>




            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
                crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
                crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
                crossorigin="anonymous"></script>
</body>

</html>