<!doctype html>
<html lang="en">

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"], FILTER_SANITIZE_STRING);
    $email = trim($_POST["email"], FILTER_SANITIZE_EMAIL);
    $phone = trim($_POST["phone"], FILTER_SANITIZE_NUMBER_INT);
    $message = trim($_POST["message"]);

    if (empty($name) || empty($email) || empty($phone) || empty($message)) {
        echo "Por favor, preencha todos os campos do formulário.";
        exit;
    }

    $to = "youremail@example.com";
    $subject = "Mensagem de Contato do Site";

    $body = "Nome: $name\n\n";
    $body .= "Email: $email\n\n";
    $body .= "Telefone: $phone\n\n";
    $body .= "Mensagem:\n$message\n";
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "Obrigado pela sua mensagem! Entraremos em contato em breve.";
    } else {
        echo "Desculpe, houve um problema ao enviar sua mensagem. Por favor, tente novamente mais tarde.";
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
            <div class="cardGenerico text-center">
                <form action="contato.php" method="post">
                    <h2 style="color: #f3dbcf;">Entre em contato conosco :D</h2>
                    <br /><br /><br />
                    <div class="form">
                        <input type="text" class="form-control form-rounded" id="name" name="name"
                            placeholder="Nome Completo">
                        <br />
                        <input type="email" class="form-control form-rounded" id="email" name="email"
                            placeholder="Endereço de E-mail">
                        <br />
                        <input type="text" class="form-control form-rounded" id="phone" name="phone"
                            placeholder="Telefone">
                        <br />
                        <textarea class="form-control form-rounded" id="message" name="message" rows="4"
                            placeholder="Digite sua Mensagem">
                        </textarea>
                    </div>
                    <!-- button -->
                    <br /><br />
                    <div class="col text-center">
                        <button type="submit" class="btn_send">Enviar</button>
                    </div>
                </form>
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