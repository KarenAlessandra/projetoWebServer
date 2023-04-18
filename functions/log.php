<?php

$email = $password = "";

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["email"]) && isset($_POST["password"])) {
        $email = trim($_POST["email"], FILTER_SANITIZE_EMAIL);
        $password = trim($_POST["password"]);

        if (empty($email) || empty($password)) {
            $error = "Por favor, preencha todos os campos do formulário.";
            echo $error;
        } elseif ($email == "youremail@example.com" && $password == "yourpassword") {
            $_SESSION["email"] = $email;
            // header("Location: ../index.php");

        } else {
            $error = "E-mail ou Senha incorretos. Por favor, tente novamente.";
            echo $error;
        }
    }
}
?>