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

    <article class="container-article">
        <!-- Sobre o Canal -->
    <section class="container my-5">
        <h2 class="text-center mb-4">Sobre o Canal</h2>
        <p>
            No meu canal, eu abordo temas de entretenimento e animes, explorando como a mídia molda nossa percepção da realidade. 
            Em vídeos como o próximo sobre "pseudo-gênios", desmascaro como algumas obras influenciam os espectadores com ideias equivocadas, 
            mostrando que genialidade está mais ligada a esforço do que a talento nato.
        </p>
    </section>

    <!-- Habilidades -->
    <section class="container my-5">
        <h2 class="text-center mb-4">Habilidades e Projetos</h2>
        <ul>
            <li>
                <strong>Desenhar:</strong> Dicas para melhorar no estilo anime, desde anatomia até sombreamento.
            </li>
            <li>
                <strong>Ferramentas 3D com Blender:</strong> Participe de desafios de 7 dias comigo, criando algo incrível no Blender!
            </li>
            <li>
                <strong>Música:</strong> Produção de músicas no estilo anime, perfeitas para estudar ou relaxar.
            </li>
        </ul>
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
    </section>
</body>
</html>

