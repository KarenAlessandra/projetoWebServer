<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['senha'])) {
        $senha = $_POST['senha'];

        if (empty($_POST["senha"])) {
            $error = "Senha é obrigatória";
            echo $error;

        } else if ($senha == $senha) {
            //delete the user
            $sql = "DELETE FROM users WHERE id = $id";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "Conta excluída com sucesso";
                header("Location: ../index.php");
            } else {
                echo "Erro ao excluir conta, tente novamente mais tarde";
            }
        } else {
            echo "Senha incorreta";
        }
    }
}
?>