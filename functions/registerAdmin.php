<?php
session_start();

$name = $register = $email = $senha = $senhaConfirmada = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["name"]) && isset($_POST["register"]) && isset($_POST["email"]) && isset($_POST["senha"]) && isset($_POST["senhaConfirmada"])) {
        $name = filter_var($_POST["name"], FILTER_SANITIZE_STRING);
        $register = filter_var($_POST["register"], FILTER_SANITIZE_NUMBER_INT);
        $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
        $senha = filter_var($_POST["senha"]);
        $senhaConfirmada = filter_var($_POST["senhaConfirmada"]);
    } else {
        $error = "Todos os campos são obrigatórios.";
        echo $error;
    }

    if (empty($name) || empty($register) || empty($email) || empty($senha) || empty($senhaConfirmada)) {
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
        // header("Location: ../index.php");
    }

    // hashing the password
    $hashed_password = password_hash($senha, PASSWORD_DEFAULT);

    // pending a database to store the data :p
    // $pdo = new PDO("mysql:host=localhost;dbname=mydatabase", "name", "senha");
    // $stmt = $pdo->prepare("INSERT INTO users (name, cpf, email, senha) VALUES (?, ?, ?, ?)");
    // $stmt->execute([$name, $register, $email, $hashed_password]);

    $_SESSION["email"] = $email;

    header("Location: ./index.php");

    exit;
}
?>