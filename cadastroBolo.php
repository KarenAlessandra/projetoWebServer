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

                <form action="./functions/registerCake.php" method="POST">
                    <p style="color: #f3dbcf; text-align: start;">Insira a imagem do bolo</p>
                    <input class="form-control" type="file" id="Imagem">
                    <br />

                    <p style="color: #f3dbcf; text-align: start;">Valor em reais: </p>
                    <input type="text" class="form-control form-rounded" id="Preco" placeholder="R$ 00,00">
                    <br /><br />

                    <input type="text" class="form-control form-rounded" id="Titulo" placeholder="Título do Produto">
                    <br /><br />

                    <textarea type="description" class="form-control form-rounded" type="text" id="Descricao" rows="4"
                        placeholder="Digite a descrição do bolo"></textarea>
                    <br /><br />

                    <input type="text" class="form-control form-rounded" id="Peso" placeholder="00,00 kg">
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