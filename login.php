<!doctype html>
<html lang="en">

<head>
    <?php
    include("header.php");
    ?>
</head>

<body>
    <main>

        <br /><br />
        <div class="container">
            <div class="cardGenerico text-center">
                <div class="row">
                    <h1 href="./" class="h1_title" style="color: #f3dbcf">Login</h1>
                </div>
                <br />

                <form action="./functions/log.php" method="post">
                    <input type="email" class="form-control form-rounded" id="email" name="email" placeholder="E-mail">
                    <br /><br />
                    <input type="password" class="form-control form-rounded" id="senha" name="password"
                        placeholder="Senha">
                    <br />
                    <div class="col" style="text-align: start; padding-left: 1rem;">
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="check">
                            <label class="form-check-label" for="check"
                                style="color: #f3dbcf; margin-bottom: 1rem; ">Continuar Logado</label>
                        </div>
                        <!-- missing "forgot my password" function, for now -->
                    </div>
                    <button type="submit" class="btn_send"> Logar </button>
                </form>

                <br />
                <div>
                    <label style="color: #f3dbcf;">Caso não possua uma conta,</label>
                    <a href="./cadastro" style="color: white !important; font-size: larger;"> clique aqui </a>
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