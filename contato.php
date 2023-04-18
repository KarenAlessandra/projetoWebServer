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
                <h2 style="color: #f3dbcf;">Entre em contato conosco :D</h2>
                <br /><br /><br />
                <form class="contact-form" action="./functions/sendMessage.php" method="post">
                    <input type="text" class="form-control form-rounded" id="name" name="name"
                        placeholder="Nome Completo">
                    <br />
                    <input type="email" class="form-control form-rounded" id="email" name="email"
                        placeholder="Endereço de E-mail">
                    <br />
                    <input type="text" class="form-control form-rounded" id="subject" name="subject"
                        placeholder="Assunto da Mensagem">
                    <br />
                    <textarea class="form-control form-rounded" id="message" name="message" rows="4"
                        placeholder="Digite sua Mensagem">
                        </textarea>
                    <br /><br />

                    <div class="col text-center">
                        <button type="submit" class="btn_send">Enviar</button>
                    </div>
                </form>
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