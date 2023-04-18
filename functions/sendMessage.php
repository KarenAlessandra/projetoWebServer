<?php

$name = $email = $subject = $message = "";

// if (isset($_POST['submit'])) {
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name'], FILTER_SANITIZE_STRING);
    $email = trim($_POST['email'], FILTER_SANITIZE_EMAIL);
    $subject = trim($_POST['subject'], FILTER_SANITIZE_STRING);
    $message = trim($_POST['message']);

    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        echo "Por favor, preencha todos os campos do formulário.";
    } else {
        echo "Mensagem enviada com sucesso!";
    }

    $mailTo = "karen.pedrozo@hotmail.com";
    $headers = "From: " . $email . "\r\n";
    $txt = "You have recived an email from" . $name . ".\n\n" . $message;

    mail($mailTo, $subject, $txt, $email);

    // if (mail($mailTo, $subject, $txt, $email) == true) {
    //     echo "Mensagem enviada com sucesso!";
    // } else {
    //     echo "Erro ao enviar mensagem. Tente novamente.";
    // }
}
?>