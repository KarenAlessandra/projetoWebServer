<!-- ./node_modules/.bin/http-server -a localhost -p 8000 -c-1 -->

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
</head>

<!-- page -->

<body>
    <main>
        <!-- icons at the header -->
        <div class="container0">
            <div class="row">
                <div class="d-flex flex-row-reverse">
                    <a href="#deslogar" class="btn_icon"><i class="fa fa-sign-out" alt="Deslogar"></i></a>
                    <a href="./login.html" class="btn_icon"><i class="fa fa-user" alt="Logar"></i></a>
                    &nbsp; &nbsp; &nbsp;
                    <button type="#cart" class="btn_carrinho" data-bs-toggle="modal" alt="Carrinho de Compras"
                        data-bs-target="#carrinho_de_compras">
                        <span class="fa fa-shopping-cart" aria-hidden="true"></span>
                    </button>
                </div>
            </div>
        </div>

        <div class="containerPage">
            <!-- links on navbar -->
            <div class="container1">
                <div class="row row-cols-5 text-center">
                    <a href="./" class="btn_header">Home</a>
                    <a href="./produtos.html" class="btn_header" alt="Página de Produtos">Produtos</a>
                    <img src="./assets/logo.png" alt="logo Cake Shop"></img>
                    <a href="./quemsomos.html" class="btn_header" alt="Página Sobre nós">Quem Somos</a>
                    <a href="./contato.html" class="btn_header" alt="Página de Contato">Contato</a>
                </div>
            </div>
            <hr />

            <!-- Home -->
            <br />
            <!-- <marquee scrollamount="30">
                <h1 class="h1_title text-center" style="color: #d87f81;" alt="Texto passando de um lado ao outro">Bem
                    vindo a maior loja de bolos da região! &nbsp;&nbsp;&nbsp;</h1>
            </marquee> -->
            <br /><br />
            <div id="carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="./assets/1.jpg" alt="bolo bonito" style="height: 20rem;">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="./assets/2.jpg" style="height: 20rem;"
                            alt="bolo com uma cereja">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="./assets/3.jpg" style="height: 20rem;" alt="bolo com recheio">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="./assets/4.jpg" style="height: 20rem;" alt="bolo com cobertura">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev"
                    alt="botão de voltar no carrocel de imagens">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel" role="button" data-slide="next"
                    alt="botão de avançar no carrocel de imagens">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <br /><br />
            <!-- jumbotron -->

            <div class="jumbotron jumbotron-fluid"
                style="color: #d87f81; font-size: 20px; background-color: #2D3C33; padding-left: 5rem">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col align-items-center">
                            <p>Produzimos centenas de bolos, doces e salgados, peça já pelo nosso site! Basta clicar no
                                bolo ao lado:</p>
                        </div>
                        <div class="col text-center">
                            <a href="./produtos.html"><i class="fa fa-birthday-cake" style="font-size: 10rem;"
                                    alt="icone botão de bolo"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            </br>
            <!-- cards with pictures -->

            <div class="card-group">
                <div class="card text-align" style="border-style: dashed; border-right: none; border-color: #f3dbcf;">
                    <br>
                    <h5 class="card-title text-center" style="font-size:20px; color: #f3dbcf;">Card title</h5>
                    <br>
                    <img class="card-img-top" src="./assets/8.jpg" alt="um bolo, doces e salgados"
                        style="height: 25rem;">
                    <div class="card-body text-align" style="color:#f3dbcf">
                        <p class="card-text" style="font-size: 15px;">Cupcake ipsum dolor sit amet macaroon jujubes.
                            Sweet wafer liquorice liquorice sweet roll jelly-o bear claw. Halvah cake donut cake brownie
                            liquorice cake apple pie.</p>
                    </div>
                </div>
                <div class="card"
                    style="border-style: dashed; border-left: none; border-right: none; border-color: #f3dbcf;">
                    <br>
                    <h5 class="card-title text-center" style="font-size:20px; color: #f3dbcf;">Card title</h5>
                    <br>
                    <img class="card-img-top" src="./assets/7.jpg" alt="confeitos" style="height: 25rem;">
                    <div class="card-body" style="color:#f3dbcf">
                        <p class="card-text text-align" style="font-size: 15px;">Jelly-o dessert gingerbread cookie
                            icing. Carrot cake oat cake pastry gummies dragée I love. Tootsie roll caramels ice cream
                            cupcake I love toffee caramels pie. Cake jelly-o danish carrot cake cake powder jujubes
                            chupa chups liquorice.</p>
                    </div>
                </div>
                <div class="card" style="border-style: dashed; border-left: none; border-color: #f3dbcf;">
                    <br>
                    <h5 class="card-title text-center" style="font-size:20px; color: #f3dbcf;">Card title</h5>
                    <br>
                    <img class="card-img-top" src="./assets/9.jpg" alt="mais bolo, doces e salgados"
                        style="height: 25rem;">
                    <div class="card-body" style="color:#f3dbcf">
                        <p class="card-text text-align" style="font-size: 15px;">Tart topping tootsie roll pie ice cream
                            gummi bears donut. Cookie sweet pie jelly beans pie jelly beans biscuit jelly beans
                            caramels. Cupcake chocolate liquorice shortbread liquorice gingerbread.</p>
                    </div>
                </div>
            </div>
            <br /><br /><br />
        </div>

        <!-- footer -->

        <div class="jumbotron jumbotron-fluid" style="color: #f3dbcf; background-color:#7e9680">
            <div class="container">
                <img src="./assets/logo_footer.png" alt="logo Cake Shop"></img>
            </div>
        </div>

    </main>
    </div>
</body>

</html>