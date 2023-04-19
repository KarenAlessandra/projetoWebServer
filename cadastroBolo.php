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
            <div class="card text-center"
                style="padding-top: 4rem; padding-left: 7rem; padding-right: 7rem; padding-bottom: 3rem; border-radius: 1%;">
                <div class="row">
                    <h1 class="h1_title" style="color: #f3dbcf;">Cadastro de Bolos</h1>
                </div>
                <br />

                <form action="./functions/registerCake.php" method="post">
                    <p style="color: #f3dbcf; text-align: start;">Insira a imagem do bolo</p>
                    <input class="form-control" type="file" id="File">
                    <span class="error">
                        <?php if (isset($image_err))
                            echo $image_err ?>
                        </span>

                        <br />

                        <p style="color: #f3dbcf; text-align: start;">Valor em reais: </p>
                        <input type="price" class="form-control form-rounded" id="Price" placeholder="R$ 00,00">
                        <span class="error">
                        <?php if (isset($price_err))
                            echo $price_err ?>
                        </span>

                        <br /><br />

                        <input type="nameBolo" class="form-control form-rounded" id="NameCake"
                            placeholder="Título do Produto">
                        <span class="error">
                        <?php if (isset($name_err))
                            echo $name_err ?>
                        </span>

                        <br /><br />

                        <textarea type="description" class="form-control form-rounded" type="descriptionBolo"
                            id="Description" rows="4" placeholder="Digite a descrição do bolo"></textarea>
                        <span class="error">
                        <?php if (isset($description_err))
                            echo $description_err ?>
                        </span>

                        <br /><br />

                        <input type="peso" class="form-control form-rounded" id="Weight" placeholder="00,00 kg">
                        <span class="error">
                        <?php if (isset($weight_err))
                            echo $weight_err ?>
                        </span>

                        <br /><br />

                        <!-- button -->
                        <button type="submit" class="btn_send" style="margin-bottom: 6px !important">Cadastrar</button>
                    </form>
                </div>
            </div>
            </div>

            <br /><br /><br />

            <foot>
                <?php
                        include("footer.php");
                        ?>
        </foot>

        </div>

    </main>
</body>

</html>