<?php

$valor = $name = $message = $peso = "";

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET["form_valor"]) && isset($_GET["form_name"]) && isset($_GET["form_message"]) && isset($_GET["form_peso"])) {
        $valor = filter_var($_GET["form_valor"], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
        $name = filter_var($_GET["form_name"], FILTER_SANITIZE_STRING);
        $message = filter_var($_GET["form_message"]);
        $peso = filter_var($_GET["form_peso"], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

        if (empty($valor) || empty($name) || empty($message) || empty($peso)) {
            $error = "Todos os campos são obrigatórios.";
            echo $error;
        } else {
            echo "Cadastro do bolo realizado com sucesso!";
            // header("Location: ../index.php");
        }

    } else {
        $error = "Todos os campos são obrigatórios.";
        echo $error;
    }
}
?>