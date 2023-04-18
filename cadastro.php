<!doctype html>
<html lang="en">

<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"], FILTER_SANITIZE_STRING);
    $cpf = trim($_POST["cpf"], FILTER_SANITIZE_STRING);
    $email = trim($_POST["email"], FILTER_SANITIZE_EMAIL);
    $senha = trim($_POST["senha"]);
    $senhaConfirmada = trim($_POST["senhaConfirmada"]);

    if (empty($name) || empty($email) || empty($cpf) || empty($senha) || empty($senhaConfirmada)) {
        echo 'Por favor, preencha todos os campos';
    } elseif (strlen($senha) < 8) {
        echo 'Sua senha deve ter no mínimo 8 caracteres';
    } elseif ($senha != $senhaConfirmada) {
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
    $stmt->execute([$name, $cpf, $email, $hashed_password]);

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
            <div class="cardGenerico text-center">
                <div class="row">
                    <h1 href="./" class="h1_title" style="color: #f3dbcf; padding-bottom: 2rem;">Cadastro</h1>
                </div>
                <br />

                <!-- e-mail, name and text fields -->
                <form action="cadastro.php" method="post">
                    <input type="name" class="form-control form-rounded" id="name" name="name"
                        placeholder="Nome Completo">
                    <br /><br />
                    <input type="cpf" class="form-control form-rounded" id="cpf" name="cpf" placeholder="CPF">
                    <br /><br />
                    <input type="email" class="form-control form-rounded" id="email" name="email" placeholder="E-mail">
                    <br /><br />
                    <input type="password" class="form-control form-rounded" id="senha" name="senha"
                        placeholder="Senha">
                    <br /><br />
                    <input type="password" class="form-control form-rounded" id="senhaConfirmada" name="senhaConfirmada"
                        placeholder="Confirme Senha">
                    <br /><br />

                    <button type="submit" class="btn_send">Cadastrar</button>
                </form>

                <br />
                <div>
                    <label style="color: #f3dbcf;">Já possui uma conta? </label>
                    <a href="./login.php" style="color: white !important; font-size: larger;"> clique aqui </a>
                    <label style="color: #f3dbcf;">para fazer o login.</label>
                </div>
                <br />

                <div>
                    <label style="color: #f3dbcf;">Conta de Administrador? </label>
                    <a href="./cadastroAdmin.php" style="color: white !important; font-size: larger;"> clique aqui </a>
                    <label style="color: #f3dbcf;">para se cadastrar.</label>
                </div>

                <br />
            </div>
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