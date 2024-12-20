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
            <a class="nav-link" href="pages/assets.php">Assets</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="pages/cursos.php">Cursos</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>
    <div class="banner">
        <img src="assets/images/banner.png" alt="banner" class="banner-img">
    </div>

    <div class="social-media">
        <a href="https://www.youtube.com/@darzen_ofc" target="_blank"><div class="icon"><img src="https://images.vexels.com/content/137425/preview/youtube-icon-logo-719479.png" alt="Mídia Social 1"></div></a>
        <a href="https://www.instagram.com/darzen_ofc/" target="_blank"><div class="icon"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Instagram_icon.png/1200px-Instagram_icon.png" alt="Mídia Social 2"></div></a>
    </div> 

    <article class="container-article">
        <!-- Sobre o Canal -->
    <section class="container my-5">
        <h2 class="text-center mb-4">Sobre o Canal</h2>
        <p>
            No meu canal, compartilho minha paixão por arte, ciência e cultura pop, com um olhar que vai além do superficial. Sou fascinado por como os animes podem ser uma ponte para discussões mais profundas, abordando temas como psicologia, ciência e até filosofia, tudo isso de maneira acessível e conectada com o universo dos animes. <br><br>
            Ao longo dos vídeos, exploro tanto o lado criativo quanto o analítico, seja desenhando personagens inspirados nos meus animes favoritos ou refletindo sobre o impacto da mídia na nossa percepção da realidade. Busco, de certa forma, conscientizar e expandir os horizontes do público otaku, mostrando que há muito mais para descobrir além das histórias fantásticas que amamos. <br><br>
            Meu trabalho também é uma mistura de várias disciplinas, como design, música e 3D. Não apenas produzo conteúdos visuais, mas também crio músicas no estilo anime e me aprofundo em ferramentas como o Blender, sempre compartilhando o processo criativo com a galera. No fundo, o que mais me motiva é unir essas diversas áreas de interesse e criar projetos que conectem arte, aprendizado e entretenimento de forma única.
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
</body>
<?php require "../includes/footer.php";?>
</html>

