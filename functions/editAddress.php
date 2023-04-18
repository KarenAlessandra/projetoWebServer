<?php

session_start();

$cep = $pais = $estado = $cidade = $bairro = $rua = $numero = $complemento = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["cep"]) && isset($_POST["pais"]) && isset($_POST["estado"]) && isset($_POST["cidade"]) && isset($_POST["bairro"]) && isset($_POST["rua"]) && isset($_POST["numero"]) && isset($_POST["complemento"])) {
        $cep = $_POST["cep"];
        $pais = $_POST["pais"];
        $estado = $_POST["estado"];
        $cidade = $_POST["cidade"];
        $bairro = $_POST["bairro"];
        $rua = $_POST["rua"];
        $numero = $_POST["numero"];
        $complemento = $_POST["complemento"];

        if (empty($cep) || empty($pais) || empty($estado) || empty($cidade) || empty($bairro) || empty($rua) || empty($numero) || empty($complemento)) {
            echo "Por favor, preencha todos os campos do formulário.";
        } else {
            //database code here soon
            echo "Dados do endereço atualizados com sucesso";
            // header("Location: ../perfil.php");
        }
    }
}
?>