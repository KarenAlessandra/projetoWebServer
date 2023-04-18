<?php

session_start();
// include 'database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_SESSION['user_id'])) {
        $user_id = $_SESSION['user_id'];
        $senha = $_POST['senha'];
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        if (password_verify($password, $user['password'])) {
            // $sql = "DELETE FROM users WHERE id = ?";
            // $stmt = $conn->prepare($sql);
            // $stmt->bind_param('i', $user_id);
            // $stmt->execute();

            session_destroy();
            echo 'Usuário excluído com sucesso';
            // header('Location: index.php');
            exit();
        } elseif (empty($senha)) {
            $error = 'Por favor, preencha todos os campos.';
            echo $error;
        } else {
            $error = 'Senha inválida.';
            echo $error;
        }
    }
}
?>