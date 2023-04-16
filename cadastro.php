<!doctype html>
<html lang="en">

<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"]);
    $cpf = trim($_POST["cpf"]);
    $email = trim($_POST["email"]);
    $password = trim($_POST["senha"]);
    $confirm_password = trim($_POST["senhaConfirmada"]);

    if (empty($name) || empty($cpf) || empty($email) || empty($password) || empty($confirm_password)) {
        echo "Por favor, preencha todos os campos do formulário.";
        exit;
    }

    // if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    //     echo "Endereço de E-mail inválido. Por favor, verifique e tente novamente.";
    //     exit;
    // }

    if ($password !== $confirm_password) {
        echo "As senhas não correspondem. Por favor, tente novamente.";
        exit;
    }

    // hashing the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // pending a database to store the data
    $pdo = new PDO("mysql:host=localhost;dbname=mydatabase", "username", "password");
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
            <div class="card text-center"
                style="padding-top: 4rem; padding-left: 7rem; padding-right: 7rem; padding-bottom: 1rem; border-radius: 1%;">
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

                    <button type="submit" class="btn_send" style="margin-bottom: 2rem;">Cadastrar</button>
                </form>

                <br /><br />
                <div>
                    <label style="color: #f3dbcf;">Já possui uma conta? </label>
                    <a href="./login.php" alt="Botão-Texto Cadastrar"
                        style="color: white !important; font-size: larger;"> clique aqui </a>
                    <label style="color: #f3dbcf;">para fazer o login.</label>
                </div>
                <br />

                <!-- <div>
                    <label style="color: #f3dbcf;">Conta de Administrador? </label>
                    <a href="./cadastroAdmin.html" alt="Botão-Texto Cadastrar"
                        style="color: white !important; font-size: larger;"> clique aqui </a>
                    <label style="color: #f3dbcf;">para se cadastrar.</label>
                </div> -->

                <br /><br />
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