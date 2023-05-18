<?php

session_start();
// require("../db/conection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $Imagem = $_FILES['imagem'];
    $Preco = filter_var($_POST['preco'], FILTER_SANITIZE_NUMBER_FLOAT);
    $Titulo = filter_var($_POST['titulo'], FILTER_SANITIZE_EMAIL);
    $Descricao = filter_var($_POST['descricao'], FILTER_SANITIZE_STRING);
    $Peso = filter_var($_POST['peso'], FILTER_SANITIZE_NUMBER_FLOAT);

    if (empty($Imagem) || empty($Preco) || empty($Titulo) || empty($Descricao) || empty($Peso)) {
        $error = "Por favor, preencha todos os campos do formulário.";
        echo $error;
    } else if (empty($_FILES["imagem"])) {
        $error = "Por favor, insira a imagem do bolo.";
        echo $error;
    } else if (empty($_POST["preco"])) {
        $error = "Por favor, insira o valor do bolo.";
        echo $error;
    } else if (empty($_POST["titulo"])) {
        $error = "Por favor, insira o título do bolo.";
        echo $error;
    } else if (empty($_POST["descricao"])) {
        $error = "Por favor, insira a descrição do bolo.";
        echo $error;
    } else if (empty($_POST["peso"])) {
        $error = "Por favor, insira o peso do bolo.";
        echo $error;
    } else {

        // Connect to the database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "db_CakeShop";

        $conn = mysqli_connect($servername, $username, $password, $dbname);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Prepare the SQL statement
        $sql = "INSERT INTO `Cake` (`Imagem`, `Preco`, `Titulo`, `Descricao`, `Peso`) VALUES (?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "sdsss", $Imagem, $Preco, $Titulo, $Descricao, $Peso);

        // Execute the SQL statement
        if (mysqli_stmt_execute($stmt)) {
            echo "Bolo cadastrado com sucesso!";
            sleep(2);
            header("Location: ../cadastrarBolo");
        } else {
            echo "Erro ao cadastrar o bolo, tente novamente mais tarde.";
        }

        // Close the statement and database connection
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
    }
}
?>