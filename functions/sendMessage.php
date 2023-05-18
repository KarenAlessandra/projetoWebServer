<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['submit'])) {
        $Nome = trim($_POST['name'], FILTER_SANITIZE_STRING);
        $Email = trim($_POST['email'], FILTER_SANITIZE_EMAIL);
        $Assunto = trim($_POST['subject'], FILTER_SANITIZE_STRING);
        $Mensagem = trim($_POST['message']);

        if (empty($Nome) || empty($Email) || empty($Assunto) || empty($Mensagem)) {
            $error = "Por favor, preencha todos os campos do formulário.";
            echo $error;
        } else {
            echo "Mensagem enviada com sucesso!";
            sleep(2);
            header("Location: ../contato");
        }

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "db_CakeShop";

        $conn = mysqli_connect($servername, $username, $password, $dbname);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "INSERT   INTO Contato (Nome, Email, Assunto, Mensagem) VALUES (?, ?, ?, ?)";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "ssss", $Nome, $Email, $Assunto, $Mensagem);

        if (mysqli_stmt_execute($stmt)) {
            echo "Mensagem salva no banco de dados.";
        } else {
            echo "Erro ao salvar a mensagem no banco de dados.";
        }

        mysqli_stmt_close($stmt);
        mysqli_close($conn);

        $mailTo = "pedrozo@alunos.utfpr.edu.br";
        $headers = "From: " . $Dmail . "\r\n";
        $txt = "Você recebeu um e-mail de " . $Nome . ".\n\n" . $Messagem;

        mail($mailTo, $Assunto, $txt, $Email);

    }
}
?>