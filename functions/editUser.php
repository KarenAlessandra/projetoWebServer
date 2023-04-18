<?php

$name = $email = $cpf = $senha = $senhaConfirmada = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['cpf']) && isset($_POST['senha']) && isset($_POST['senhaConfirmada'])) {
        $name = trim($_POST['name'], FILTER_SANITIZE_STRING);
        $email = trim($_POST['email'], FILTER_SANITIZE_EMAIL);
        $cpf = trim($_POST['cpf'], FILTER_SANITIZE_NUMBER_INT);
        $senha = trim($_POST['senha']);
        $senhaConfirmada = trim($_POST['senhaConfirmada']);

        if (empty($name) || empty($email) || empty($cpf) || empty($senha) || empty($senha_confirmada)) {
            echo 'Por favor, preencha todos os campos';
        } elseif (strlen($senha) < 8) {
            echo 'Sua senha deve ter no mínimo 8 caracteres';
        } elseif ($senha != $senha_confirmada) {
            echo 'As senhas não conferem';
        } else {
            //database code here soon
            echo 'Dados do usuário atualizados com sucesso';
            header('Location: ../perfil.php');
        }
    }
}
?>