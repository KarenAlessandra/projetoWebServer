<?php

//contato com Loja
function enviarContato($nome, $email, $telefone, $mensagem)
{
    if (isset($_GET)) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];
        printf("Nome: %s\n", $name);
        printf("Email: %s\n", $email);
        printf("Telefone: %s\n", $phone);
        printf("Mensagem: %s\n", $message);
    } else {
        echo ("dados incompletos");
    }
}

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