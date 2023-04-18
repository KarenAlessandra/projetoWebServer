<!doctype html>
<html lang="en">

<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET["form_valor"]) && isset($_GET["form_name"]) && isset($_GET["form_message"]) && isset($_GET["form_peso"])) {
        $valor = filter_var($_GET["form_valor"], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
        $name = filter_var($_GET["form_name"], FILTER_SANITIZE_STRING);
        $message = filter_var($_GET["form_message"]);
        $peso = filter_var($_GET["form_peso"], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
        if (!empty($valor) && !empty($name) && !empty($message) && !empty($peso)) {
            echo "Cadastro do bolo realizado com sucesso!";
            printf("$valor, $name, $message, $peso");
            header("Location: cadastroBolo.php");
            exit();
        } else {
            $error = "Todos os campos são obrigatórios.";
            echo $error;
        }

    } else {
        $error = "Todos os campos são obrigatórios.";
        echo $error;
    }
}
?>


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

                <form action="cadastroBolo.php" method="get">
                    <p style="color: #f3dbcf; text-align: start;">Insira a imagem do bolo</p>
                    <input class="form-control" type="file" id="formFile">
                    <br />
                    <p style="color: #f3dbcf; text-align: start;">Valor em reais: </p>
                    <input type="price" class="form-control form-rounded" id="form_valor" placeholder="R$ 00,00">
                    <br /><br />
                    <input type="nameBolo" class="form-control form-rounded" id="form_name"
                        placeholder="Título do Produto">
                    <br /><br />
                    <textarea type="description" class="form-control form-rounded" type="descriptionBolo"
                        id="form_message" rows="4" placeholder="Digite a descrição do bolo"></textarea>
                    <br /><br />
                    <input type="peso" class="form-control form-rounded" id="form_peso" placeholder="00,00 kg">
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