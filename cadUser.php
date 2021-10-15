
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
include('conexao.php');


$user = $_POST['caduser'];
$passCript = password_hash($_POST['cadsenha'], PASSWORD_DEFAULT);

//echo 'senha criptografada: '.$passCript;

$insert = "INSERT INTO usuarios(usuario,senha) VALUES ('$user','$passCript')";


if (mysqli_query($conexao_bd, $insert)) {
    header('refresh:1;url=login.php');
    echo 'Usuario cadastrado com sucesso...';
} else {
    header('refresh:1;url=cadastrar.php');
    echo 'Usuario  não cadastrado...';
}


?>




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