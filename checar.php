<?php

include('conexao.php');

$usuario = $_POST['user'];
$senha = $_POST['senha'];


$sql = mysqli_query($conexao_bd, "SELECT*FROM usuarios WHERE usuario = '$usuario'");




if ($sql->num_rows > 0) {


    while ($campo = $sql->fetch_assoc()) {
        $senhaHash = password_hash($senha, PASSWORD_DEFAULT);




        if (password_verify($senha, $campo['senha'])) {
            session_start();
            $_SESSION['id'] = $campo['id'];
            $_SESSION['usuario'] = $usuario;
            $_SESSION['senha'] = $senha;
            header('location:index.php');


        } else {
            header('refresh:2;url=login.php');
            echo 'Senha incorreta...';
        }
    }
} else {
    header('refresh:5;url=login.php');
    echo 'Usuário incorreto. Aguarde....';




}


?>