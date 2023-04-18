<?php

$name = $email = $cpf = $senha = $senhaConfirmada = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['cpf']) && isset($_POST['senha']) && isset($_POST['senhaConfirmada'])) {
        $name = trim($_POST['name'], FILTER_SANITIZE_STRING);
        $email = trim($_POST['email'], FILTER_SANITIZE_EMAIL);
        $cpf = trim($_POST['cpf'], FILTER_SANITIZE_STRING);
        $senha = trim($_POST['senha']);
        $senhaConfirmada = trim($_POST['senhaConfirmada']);

        if (empty($name) || empty($email) || empty($cpf) || empty($senha) || empty($senha_confirmada)) {
            $error = 'Por favor, preencha todos os campos';
            echo $error;
        } elseif (strlen($senha) < 8) {
            $error = 'Sua senha deve ter no mínimo 8 caracteres';
            echo $error;
        } elseif ($senha != $senha_confirmada) {
            echo 'As senhas não conferem';
        } else {
            //database code here soon
            echo 'Dados do usuário atualizados com sucesso';
            // header('Location: ../perfil.php');
        }
    }
}
?>