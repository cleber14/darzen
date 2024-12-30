<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura os dados do formulário
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Validação simples
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Endereço de e-mail inválido!";
        exit;
    }

    // Configuração do e-mail
    $to = "clebersouza42.lima@gmail.com"; // SEU E-MAIL
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    
    $body = "Você recebeu uma nova mensagem do formulário de contato:\n\n";
    $body .= "Nome: $name\n";
    $body .= "E-mail: $email\n";
    $body .= "Assunto: $subject\n";
    $body .= "Mensagem:\n$message\n";

    // Envia o e-mail
    if (mail($to, $subject, $body, $headers)) {
        echo "E-mail enviado com sucesso!";
    } else {
        echo "Erro ao enviar o e-mail. Tente novamente mais tarde.";
    }
} else {
    echo "Método inválido.";
}
?>