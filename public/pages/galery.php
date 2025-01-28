<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Darzen</title>
    <link rel="stylesheet" href="../style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3315537284666577" crossorigin="anonymous"></script>
    <style>
        .col-md-4 img{
            width:100%;
            padding: 10px;
            box-shadow: 0px 0px 1px 0px black;
            transition: 0.5s;
            border-radius: 10px;
        }

        .col-md-4 img:hover {
            opacity: 70%;
        }

        .showImage {
            background-color:white;
            width: 600px;
            height:400px;
            z-index: 5;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            box-shadow: 0px 0px 2000px 10px black;
            display: none;
        }
    </style>
</head>
<body>
    <?php 
    require "../../includes/header.php";
    require "../../includes/nav.php";
    ?>
<!--Início Galeria-->
<h3 class="galeryTitle" style="color: white">Darzen Galery</h3>
<div class="social-media">
        <a href="https://www.youtube.com/@darzen_ofc" target="_blank"><div class="icon"><img src="https://images.vexels.com/content/137425/preview/youtube-icon-logo-719479.png" alt="Mídia Social 1"></div></a>
        <a href="https://www.instagram.com/darzen_ofc/" target="_blank"><div class="icon"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Instagram_icon.png/1200px-Instagram_icon.png" alt="Mídia Social 2"></div></a>
</div>

<br><br>

<div class="showImage" style="display: none;">
    <p>Imagem selecionada foi clicada!</p>
</div>

<div>
    <section class="row" id="galery">
        <!--Início Foto-->
        <div class="col-md-4 image1">
            <img src="https://i.postimg.cc/jd7xHtjz/Post-Livro.png" alt="girl-goat">
        </div>
        <!--Fim Foto-->

        <!--Início Foto-->
        <div class="col-md-4 image2">
            <img src="https://i.postimg.cc/W42scZwn/Unknown-Sketch.png" alt="girl-goat">
        </div>
        <!--Fim Foto-->

        <!--Início Foto-->
        <div class="col-md-4 image3">
            <img src="https://i.postimg.cc/yd9CBz29/POST-TECH-ASIAN-INSTA.png" alt="tech">
        </div>
        <!--Fim Foto-->

        <!--Início Foto-->
        <div class="col-md-4 image4">
            <img src="https://i.postimg.cc/43tQTpB1/sketch.png" alt="eye">
        </div>
        <!--Fim Foto-->
    </section>
</div>
</body>
<?php require "../../includes/footer.php";?>
</html>