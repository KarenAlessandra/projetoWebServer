<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['submit'])) {
        $name = trim($_POST['name'], FILTER_SANITIZE_STRING);
        $email = trim($_POST['email'], FILTER_SANITIZE_EMAIL);
        $subject = trim($_POST['subject'], FILTER_SANITIZE_STRING);
        $message = trim($_POST['message']);

        if (empty($name) || empty($email) || empty($subject) || empty($message)) {
            $error = "Por favor, preencha todos os campos do formulário.";
            echo $error;
        } else if (empty($_FILES["File"]["name"])) {
            $error = "Por favor, insira uma imagem.";
            echo $error;
        } else if (empty($_POST["Price"])) {
            $price_err = "Por favor, insira o valor do bolo.";
        } else if (empty($_POST["NameCake"])) {
            $error = "Por favor, insira o título do bolo.";
            echo $error;
        }
        if (empty($_POST["Description"])) {
            $error = "Por favor, insira a descrição do bolo.";
            echo $error;
        } else if (empty($_POST["Weight"])) {
            $error = "Por favor, insira o peso do bolo.";
            echo $error;
        } else {
            echo "Bolo cadastrado com sucesso!";
            sleep(2);
            header("Location: ../cadastrarBolo.php");
        }
    }
}
?>