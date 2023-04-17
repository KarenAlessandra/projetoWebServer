<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- page's name -->
    <title>Loja de Bolo</title>

    <!-- imports-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

    <!-- linkando os estilos do css.style ao html -->
    <link href="./style.css" rel="stylesheet">

    <div class="container0">
        <div class="row">
            <div class="d-flex flex-row-reverse">
                &nbsp;&nbsp;
                <li class="nav-item dropdown">
                    <a class="nav-item dropdown" data-bs-toggle="dropdown"><i class="fa fa-user"></i></a>
                    </a>
                    <ul class="dropdown-menu text-center">
                        <li><a class="dropdown-item" href="./cadastroBolo.php">Add Bolo <i
                                    class="fa fa-birthday-cake"></i></a></li>
                        <li><a class="dropdown-item" href="./perfil.php">Configurações <i class="fa fa-gear"></i></a>
                        </li>
                        <li><a class="dropdown-item" href="#deslogar">Deslogar <i class="fa fa-sign-out"></i></a>
                        </li>
                    </ul>
                </li>

                &nbsp;
                <a href="#cart" class="btn_icon"><i class="fa fa-shopping-cart" al t="Carrinho de Compras"></i></a>
            </div>
        </div>
    </div>

    <div class="containerPage">
        <!-- links on navbar -->
        <div class="container1">
            <div class="row row-cols-5 text-center">
                <a href="./" class="btn_header">Home</a>
                <a href="./produtos.php" class="btn_header">Produtos</a>
                <!-- <a href="./" class="btn_title colorName">TITULO</a> -->
                <img src="./assets/logo.png" style="height: 200px;"></img>
                <a href="./quemsomos.html" class="btn_header">Quem Somos</a>
                <a href="./contato.php" class="btn_header">Contato</a>
            </div>
        </div>
        <hr />
</head>