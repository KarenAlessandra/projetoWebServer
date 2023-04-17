<!doctype html>
<html lang="en">

<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST["email"], FILTER_SANITIZE_EMAIL);
    $password = trim($_POST["password"]);

    if (empty($email) || empty($password)) {
        echo "Por favor, preencha todos os campos do formulário.";
        exit;
    }

    // if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    //     echo "Endereço de E-mail inválido. Por favor, verifique e tente novamente.";
    //     exit;
    // }

    if ($email == "youremail@example.com" && $password == "yourpassword") {
        // setring the session variables
        $_SESSION["email"] = $email;

        // redirect to other page at the end of the script
        header("Location: home.php");
        exit;
    } else {
        echo "E-mail ou Senha incorretos. Por favor, tente novamente.";
        exit;
    }
}
?>

<head>
    <?php
    include("header.php");
    ?>
</head>

<body>
    <main>

        <br /><br />
        <div class="container">
            <div class="card text-center"
                style="padding-top: 4rem; padding-left: 7rem; padding-right: 7rem; padding-bottom: 3rem; border-radius: 1%;">
                <div class="row">
                    <h1 href="./" class="h1_title" alt="Página de Login" style="color: #f3dbcf">Login</h1>
                </div>
                <br />

                <form action="login.php" method="post">
                    <input type="email" class="form-control form-rounded" id="form_email" name="email"
                        placeholder="E-mail">
                    <br /><br />
                    <input type="password" class="form-control form-rounded" id="form_password" name="password"
                        placeholder="Senha">
                    <br />
                    <div class="col" style="text-align: start; padding-left: 1rem;">
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="check">
                            <label class="form-check-label" for="check"
                                style="color: #f3dbcf; margin-bottom: 1rem; ">Continuar Logado</label>
                        </div>
                    </div>
                    <button type="submit" class="btn_send" alt="Botão Logar"> Logar </button>
                </form>

                <br /><br /><br />
                <div>
                    <label style="color: #f3dbcf;">Caso não possua uma conta,</label>
                    <a href="./cadastro.php" alt="Botão-Texto Cadastrar"
                        style="color: white !important; font-size: larger;"> clique aqui </a>
                    <label style="color: #f3dbcf;">para se cadastrar.</label>
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