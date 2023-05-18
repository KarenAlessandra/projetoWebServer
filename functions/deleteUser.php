<?php

session_start();

$servername = "localhost";
$NomeCompleto = "NomeCompleto";
$senha = "Senha";
$dbname = "db_CakeShop";

$conn = mysqli_connect($servername, $NomeCompleto, $Senha, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['senha'])) {

        $senha = $_POST['senha'];

        if (empty($_POST["senha"])) {
            $error = "Senha é obrigatória";
            echo $error;

        } else {
            $id = $_SESSION['id'];

            $sql = "SELECT senha FROM users WHERE id = $id";
            $result = mysqli_query($conn, $sql);
            if ($result && mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                $storedSenha = $row['senha'];

                if ($senha == $Senha) {

                    $deleteSql = "DELETE FROM users WHERE id = $id";
                    $deleteResult = mysqli_query($conn, $deleteSql);

                    if ($deleteResult) {
                        echo "Conta excluída com sucesso";
                        header("Location: ../index");
                    } else {
                        echo "Erro ao excluir conta, tente novamente mais tarde";
                    }
                } else {
                    echo "Senha incorreta";
                }
            } else {
                echo "Usuário não encontrado";
            }
        }
    }
}
mysqli_close($conn);
?>