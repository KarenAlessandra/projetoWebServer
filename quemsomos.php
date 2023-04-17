<!doctype html>
<html lang="en">

<head>
    <?php
    include("header.php");
    ?>
</head>

<body>
    <main>
        <div class="container0">
            <div class="row">
                <div class="d-flex flex-row-reverse">
                    <a href="#deslogar" class="btn_icon"><i class="fa fa-sign-out" alt="Deslogar"></i></a>
                    <a href="./login.php" class="btn_icon"><i class="fa fa-user" alt="Logar"></i></a>
                    &nbsp; &nbsp; &nbsp;
                    <!-- <a href="#cart" class="btn_icon"><i class="fa fa-shopping-cart" alt="Carrinho de Compras"></i></a> -->
                </div>
            </div>
        </div>

        <div class="containerPage">
            <!-- links on navbar -->
            <div class="container1">
                <div class="row row-cols-5 text-center">
                    <a href="./" class="btn_header">Home</a>
                    <a href="./produtos.php" class="btn_header">Produtos</a>
                    <!-- <a href="./" class="btn_title">TITULO</a> -->
                    <img src="./assets/logo.png"></img>
                    <a href="./quemsomos.html" class="btn_header">Quem Somos</a>
                    <a href="./contato.php" class="btn_header">Contato</a>
                </div>
            </div>
            <hr />

            <!-- Home -->
            <br />

            <div class="row">
                <h1 class="h1_title" alt="Página Quem Somos">Sobre nós</h1>
            </div>

            <br /><br />

            <div class="container" style="padding: 3rem; background-color: rgb(45, 60, 51); border-radius: 1%;">
                <div class="row" style="margin-top: 2rem;">
                    <div class="col" style="margin-top: 10px;">
                        <br><br>
                        <img src="./assets/6.jpg" class style="height: 19rem;">
                    </div>
                    <div class="col text-align" style="font-size: 25px; color: #f3dbcf;">
                        <br>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna
                        aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi temporet ♡♡♡
                    </div>
                </div>
                <br /><br /><br />
                <div class="row">

                    <div class="col text-center" style="font-size: 25px; color: #f3dbcf;">
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et
                        dolore magna
                        aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                        commodo
                        consequat. Duis
                        aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                        pariatur. Excepteur
                        sint
                        occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                    </div>
                </div>
                <br><br><br>
                <div class="col">
                    <img src="./assets/5.jpg" style="height: 30rem; margin-bottom: 3rem">
                    <br><br>
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