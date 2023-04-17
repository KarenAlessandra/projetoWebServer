<!doctype html>
<html lang="en">

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $senha = $_POST['senha'];
    $senha_confirmada = $_POST['senhaConfirmada'];

    if (empty($name) || empty($email) || empty($cpf) || empty($senha) || empty($senha_confirmada)) {
        echo 'Por favor, preencha todos os campos';
    } elseif (strlen($senha) < 8) {
        echo 'Sua senha deve ter no mínimo 8 caracteres';
    } elseif ($senha != $senha_confirmada) {
        echo 'As senhas não conferem';
    } else {
        //database code here soon
        echo 'Dados do usuário atualizados com sucesso';
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cep = $_POST["cep"];
    $pais = $_POST["pais"];
    $estado = $_POST["estado"];
    $cidade = $_POST["cidade"];
    $bairro = $_POST["bairro"];
    $rua = $_POST["rua"];
    $numero = $_POST["numero"];
    $complemento = $_POST["complemento"];
    header("Location: perfil.php");
    exit();
}

session_start();

// include 'database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_id = $_SESSION['user_id'];
    $senha = $_POST['senha'];
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    if (password_verify($password, $user['password'])) {
        $sql = "DELETE FROM users WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('i', $user_id);
        $stmt->execute();

        session_destroy();
        header('Location: index.php');
        exit();
    } else {
        $error = 'Senha inválida.';
    }
} ?>

<head>
    <?php
    include("header.php");
    ?>
</head>

<body>
    <main>
        <br /><br />

        <div class="container">
            <h1 class="h1_title colorName" alt="Configuracoes de Perfil">Configurações de Perfil</h1>
        </div>

        <br /><br />

        <div class="container" style="background-color: #D87F81; border-radius: 1%;">
            <div class="container">
                <div class="row align-items-start">
                    <div class="col-4">
                        <br />

                        <nav id="navbar-perfil" class="navbar flex-column align-items-stretch"
                            style=" border-style: dashed;">
                            <nav class="nav nav-pills flex-column">
                                <a class="nav-link" href="#item-1">Meus Dados</a>
                                <a class="nav-link" href="#item-2">Meu Endereço</a>
                                <a class="nav-link" href="#item-3">Excluir Conta</a>
                            </nav>
                    </div>
                    <div class="col" style="color: #f3dbcf; padding-top: 4rem;">
                        <br /><br />

                        <h4 id="item-1">Meus dados</h4>
                        <br />
                        <!-- profile -->
                        <form action="perfil.php" method="post" post>
                            <input type="text" id="name" class="form-control form-rounded" placeholder="Nome Completo"
                                name="name">
                            <br /><br />
                            <input type="email" class="form-control form-rounded" id="email" placeholder="E-mail"
                                name="email">
                            <br /><br />
                            <!-- <input type="text" class="form-control form-rounded" id="register" placeholder="Registro Cake Shop">
                                <br /><br /> -->
                            <input type="text" class="form-control form-rounded" id="cpf" placeholder="CPF" name="cpf">
                            <br /><br />
                            <input type="password" class="form-control form-rounded" id="senha" placeholder="Senha"
                                aria-describedby="passwordHelpId" name="senha">
                            <small id="passwordHelpId" class="form-text text-muted">* Sua senha deve conter 8 caracteres
                                no mínimo</small>
                            <br />
                            <input type="password" class="form-control form-rounded" id="senhaConfirmada"
                                placeholder="Confirme a Senha" aria-describedby="passwordHelpId" name="senhaConfirmada">
                            <br /><br />
                            <button type="submit" class="btn_send" alt="Botão Salvar">Salvar</button>
                        </form>
                        <br /><br />
                        <hr />

                        <h4 id="item-2" style="padding-top: 1rem;">Meu Endereço</h4>
                        <br />
                        <!-- Address -->
                        <form action="perfil.php" method="post" post>
                            <input type="text" id="cep" class="form-control form-rounded" placeholder="CEP" name="cep">
                            <br /><br />
                            <input type="text" id="pais" class="form-control form-rounded" placeholder="País"
                                name="pais">
                            <br /><br />
                            <input type="text" id="estado" class="form-control form-rounded" placeholder="Estado"
                                name="estado">
                            <br /><br />
                            <input type="text" id="cidade" class="form-control form-rounded" placeholder="Cidade"
                                name="cidade">
                            <br /><br />
                            <input type="text" id="bairro" class="form-control form-rounded" placeholder="Bairro"
                                name="bairro">
                            <br /><br />
                            <input type="text" id="rua" class="form-control form-rounded" placeholder="Rua" name="rua">
                            <br /><br />
                            <input type="text" id="numero" class="form-control form-rounded" placeholder="Número"
                                name="numero">
                            <br /><br />
                            <input type="text" id="complemento" class="form-control form-rounded"
                                placeholder="Complemento" name="complemento">
                            <br /><br />
                            <button type="submit" class="btn_send">Salvar</button>
                        </form>
                        <br /><br />
                        <hr />

                        <h4 id="item-3" style="padding-top: 1rem;">Excluir Conta</h4>
                        <br />
                        <!-- Delete -->
                        <form action="perfil.php" method="post">
                            <div class="mb-3">
                                <p>Deseja mesmo excluir sua conta?</p>
                                <p>Digite sua senha e clique no botão excluir</p>
                                <br />
                                <input type="password" class="form-control form-rounded" id="senha" placeholder="Senha"
                                    aria-describedby="passwordHelpId">
                            </div>
                            <br />
                            <button type="submit" class="btn_send">Excluir</button>
                        </form>
                        <br /><br /><br /><br />
                    </div>
                </div>
            </div>
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