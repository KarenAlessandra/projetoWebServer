<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["cep"]) && isset($_POST["pais"]) && isset($_POST["estado"]) && isset($_POST["cidade"]) && isset($_POST["bairro"]) && isset($_POST["rua"]) && isset($_POST["numero"]) && isset($_POST["complemento"])) {
        $cep = filter_var(trim($_POST["cep"]), FILTER_SANITIZE_STRING);
        $pais = filter_var(trim($_POST["pais"]), FILTER_SANITIZE_STRING);
        $estado = filter_var(trim($_POST["estado"]), FILTER_SANITIZE_STRING);
        $cidade = filter_var(trim($_POST["cidade"]), FILTER_SANITIZE_STRING);
        $bairro = filter_var(trim($_POST["bairro"]), FILTER_SANITIZE_STRING);
        $rua = filter_var(trim($_POST["rua"]), FILTER_SANITIZE_STRING);
        $numero = filter_var(trim($_POST["numero"]), FILTER_SANITIZE_STRING);
        $complemento = filter_var(trim($_POST["complemento"]), FILTER_SANITIZE_STRING);

        if (empty($cep) || empty($pais) || empty($estado) || empty($cidade) || empty($bairro) || empty($rua) || empty($numero) || empty($complemento)) {
            $error = "Por favor, preencha todos os campos do formulário.";
            echo $error;
        } else {
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "db_CakeShop";

            $conn = mysqli_connect($servername, $username, $password, $dbname);
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            $id = $_SESSION["id"];

            // Prepare the SQL statement
            $sql = "UPDATE User SET cep = ?, pais = ?, estado = ?, cidade = ?, bairro = ?, rua = ?, numero = ?, complemento = ? WHERE id = ?";
            $stmt = mysqli_prepare($conn, $sql);
            mysqli_stmt_bind_param($stmt, "ssssssisi", $cep, $pais, $estado, $cidade, $bairro, $rua, $numero, $complemento, $id);

            if (mysqli_stmt_execute($stmt)) {
                echo "Dados do endereço atualizados com sucesso";
                sleep(2);
                header("Location: ../perfil");
                exit;
            } else {
                echo "Erro ao atualizar os dados do endereço, tente novamente mais tarde.";
            }

            mysqli_stmt_close($stmt);
            mysqli_close($conn);
        }
    }
}
?>