<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Darzen</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="shortcut icon" href="assets/images/LOGO-SITE.png" type="image/x-icon">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3315537284666577" crossorigin="anonymous"></script>
</head>
<body>
    <!--Header-->
    <?php
    require "../includes/header.php";
    ?>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><h1>Darzen</h1></a>
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
    <h2 class="recent-videos-h2">VÍDEOS MAIS RECENTE</h2>

    <section class="videosYoutube">
        <div class="info-video" onclick="redirectToLink()" id="video6">
            <img src="assets/images/aprovacao.png" alt="" class="thumbnail thumbnail-1">
            <p><strong>VOCÊ SE PREOCUPA DEMAIS COM A APROVAÇÃO DOS OUTROS! ISSO ESTÁ TE SABOTANDO! [ENTENDA]</strong></p>
        </div>

        <div class="info-video" onclick="redirectToLink()" id="video5">
            <img src="assets/images/Thumbnail-oportunity3.png" alt="" class="thumbnail thumbnail-2">
            <p><strong>NÃO É DESMOTIVAÇÃO, É FALTA DE CLAREZA... [EU VOU TE AJUDAR!]
            </strong></p>
        </div>

        <div class="info-video" onclick="redirectToLink()" id="video4">
            <img src="assets/images/brainrot-thumbnail.png" alt="" class="thumbnail thumbnail-3">
            <p><strong>SEU CÉREBRO TÁ VICIADO EM ESTÍMULOS RÁPIDOS! [O QUE É BRAINROT?]
            </strong></p>
        </div>
        
    </section>

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
        Oi, eu sou o Darzen! Talvez você já tenha me visto por aqui. Vou te contar um pouco sobre mim e o que você vai encontrar no canal. Sou designer, músico e apaixonado por estudos sobre o cérebro 🧠. 
        <br><br> 
        Neste espaço, meu foco é compartilhar conteúdos de auto desenvolvimento, especialmente voltados para o público jovem. Em 2025, meus projetos têm como objetivo ajudar você a aprimorar habilidades essenciais, desde o fortalecimento da mentalidade 🧠 até o desenvolvimento de competências práticas para a vida e os estudos 📚. 
        <br><br> 
        Vou trazer dicas para melhorar a produtividade, lidar com os desafios do dia a dia, e até explorar como os conhecimentos de psicologia e ciência 🔬 podem te ajudar a entender melhor a si mesmo. 
        <br><br> 
        Além disso, não faltam reflexões sobre como podemos aplicar o que aprendemos no universo dos animes para o nosso crescimento pessoal 🚀. A ideia é te motivar a se tornar a melhor versão de você mesmo, enfrentando os obstáculos com confiança e propósito.

        </p>
    </section>

    <!-- Galeria de Artes -->
</article>
<section class="container my-5">
        <h2 class="text-center mb-4">Me siga no instagram</h2>
        <div class="social-media">
            <a href="https://www.instagram.com/darzen_ofc/" target="_blank"><div class="icon"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Instagram_icon.png/1200px-Instagram_icon.png" alt="Mídia Social 2"></div></a>
            <br>
        </div>
        <small>Fique por dentro dos bastidores dos vídeos, criação de concepts e projetos!</small>
        <br>

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
<div class="botCicleClosed">
    <ion-icon class="chatbubbles" name="chatbubbles"></ion-icon>
</div>

<div class="bot-container">

    <!--Close Buttom-->
    <ion-icon class="close-button" name="close-circle" ></ion-icon>
    <!--Close Buttom-->

    <div class="person-bot">
        <img src="assets/images/robot.png" style="width: 100%" alt="robot">
    </div>

    <p class="bot-message">🤖 Ei, posso te ajudar com algo? </p>
    <p class="bot-message">
    📚 Como fazer para acessar o eBook <br>
    <small>Para baixar <a href="pages/cursos.php">clique aqui</a></small><br>
    <br>
    🌍 Como fazer para adquirir o curso de inglês?<br>
    <small>Clique <a href="pages/cursos.php">aqui</a> para acessar a página de cursos</small><br><br>
    ✉️ Quer entrar em contato?<br>
    mande um email clicando <a href="pages/contato.php">aqui</a><br><br>
    </p>
</div>
<!--Final Bot Atendimento-->
</body>

<script>
let botCicleClosed = document.querySelector(".botCicleClosed");
let botContainer = document.querySelector(".bot-container");
let closeButton = document.querySelector(".close-button");

closeButton.addEventListener("click", function() {
    botContainer.style.display = "none";
    botCicleClosed.style.display = "block";
});

botCicleClosed.addEventListener("click", function() {
    botContainer.style.display = "block"
    botCicleClosed.style.display = "none";
})
</script>

<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
<script src="script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<?php require "../includes/footer.php";?>
</html>