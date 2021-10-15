<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="css/main.css"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
<?php
date_default_timezone_set('America/Sao_Paulo');
include('conexao.php');
session_start();


if (!isset($_SESSION['id'])) {
    header('refresh:5;url=login.php');
    echo 'Necessario estar logado...';
} else {

    $user = $_SESSION['id'];
    $data = date('d/m/Y');
    $coment = $_POST['post'];
    $hora = date('H:i:s');

    //echo $user.$data.$coment;


    $postar = "INSERT INTO comentarios(idUser,comentario,dataPost,horas) VALUES ($user,'$coment',NOW(),'$hora')";

    if (mysqli_query($conexao_bd,$postar)) {
       header('refresh:1;url=index.php');
        //echo 'Postado !';
        
    } else {
        echo 'Erro ao postar !';
    }
}


?>

<!--Big blue-->
<div class="central">
  <div class="preloader-wrapper big active">
    <div class="spinner-layer spinner-blue-only">
      <div class="circle-clipper left">
        <div class="circle"></div>
      </div><div class="gap-patch">
        <div class="circle"></div>
      </div><div class="circle-clipper right">
        <div class="circle"></div>
      </div>
    </div>
  </div>
  
<div>



<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>
        