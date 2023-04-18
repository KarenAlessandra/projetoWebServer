<?php

session_start();

$cep = $pais = $estado = $cidade = $bairro = $rua = $numero = $complemento = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["cep"]) && isset($_POST["pais"]) && isset($_POST["estado"]) && isset($_POST["cidade"]) && isset($_POST["bairro"]) && isset($_POST["rua"]) && isset($_POST["numero"]) && isset($_POST["complemento"])) {
        $cep = trim($_POST["cep"], FILTER_SANITIZE_STRING);
        $pais = trim($_POST["pais"], FILTER_SANITIZE_STRING);
        $estado = trim($_POST["estado"], FILTER_SANITIZE_STRING);
        $cidade = trim($_POST["cidade"], FILTER_SANITIZE_STRING);
        $bairro = trim($_POST["bairro"], FILTER_SANITIZE_STRING);
        $rua = trim($_POST["rua"], FILTER_SANITIZE_STRING);
        $numero = trim($_POST["numero"], FILTER_SANITIZE_NUMBER_INT);
        $complemento = trim($_POST["complemento"], FILTER_SANITIZE_STRING);

        if (empty($cep) || empty($pais) || empty($estado) || empty($cidade) || empty($bairro) || empty($rua) || empty($numero) || empty($complemento)) {
            $error = "Por favor, preencha todos os campos do formulário.";
            echo $error;
        } else {
            //database code here soon
            echo "Dados do endereço atualizados com sucesso";
            // header("Location: ../perfil.php");
        }
    }
}
?>