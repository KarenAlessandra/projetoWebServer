<?php

$error = false;
// $email = $password = "";

session_start();

if (empty($_SESSION["logado"]) || $_SESSION["logado"] == false) {
    header("Location: ../login.php");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["email"]) && isset($_POST["password"])) {
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        $password = trim($_POST["password"]);

        if (empty($email) || empty($password)) {
            $error = "Por favor, preencha todos os campos do formulário.";
            echo $error;
        } else if ($email == "user@email.com" && $password == "password") {
            $_SESSION["user"] = 'user';
            $_SESSION["email"] = $email;
            $_SESSION["password"] = $password;
            $_SESSION["logado"] = true;
            echo "Usuário logado com sucesso";
            sleep(5);
            header("Location: ../index.php");
        } else if ($email == "admin@email.com" && $password == "password") {
            $_SESSION["user"] = 'admin';
            $_SESSION["email"] = $email;
            $_SESSION["password"] = $password;
            $_SESSION["logado"] = true;
            echo "Admin logado com sucesso";
            sleep(15);
            header("Location: ../index.php");
        } else {
            $error = "E-mail ou Senha incorretos. Por favor, tente novamente.";
            echo $error;
        }

        if (!empty($_SESSION["logado"]) && $_SESSION["logado"]) {
            header("Location: ../index.php");
        }
    }
}

?>