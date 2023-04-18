<?php
session_start();

$name = $cpf = $email = $senha = $senhaConfirmada = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"], FILTER_SANITIZE_STRING);
    $cpf = trim($_POST["cpf"], FILTER_SANITIZE_STRING);
    $email = trim($_POST["email"], FILTER_SANITIZE_EMAIL);
    $senha = trim($_POST["senha"]);
    $senhaConfirmada = trim($_POST["senhaConfirmada"]);

    if (empty($name) || empty($email) || empty($cpf) || empty($senha) || empty($senhaConfirmada)) {
        echo 'Por favor, preencha todos os campos';
    } elseif (strlen($senha) < 8) {
        echo 'Sua senha deve ter no mínimo 8 caracteres';
    } elseif ($senha != $senhaConfirmada) {
        echo 'As senhas não conferem';
    } else {
        //database code here soon
        echo 'Usuário cadastrado com sucesso';
    }

    // hashing the password
    $hashed_password = password_hash($senha, PASSWORD_DEFAULT);

    // pending a database to store the data
    $pdo = new PDO("mysql:host=localhost;dbname=mydatabase", "name", "senha");
    $stmt = $pdo->prepare("INSERT INTO users (name, cpf, email, password) VALUES (?, ?, ?, ?)");
    $stmt->execute([$name, $cpf, $email, $hashed_password]);

    $_SESSION["email"] = $email;

    header("Location: ./index.php");

    exit;
}
?>