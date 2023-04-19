<?php

// $email = $password = "";

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["email"]) && isset($_POST["password"])) {
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        $password = trim($_POST["password"]);

        if (empty($email) || empty($password)) {
            $error = "Por favor, preencha todos os campos do formulário.";
            echo $error;
        } else if ($email == "youremail@example.com" && $password == "yourpassword") {
            $_SESSION["email"] = $email;
            $_SESSION["password"] = $password;
            echo "Usuário logado com sucesso";
            sleep(2);
            header("Location: ../index.php");
        } else {
            $error = "E-mail ou Senha incorretos. Por favor, tente novamente.";
            echo $error;
        }
    }
}

?>