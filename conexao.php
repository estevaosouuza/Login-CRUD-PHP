<?php
$conexao_bd = mysqli_connect('localhost', 'root', '', 'forum');
//$conexao_bd = mysqli_connect('sql112.epizy.com', 'epiz_23473439', 'aQSE2VVQRihISn', 'epiz_23473439_comentar');

if(mysqli_connect_errno()){
    echo 'Erro ao tentar se conectar com o BD MySQL: '.mysqli_connect_error();
}

mysqli_set_charset($conexao_bd,'utf8');
?>