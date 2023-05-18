<?php

session_start();
// require("../db/conection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $Imagem = $_FILES['imagem'];
    $Preco = filter_var($_POST['preco'], FILTER_SANITIZE_NUMBER_FLOAT);
    $Titulo = filter_var($_POST['titulo'], FILTER_SANITIZE_EMAIL);
    $Descricao = filter_var($_POST['descricao'], FILTER_SANITIZE_STRING);

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
        echo "foi 3";
        $sql = "INSERT INTO `Cake` (`Imagem`, `Preco`, `Titulo`, `Descricao`, `Peso`) VALUES (?, ?, ?, ?, ?, ?);";
        $pdo = new PDO("mysql:host=localhost;dbname=db_CakeShop", "root", "");
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$Imagem, $Preco, $Titulo, $Descricao, $Peso]);

        echo "Bolo cadastrado com sucesso!";
        sleep(2);
        header("Location: ../cadastrarBolo.php");
    }
}
?>