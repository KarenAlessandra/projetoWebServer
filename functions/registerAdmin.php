<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["name"]) && isset($_POST["cpf"]) && isset($_POST["email"]) && isset($_POST["senha"]) && isset($_POST["senhaConfirmada"])) {
        $name = filter_var($_POST["name"], FILTER_SANITIZE_STRING);
        $register = filter_var($_POST["cpf"], FILTER_SANITIZE_NUMBER_INT);
        $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
        $senha = filter_var($_POST["senha"], FILTER_SANITIZE_STRING);
        $senhaConfirmada = filter_var($_POST["senhaConfirmada"], FILTER_SANITIZE_STRING);
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
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "db_CakeShop";

        $conn = mysqli_connect($servername, $username, $password, $dbname);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $hashed_password = password_hash($senha, PASSWORD_DEFAULT);

        $sql = "INSERT INTO User (name, cpf, email, senha) VALUES (?, ?, ?, ?)";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "ssss", $name, $cpf, $email, $hashed_password);

        if (mysqli_stmt_execute($stmt)) {
            echo "Usuário cadastrado com sucesso";
            sleep(2);
            header("Location: ../index");
            exit;
        } else {
            echo "Erro ao cadastrar usuário, tente novamente mais tarde.";
        }

        mysqli_stmt_close($stmt);
        mysqli_close($conn);
    }

    exit;
}
?>