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

                <form action="cadastroBolo.html" method="get">
                    <p style="color: #f3dbcf; text-align: start;">Insira a imagem do bolo</p>
                    <input class="form-control" type="file" id="formFile">
                    <br />
                    <p style="color: #f3dbcf; text-align: start;">Valor em reais: </p>
                    <input type="price" class="form-control form-rounded" id="form_valor" placeholder="00,00">
                    <br /><br />
                    <input type="nameBolo" class="form-control form-rounded" id="form_name"
                        placeholder="Título do Produto">
                    <br /><br />
                    <textarea type="description" class="form-control form-rounded" type="descriptionBolo"
                        id="form_message" rows="4" placeholder="Digite a descrição do bolo"></textarea>
                    <br /><br />
                    <input type="peso" class="form-control form-rounded" id="form_peso" placeholder="Peso em kg">
                    <br /><br />
                    <!-- button -->
                    <button type="submit" class="btn_send" style="margin-bottom: 2rem;">Cadastrar</button>
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