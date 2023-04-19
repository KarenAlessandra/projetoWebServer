<?php

session_start();

// $cep = $pais = $estado = $cidade = $bairro = $rua = $numero = $complemento = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["cep"]) && isset($_POST["pais"]) && isset($_POST["estado"]) && isset($_POST["cidade"]) && isset($_POST["bairro"]) && isset($_POST["rua"]) && isset($_POST["numero"]) && isset($_POST["complemento"])) {
        $cep = filter_var(trim($_POST["cep"]), FILTER_SANITIZE_STRING);
        $pais = filter_var(trim($_POST["pais"]), FILTER_SANITIZE_STRING);
        $estado = filter_var(trim($_POST["estado"]), FILTER_SANITIZE_STRING);
        $cidade = filter_var(trim($_POST["cidade"]), FILTER_SANITIZE_STRING);
        $bairro = filter_var(trim($_POST["bairro"]), FILTER_SANITIZE_STRING);
        $rua = filter_var(trim($_POST["rua"]), FILTER_SANITIZE_STRING);
        $numero = filter_var(trim($_POST["numero"]), FILTER_SANITIZE_NUMBER_INT);
        $complemento = filter_var(trim($_POST["complemento"]), FILTER_SANITIZE_STRING);

        if (empty($cep) || empty($pais) || empty($estado) || empty($cidade) || empty($bairro) || empty($rua) || empty($numero) || empty($complemento)) {
            $error = "Por favor, preencha todos os campos do formulário.";
            echo $error;
        } elseif (!is_numeric($numero)) {
            $error = "O número deve ser um valor numérico.";
            echo $error;
        } else {
            $sql = "UPDATE users SET cep = '$cep', pais = '$pais', estado = '$estado', cidade = '$cidade', bairro = '$bairro', rua = '$rua', numero = '$numero', complemento = '$complemento' WHERE id = $id";
            echo "Dados do endereço atualizados com sucesso";
            sleep(2);
            header("Location: ../perfil.php");
        }
    }
}
?>