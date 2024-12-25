<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Darzen</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <!--Header-->
    <?php
    require "../includes/header.php";
    ?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

    <div class="container-fluid">
        <a class="navbar-brand" href="#">Darzen</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../index.php">Início</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="pages/galery.php">Galeria</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="pages/cursos.php">Cursos</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>
    <div class="banner"></div>

    <div class="social-media">
        <a href="https://www.youtube.com/@darzen_ofc" target="_blank"><div class="icon"><img src="https://images.vexels.com/content/137425/preview/youtube-icon-logo-719479.png" alt="Mídia Social 1"></div></a>
        <a href="https://www.instagram.com/darzen_ofc/" target="_blank"><div class="icon"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Instagram_icon.png/1200px-Instagram_icon.png" alt="Mídia Social 2"></div></a>
    </div> 

    <!-- Vídeos -->
    <h2 class="recent-videos-h2">Vídeos mais recentes</h2>
    <section class="videosYoutube">
        <div class="info-video" onclick="redirectToLink()" id="video1">
            <img src="assets/images/thumbnail-1.png" alt="" class="thumbnail thumbnail-1">
            <p><strong>VOCÊ PODE SER UM GÊNIO, MAS É PREGUIÇOSO DEMAIS! [EU VOU PROVAR!]</strong></p>
        </div>

        <div class="info-video" onclick="redirectToLink()" id="video2">
            <img src="assets/images/thumbnail-2.png" alt="" class="thumbnail thumbnail-2">
            <p><strong>O que aconteceu com os animes? Por que os clássicos eram tão melhores?</strong></p>
        </div>

        <div class="info-video" onclick="redirectToLink()" id="video3">
            <img src="assets/images/thumbnail-3.png" alt="" class="thumbnail thumbnail-3">
            <p><strong>ESSE ANIME DOS ANOS 90 PREVIU O FUTURO!</strong></p>
        </div>
        
    </section>

    <article class="container-article">
    <!-- Sobre o Canal -->
    <section class="container my-5">
        <h2 class="text-center mb-4">Sobre o Canal</h2>
        <p>
            No meu canal, compartilho minha paixão por arte, ciência e cultura pop, com um olhar que vai além do superficial. Sou fascinado por como os animes podem ser uma ponte para discussões mais profundas, abordando temas como psicologia, ciência e até filosofia, tudo isso de maneira acessível e conectada com o universo dos animes. <br><br>
            Ao longo dos vídeos, exploro tanto o lado criativo quanto o analítico, seja desenhando personagens inspirados nos meus animes favoritos ou refletindo sobre o impacto da mídia na nossa percepção da realidade. Busco, de certa forma, conscientizar e expandir os horizontes do público otaku, mostrando que há muito mais para descobrir além das histórias fantásticas que amamos. <br><br>
        </p>
    </section>

    <!-- Galeria de Artes -->
</article>
<section class="container my-5">
        <h2 class="text-center mb-4">Minhas Artes</h2>
        <div class="row">
            <!-- Exemplo de Imagens -->
            <div class="col-md-4">
                <img src="https://i.postimg.cc/26q8ZJM8/GIRL-GOAT.png" alt="Arte 1" class="img-fluid rounded">
            </div>
            <div class="col-md-4">
                <img src="https://i.postimg.cc/yd9CBz29/POST-TECH-ASIAN-INSTA.png" alt="Arte 2" class="img-fluid rounded">
            </div>
            <div class="col-md-4">
                <img src="https://i.postimg.cc/Sxj5khMs/FoxKevyn.png" alt="Arte 3" class="img-fluid rounded">
            </div>
        </div>

        <button class="seeMore"><a href="pages/galery.php">Ver mais</a></button>
    </section>
<!--Bot ATENDIMENTO-->
<div class="bot-container">
    <p>teste</p>
</div>
<!--Final Bot Atendimento-->
</body>

<script src="script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<?php require "../includes/footer.php";?>
</html>