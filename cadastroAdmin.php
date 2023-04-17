<!doctype html>
<html lang="en">

<?php

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
                <form action="functions.php" method="post">
                    <input type="name" class="form-control form-rounded" id="name" placeholder="Nome Completo">
                    <br /><br />
                    <input type="register" class="form-control form-rounded" id="register"
                        placeholder="Registro Cake Shop">
                    <br /><br />
                    <input type="email" class="form-control form-rounded" id="email" placeholder="E-mail">
                    <br /><br />
                    <input type="password" class="form-control form-rounded" id="senha" placeholder="Senha">
                    <br /><br />
                    <input type="password" class="form-control form-rounded" id="senhaConfirmada"
                        placeholder="Confirme sua Senha">
                    <br /><br />
                    <!-- button -->
                    <button type="submit" class="btn_send">Cadastrar</button>

                    <br /><br />
                </form>

                <div>
                    <label style="color: #f3dbcf;">Já possui uma conta? </label>
                    <a href="./login.html" style="color: white !important; font-size: larger;"> clique aqui </a>
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