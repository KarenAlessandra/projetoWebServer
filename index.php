<!-- pra abrir com o http-server-->
<!-- ./node_modules/.bin/http-server -a localhost -p 8000 -c-1 -->

<!doctype html>
<html lang="en">

<head>
    <?php
    //incluir header da página
    include("header.php");
    ?>
</head>

<!-- page -->

<body>
    <main>
        <!-- Home -->
        <div class="containerPage">
            <br />
            <!-- <marquee scrollamount="30">
                <h1 class="h1_title text-center" style="color: #d87f81;">Bem
                    vindo a maior loja de bolos da região! &nbsp;&nbsp;&nbsp;</h1>
            </marquee> -->
            <br /><br />
            <div id="carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="./assets/1.jpg">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="./assets/2.jpg">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="./assets/3.jpg">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="./assets/4.jpg">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <br /><br />
            <!-- jumbotron -->

            <div class="jumbotron1 jumbotron-fluid">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col align-items-center">
                            <p>Produzimos centenas de bolos, doces e salgados, peça já pelo nosso site! Basta clicar no
                                bolo ao lado:</p>
                        </div>
                        <div class="col text-center">
                            <a href="./produtos.html"><i class="fa fa-birthday-cake" style="font-size: 10rem;"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            </br>
            <!-- cards with pictures -->

            <div class="card-group">
                <div class="card">
                    <br>
                    <h5 class="card-title text-center">Card title</h5>
                    <br>
                    <img class="card-img-top" src="./assets/8.jpg">
                    <div class="card-body text-align" style="color:#f3dbcf">
                        <p class="card-text" style="font-size: 15px;">Cupcake ipsum dolor sit amet macaroon jujubes.
                            Sweet wafer liquorice liquorice sweet roll jelly-o bear claw. Halvah cake donut cake brownie
                            liquorice cake apple pie.</p>
                    </div>
                </div>
                <div class="card"
                    style="border-style: dashed; border-left: none; border-right: none; border-color: #f3dbcf;">
                    <br>
                    <h5 class="card-title text-center">Card title</h5>
                    <br>
                    <img class="card-img-top" src="./assets/7.jpg">
                    <div class="card-body" style="color:#f3dbcf">
                        <p class="card-text text-align" style="font-size: 15px;">Jelly-o dessert gingerbread cookie
                            icing. Carrot cake oat cake pastry gummies dragée I love. Tootsie roll caramels ice cream
                            cupcake I love toffee caramels pie. Cake jelly-o danish carrot cake cake powder jujubes
                            chupa chups liquorice.</p>
                    </div>
                </div>
                <div class="card" style="border-style: dashed; border-left: none; border-color: #f3dbcf;">
                    <br>
                    <h5 class="card-title text-center">Card title</h5>
                    <br>
                    <img class="card-img-top" src="./assets/9.jpg">
                    <div class="card-body" style="color:#f3dbcf">
                        <p class="card-text text-align" style="font-size: 15px;">Tart topping tootsie roll pie ice cream
                            gummi bears donut. Cookie sweet pie jelly beans pie jelly beans biscuit jelly beans
                            caramels. Cupcake chocolate liquorice shortbread liquorice gingerbread.</p>
                    </div>
                </div>
            </div>
            <br /><br /><br />
        </div>
        </div>

        <foot>
            <?php
            //incluir footer da página
            include("footer.php");
            ?>
        </foot>


    </main>
    </div>
</body>

</html>