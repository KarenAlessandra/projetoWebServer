<?php

if (isset($_POST['submit'])) {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $subject = trim($_POST['subject']);
    $message = trim($_POST['message']);

    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        echo "Por favor, preencha todos os campos do formulário.";
        printf("Por favor, preencha todos os campos do formulário.");
        exit;
    }

    $mailTo = "karen.pedrozo@hotmail.com";
    $headers = "From: " . $email . "\r\n";
    $txt = "You have recived an email from" . $name . ".\n\n" . $message;

    mail($mailTo, $subject, $txt, $email);
    header("Location: index.php?mailsend");

    if (mail($mailTo, $subject, $txt, $email)) {
        echo "Obrigado pela sua mensagem! Entraremos em contato em breve.";
    } else {
        echo "Desculpe, houve um problema ao enviar sua mensagem. Por favor, tente novamente mais tarde.";
    }
}

?>