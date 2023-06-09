<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"], FILTER_SANITIZE_STRING);
    $cpf = trim($_POST["cpf"], FILTER_SANITIZE_STRING);
    $email = trim($_POST["email"], FILTER_SANITIZE_EMAIL);
    $senha = trim($_POST["senha"]);
    $senhaConfirmada = trim($_POST["senhaConfirmada"]);

    if (empty($name) || empty($email) || empty($cpf) || empty($senha) || empty($senhaConfirmada)) {
        $error = 'Por favor, preencha todos os campos';
        echo $error;
    } elseif (strlen($senha) < 8) {
        $error = 'Sua senha deve ter no mínimo 8 caracteres';
        echo $error;
    } elseif ($senha != $senhaConfirmada) {
        $error = 'As senhas não conferem';
        echo $error;
    } else {
        //database code here soon
        echo 'Usuário cadastrado com sucesso';
        sleep(2);
        header("Location: ../index");
    }

    $hashed_password = password_hash($senha, PASSWORD_DEFAULT);

    $sql = "INSERT INTO `User` (`NomeCompleto`, `Email`, `Cpf`, `Senha`, `Cep`, `Pais`, `Estado`, `Cidade`, `Bairro`, `Rua`, `Numero`, `Complemento`, `ID`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NULL);";
    $pdo = new PDO("mysql:host=localhost;dbname=mydatabase", "name", "senha");
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$name, $cpf, $email, $hashed_password]);

    $_SESSION["email"] = $email;

    sleep(2);
    header("Location: ./index");

    exit;
}
?>