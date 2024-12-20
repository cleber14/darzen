<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Darzen</title>
    <link rel="stylesheet" href="../style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <!--header-->
    <?php 
      require "../../includes/header.php";
      require "../../includes/nav.php";
    ?>
    <!--nav menu-->
    <main>
        <div class="video-container">
            <iframe 
              src="https://www.youtube.com/embed/_GNeGcpMA8A?controls=0&modestbranding=1&rel=0&showinfo=0&autohide=1&iv_load_policy=3" 
              title="YouTube video player" 
              frameborder="0" 
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
              referrerpolicy="strict-origin-when-cross-origin" 
              allowfullscreen>
            </iframe>
        </div>

        <label for="hotmart">Curso de inglês com Rodrigo Veroneze</label>
        <div class="container-links">
            <div class="button">
                <img src="../assets/images/logo-hotmart-icone-1024.png" alt="logo-hotmart-icone-1024" width="50px">
                <a href="https://go.hotmart.com/Q97110752X" target="_blank">Curso de inglês Rodrigo Veroneze</a>
            </div>
            <div class="qrCode">
                <img src="../assets/images/qrcode.png" alt="QR code" class="qrCode">
            </div>
        </div>

        <!--Avaliações-->
        <div class="rating">
          <div class="star-container">
          <span class="star" data-value="1">★</span>
          <span class="star" data-value="2">★</span>
          <span class="star" data-value="3">★</span>
          <span class="star" data-value="4">★</span>
          <span class="star" data-value="5">★</span>
          </div>
          <p class="rating-note">Sua opinião é muito importante para nós! ❤️</p>
        </div>
        
        <!--Fechamento avaliações-->

        <article>
            <section>
              <h2>Descrição Geral</h2>
              <p>
                O curso <strong>"Inglês da Sobrevivência"</strong>, criado por Rodrigo Veroneze, oferece uma abordagem prática e acessível 
                para brasileiros que desejam aprender inglês voltado para situações do dia a dia. Com mais de 7 anos vivendo nos 
                Estados Unidos e 4 anos como YouTuber, Rodrigo utiliza sua experiência para ajudar pessoas a superar desafios reais, 
                especialmente tarefas cotidianas em um ambiente onde o inglês é essencial.
              </p>
            </section>
            <section>
              <h2>Pontos Fortes</h2>
              <ul>
                <li><strong>Foco em situações reais:</strong> O curso ensina inglês aplicável no cotidiano, como ir ao mercado, pedir comida ou resolver problemas simples.</li>
                <li><strong>Didática acessível:</strong> Rodrigo utiliza uma linguagem simples, tornando o aprendizado mais fácil e descomplicado.</li>
                <li><strong>Experiência autêntica:</strong> Gravações feitas com câmeras no corpo mostram interações reais, criando um ambiente de aprendizado imersivo.</li>
                <li><strong>Estudo flexível:</strong> Como o curso é online, você pode estudar no seu próprio ritmo e de qualquer lugar.</li>
              </ul>
            </section>
            <section>
              <h2>Pontos de Atenção</h2>
              <ul>
                <li><strong>Acesso restrito:</strong> Não é possível fazer o download das aulas; o conteúdo só está disponível online, o que pode ser um problema em locais sem internet.</li>
                <li><strong>Cobertura limitada:</strong> Ideal para quem quer aprender inglês básico e funcional, mas pode não atender a quem busca fluência avançada ou domínio completo do idioma.</li>
              </ul>
            </section>
            <section>
              <h2>Conclusão</h2>
              <p>
                O <strong>"Inglês da Sobrevivência"</strong> é indicado para quem busca uma solução prática e direta para aprender inglês básico em situações cotidianas. 
                Porém, caso o objetivo seja um aprendizado mais amplo e profundo do idioma, pode ser necessário complementar os estudos com outras ferramentas.
              </p>
              <p>
                Para acessar o curso, é preciso entrar na área de membros disponível no site oficial.
              </p>
            </section>
        </article>
    </main>
</body>
<footer>
    <div class="footer-container">
      <div class="author-info">
        <p>Desenvolvido por <strong>Cleber Souza</strong>, vulgo <strong>Darzen</strong> no YouTube.</p>
        <a href="https://www.youtube.com/@darzen_ofc" target="_blank" rel="noopener noreferrer">Visite meu canal</a>
      </div>
      <div class="social-media">
        <a href="https://www.youtube.com/@darzen_ofc" target="_blank"><div class="icon"><img src="https://images.vexels.com/content/137425/preview/youtube-icon-logo-719479.png" alt="Mídia Social 1"></div></a>
        <a href="https://www.instagram.com/darzen_ofc/" target="_blank"><div class="icon"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Instagram_icon.png/1200px-Instagram_icon.png" alt="Mídia Social 2"></div></a>
      </div> 
    </div>
</footer>
</html>