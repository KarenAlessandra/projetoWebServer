<?php

//contato com Loja
// <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form fields and trim whitespace
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $phone = trim($_POST["phone"]);
    $message = trim($_POST["message"]);

    // Check if the fields are empty
    if (empty($name) || empty($email) || empty($phone) || empty($message)) {
        echo "Por favor, preencha todos os campos do formulário.";
        exit;
    }

    // Check if the email is valid
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Endereço de E-mail inválido. Por favor, verifique e tente novamente.";
        exit;
    }

    // Set the recipient email address
    $to = "youremail@example.com";

    // Set the email subject
    $subject = "Mensagem de Contato do Site";

    // Build the email body
    $body = "Nome: $name\n\n";
    $body .= "Email: $email\n\n";
    $body .= "Telefone: $phone\n\n";
    $body .= "Mensagem:\n$message\n";

    // Set the email headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        echo "Obrigado pela sua mensagem! Entraremos em contato em breve.";
    } else {
        echo "Desculpe, houve um problema ao enviar sua mensagem. Por favor, tente novamente mais tarde.";
    }
}
// ?>


//cadastro userCliente
function cadastrarUserCliente($nome, $email, $telefone, $senha)
{
if (isset($_POST)) {
$name = $_POST['name'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$senhaConfirmada = $_POST['senhaConfirmada'];
printf("Nome: %s\n", $name);
printf("Email: %s\n", $email);
} else {
echo ("dados incompletos");
}
}

//cadastro userAdmin
function cadastrarUserAdmin($nome, $email, $telefone, $senha)
{
if (isset($_POST)) {
$name = $_POST['name'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$senhaConfirmada = $_POST['senhaConfirmada'];
printf("Nome: %s\n", $name);
printf("Email: %s\n", $email);
} else {
echo ("dados incompletos");
}
}

//cadastro bolo
function cadastrarBolo($nome, $descricao, $preco, $imagem)
{
if (isset($_POST)) {
$form_image = $_POST['image'];
$form_name = $_POST['name'];
$form_descricao = $_POST['descricao'];
$form_preco = $_POST['preco'];
printf("Nome: %s\n", $form_name);
printf("Descrição: %s\n", $form_descricao);
printf("Preço: %s\n", $form_preco);
} else {
echo ("dados incompletos");
}
}

//editar perfil
function editarPerfil($nome, $email, $telefone, $senha)
{
if (isset($_POST)) {
$name = $_POST['name'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$senhaConfirmada = $_POST['senhaConfirmada'];
printf("Nome: %s\n", $name);
printf("Email: %s\n", $email);
} else {
echo ("dados incompletos");
}
}

//editar endereco

function editarEndereco($cep, $pais, $estado, $cidade, $bairro, $rua, $numero, $complemento)
{
if (isset($_POST)) {
$form_cep = $_POST['cep'];
$form_pais = $_POST['pais'];
$form_estado = $_POST['estado'];
$form_cidade = $_POST['cidade'];
$form_bairro = $_POST['bairro'];
$form_rua = $_POST['rua'];
$form_numero = $_POST['numero'];
$form_complemento = $_POST['complemento'];
printf("CEP: %s\n", $form_cep);
printf("País: %s\n", $form_pais);
printf("Estado: %s\n", $form_estado);
printf("Cidade: %s\n", $form_cidade);
printf("Bairro: %s\n", $form_bairro);
printf("Rua: %s\n", $form_rua);
printf("Número: %s\n", $form_numero);
printf("Complemento: %s\n", $form_complemento);
}
}

//editar bolo

//Database connection
?>