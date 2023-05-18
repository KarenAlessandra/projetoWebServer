<!doctype html>
<html lang="en">

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
                    <h1 class="h1_title" style="color: #f3dbcf; padding-bottom: 2rem;">Cadastro</h1>
                </div>
                <br />

                <!-- e-mail, name and text fields -->
                <form action="./functions/registerAdmin.php" method="post">
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
                    <a href="./login" style="color: white !important; font-size: larger;"> clique aqui </a>
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