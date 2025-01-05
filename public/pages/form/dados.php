<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../../../vendor/autoload.php'; // Include PHPMailer via Composer

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Create PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'sandbox.smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Username = 'e0a7a9add74231'; // Mailtrap Username
        $mail->Password = 'a698f7400bd89e'; // Mailtrap Password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Encryption
        $mail->Port = 587;

        // Recipients
        $mail->setFrom($email, $name); // Sender info
        $mail->addAddress('recipient@example.com'); // Replace with your email

        // Content
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = "<p><strong>Name:</strong> $name</p>
                       <p><strong>Email:</strong> $email</p>
                       <p><strong>Message:</strong> $message</p>";

        // Send email
        $mail->send();
        
        header('Location: ../../index.php');

    } catch (Exception $e) {
        echo "A mensagem não pode ser enviada. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    echo "Invalid request!";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Darzen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
    <?php require "../../../includes/header.php";?>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Darzen</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../../index.php">Início</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="../galery.php">Galeria</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="../cursos.php">Cursos</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>