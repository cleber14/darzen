<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="shortcut icon" href="../assets/images/LOGO-SITE.png" type="image/x-icon">
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <header>
            <div>
            <h1>Darzen</h1>
            <small>Produtor de conteúdo no Youtube e Instagram</small>
            </div>            
            <img src="https://i.postimg.cc/sfbCnmHq/DALL-E-2024-11-14-23-59.png" alt="capa">
    </header>
    
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
                <a class="nav-link" href="galery.php">Galeria</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="cursos.php">Cursos</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>

    <form action="form/dados.php" method="POST" class="p-4 border rounded shadow">
        <div class="mb-3">
            <label for="name" class="form-label">Your Name:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
        </div>
            
        <div class="mb-3">
            <label for="email" class="form-label">Your Email:</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
        </div>
            
        <div class="mb-3">
            <label for="subject" class="form-label">Subject:</label>
            <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter subject" required>
        </div>
            
        <div class="mb-3">
            <label for="message" class="form-label">Message:</label>
            <textarea class="form-control" id="message" name="message" rows="4" placeholder="Type your message here" required></textarea>
        </div>
            
        <div class="d-grid">
            <button type="submit" class="btn btn-primary">Send Message</button>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
<?php require "../../includes/footer.php"; ?>
</html>