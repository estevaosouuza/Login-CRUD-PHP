<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>main</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <script src="main.js"></script>
</head>

<body class="bg-primary">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <form meethod="GET" action="logout.php">
            <input type="submit" value=<?php session_start(); if (isset($_SESSION['id'])){echo 'Deslogar';} else{echo 'Logar';}?> class="btn btn-dark navbar-left" style="margin-right:auto;margin-left:0;">
        </form>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(Página atual)</span></a>
                <a class="nav-item nav-link" href="#">Destaques</a>
                <a class="nav-item nav-link" href="#">Preços</a>
                
            </div>

        </div>


    </nav>
    <div class="container shadow-lg p-3 mb-5 bg-white rounded" style="background-color:white;">
        <div class="row">
            <div class="col-12">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="http://www.melbournefoodandwine.com.au/image-tools.php?w=1720&q=98&src=/recipes/c/chicken_skins.JPG"
                                alt="Primeiro Slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h5>
                                <p>"There is no one who loves pain itself, who seeks after it and wants to have it,
                                    simply because it
                                    is pain..."</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="http://www.melbournefoodandwine.com.au/image-tools.php?w=1720&q=98&src=/recipes/b/burrata1.jpg"
                                alt="Segundo Slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>There is no one who loves pain itself</h5>
                                <p>"There is no one who loves pain itself, who seeks after it and wants to have it,
                                    simply because it
                                    is pain..."</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="https://media.licdn.com/dms/image/C511BAQGBVNxtFMAlOQ/company-background_10000/0?e=2159024400&v=beta&t=wlvQ8_ImOwUvTLMsZ9HV6UeV42W-rYYF2u5MKa8YtRI"
                                alt="Terceiro Slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Neque porro quisquam est qui dolorem</h5>
                                <p>"There is no one who loves pain itself, who seeks after it and wants to have it,
                                    simply because it
                                    is pain..."</p>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Anterior</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Próximo</span>
                    </a>
                </div>
            </div>
            <div class="col-12">
                <h2 class="text-center">Lorem Ipsum</h2>
                <h4 class="text-center">"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur,
                    adipisci velit..."</h4>
                <h5 class="text-center">"There is no one who loves pain itself, who seeks after it and wants to have
                    it, simply because it
                    is pain..."</h5>
                <br>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec feugiat vitae libero in rhoncus.
                    Mauris rutrum urna mauris. Nulla nec aliquam dui. Vivamus viverra nec leo sed porttitor. In eget
                    quam at orci aliquam rutrum. Nullam in vulputate metus, a placerat eros. Pellentesque habitant
                    morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut tempor eleifend augue.
                    Vestibulum id dui id ipsum euismod tincidunt. Aliquam eu hendrerit orci. Proin dui metus, semper
                    nec ipsum et, luctus porttitor felis. Nunc varius hendrerit porttitor. Vestibulum lorem nisi,
                    rutrum ullamcorper congue sed, vehicula et nunc. </p>
                <p>Sed lobortis tellus vitae nulla bibendum molestie. Donec consectetur tristique est, vel sodales
                    risus mollis euismod. Morbi hendrerit porta luctus. Etiam ullamcorper justo eu auctor maximus. Nunc
                    tempor felis diam, vel lobortis nisi porttitor non. Aenean dapibus est nulla, vitae vehicula turpis
                    luctus non. Sed tempor placerat magna, ac condimentum nibh maximus eu. In at condimentum augue.
                    Etiam pulvinar rutrum semper. Morbi volutpat lectus et lectus iaculis, sed convallis lacus
                    venenatis. Mauris non dolor ipsum. Vivamus mattis augue vitae felis blandit, nec dignissim est
                    ullamcorper. </p>
                <p>Vivamus consequat volutpat consectetur. Quisque mauris sapien, consectetur eget luctus lobortis,
                    lobortis non neque. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere
                    cubilia Curae; Morbi ornare augue quis leo sagittis, in imperdiet metus vulputate. Suspendisse
                    laoreet hendrerit sem, at condimentum risus dictum nec. Nulla pellentesque sollicitudin orci at
                    hendrerit. Ut non semper arcu. Maecenas ullamcorper orci sit amet iaculis bibendum. </p>
                <p>Praesent ex metus, elementum non viverra vitae, pretium condimentum urna. Interdum et malesuada
                    fames ac ante ipsum primis in faucibus. Suspendisse tempus viverra orci, et tempor leo sagittis
                    vel. Phasellus viverra at quam et euismod. Mauris elementum, urna sed ultrices convallis, dui dui
                    viverra dolor, nec vehicula nibh nunc porta libero. Morbi mattis rhoncus leo quis convallis.
                    Vivamus blandit, metus in ultricies condimentum, tortor augue volutpat nulla, quis bibendum turpis
                    ante nec risus. Donec a diam justo. </p>
            </div>


            <div class="col-12">
                <form method="POST" action="postar.php">
                    <div class="form-group">
                        <label for="post">Seu comentario:</label>
                        <textarea class="form-control" id="post" rows="3" name="post" required></textarea>
                        <br><br>
                        <input type="submit" value="Postar" class="btn btn-primary">
                    </div>

                </form>


            </div>
            <div class="col-12">
                <div id="areaComentario"><br>
                    <strong><h2>Comentários</h2></strong>
                    <?php
                    include('conexao.php');

                    $sql = mysqli_query($conexao_bd, "SELECT * FROM comentarios ORDER BY dataPost DESC, horas DESC");

                    while ($comentarios = mysqli_fetch_array($sql)) {
                        $sqlUser = mysqli_query($conexao_bd, "SELECT * FROM usuarios WHERE id = $comentarios[idUser]");
                        while ($userSelect = mysqli_fetch_array($sqlUser)) {
                            echo "<div><h4>Usuario: " . $userSelect['usuario'] . "</h4><h6>Data do Post: " . date('d/m/Y', strtotime($comentarios['dataPost'])) . " " . $comentarios['horas'] . "</h6><p>Comentario: " . $comentarios['comentario'] . "</p></div><hr>";
                        }
                    }


                    ?>
                </div>

            </div>
        </div>
    </div>




    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>

</html>