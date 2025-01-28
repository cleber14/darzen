<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Darzen</title>
    <link rel="stylesheet" href="../style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3315537284666577" crossorigin="anonymous"></script>
    <style>
      h3 {
        text-align: center;
        margin-bottom: 20px;
      }
      .redirectToCourse {
        background-color: white;
        padding: 20px;
        box-shadow: 1px 1px 1px 1px rgba(0, 0, 0, 0.185);
        width: fit-content;
        height:fit-content;
        border-radius: 12px;
        margin:auto;
      }

      .course1 {
        display: flex;
      }
      .course1 ion-icon {
        font-size: 30px;
        margin-right: 20px;
      }

      .redirectToCourse .course1 a{
        text-decoration:none;
        font-size: 20px;
        text-align: center;
        color: orange;
      }

    </style>
  </head>
<body>
    <!--header-->
    <?php 
      require "../../includes/header.php";
      require "../../includes/nav.php";
    ?>

    <section class="coursesList">
      <h3 style="color: white">eBooks</h3>
      
      <div class="ebooks-container">
        <img src="https://i.postimg.cc/xCrjM51z/Ingl-s-com-ANIME.png" style="width: 200px" alt="capaeBook">
        
        <div class="desc">
          <div class="free"><p>Gratuito</p>
          </div>
          <small>Aprenda inglês de uma maneira divertida e envolvente com Inglês com Animes! 
            Este eBook traz uma abordagem única para aprender o idioma, usando o universo dos 
            animes como ferramenta para te ajudar a expandir seu vocabulário.</small>
        </div>

        <ul>
          <li><a href="../ebooks/ingles-com-anime.pdf" download="ingles-com-anime.pdf">eBook Inglês com Animes</a></li>
        </ul>
      </div>
    </section>

    <h3 style="color: white">Cursos e afiliações</h3>

    <section class="redirectToCourse">
      <div class="course1">
      <ion-icon name="play-circle-outline"></ion-icon>
      <a href="courses/englishcourse.php"><p>Curso de inglês com Rodrigo Veroneze</p></a>
      </div>
    </section>

</body>
<?php require "../../includes/footer.php";?>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</html>