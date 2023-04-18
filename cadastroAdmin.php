<!doctype html>
<html lang="en">

<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"], FILTER_SANITIZE_STRING);
    $register = trim($_POST["register"], FILTER_SANITIZE_NUMBER_INT);
    $email = trim($_POST["email"], FILTER_SANITIZE_EMAIL);
    $password = trim($_POST["senha"]);
    $confirm_password = trim($_POST["senhaConfirmada"]);

    if (empty($name) || empty($email) || empty($cpf) || empty($senha) || empty($senha_confirmada)) {
        echo 'Por favor, preencha todos os campos';
    } elseif (is_numeric($register) == false) {
        echo 'O registro deve conter apenas números';
    } elseif (strlen($senha) < 8) {
        echo 'Sua senha deve ter no mínimo 8 caracteres';
    } elseif ($senha != $senha_confirmada) {
        echo 'As senhas não conferem';
    } else {
        //database code here soon
        echo 'Usuário cadastrado com sucesso';
    }

    // hashing the password
    $hashed_password = password_hash($senha, PASSWORD_DEFAULT);

    // pending a database to store the data
    $pdo = new PDO("mysql:host=localhost;dbname=mydatabase", "name", "senha");
    $stmt = $pdo->prepare("INSERT INTO users (name, cpf, email, password) VALUES (?, ?, ?, ?)");
    $stmt->execute([$name, $register, $email, $hashed_password]);

    $_SESSION["email"] = $email;

    header("Location: index.php");

    exit;
}
?>

<head>
    <?php
    include("header.php");
    ?>
</head>

<body>
    <main>
        <!-- home -->
        <br /><br />
        <div class="container">
            <div class="card text-center"
                style="padding-top: 4rem; padding-left: 7rem; padding-right: 7rem; padding-bottom: 1rem; border-radius: 1%;">
                <div class="row">
                    <h1 href="./" class="h1_title" style="color: #f3dbcf; padding-bottom: 2rem;">Cadastro</h1>
                </div>
                <br />

                <!-- e-mail, name and text fields -->
                <form action="cadastroAdmin.php" method="post">
                    <input type="name" class="form-control form-rounded" id="name" name="name"
                        placeholder="Nome Completo">
                    <br /><br />
                    <input type="register" class="form-control form-rounded" id="register" name="register"
                        placeholder="Registro Cake Shop">
                    <br /><br />
                    <input type="email" class="form-control form-rounded" id="email" name="email" placeholder="E-mail">
                    <br /><br />
                    <input type="password" class="form-control form-rounded" id="senha" name="senha"
                        placeholder="Senha">
                    <br /><br />
                    <input type="password" class="form-control form-rounded" id="senhaConfirmada" name="senhaConfirmada"
                        placeholder="Confirme sua Senha">
                    <br /><br />
                    <button type="submit" class="btn_send">Cadastrar</button>
                    <br /><br />
                </form>

                <div>
                    <label style="color: #f3dbcf;">Já possui uma conta? </label>
                    <a href="./login.php" style="color: white !important; font-size: larger;"> clique aqui </a>
                    <label style="color: #f3dbcf;">para fazer o login.</label>
                </div>
                <br />
            </div>
        </div>
        </div>

        <br /><br /><br /><br />

        <foot>
            <?php
            include("footer.php");
            ?>
        </foot>

    </main>
</body>

</html>