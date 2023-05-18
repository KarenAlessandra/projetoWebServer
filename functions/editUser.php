<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['cpf']) && isset($_POST['senha']) && isset($_POST['senhaConfirmada'])) {
        $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
        $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
        $cpf = filter_var(trim($_POST['cpf']), FILTER_SANITIZE_STRING);
        $senha = trim($_POST['senha']);
        $senhaConfirmada = trim($_POST['senhaConfirmada']);

        if (empty($name) || empty($email) || empty($cpf) || empty($senha) || empty($senhaConfirmada)) {
            $error = 'Por favor, preencha todos os campos';
            echo $error;
        } elseif (strlen($senha) < 8) {
            $error = 'Sua senha deve ter no mínimo 8 caracteres';
            echo $error;
        } elseif ($senha !== $senhaConfirmada) {
            echo 'As senhas não conferem';
        } else {
            $sql = "UPDATE User SET name = '$name', email = '$email', cpf = '$cpf', senha = '$senha' WHERE id = $id";
            echo 'Dados do usuário atualizados com sucesso';
            sleep(2);
            header('Location: ../perfil');

            mysqli_stmt_close($stmt);
            mysqli_close($conn);
        }
    }
}