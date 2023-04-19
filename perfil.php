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
            <h1 class="h1_title colorName">Configurações de Perfil</h1>
        </div>

        <br /><br />

        <div class="container" style="background-color: #D87F81; border-radius: 1rem;">
            <div class="container">
                <div class="row align-items-start">
                    <div class="col-4">
                        <br />

                        <nav id="navbar-perfil" class="navbar flex-column align-items-stretch" style=" border-style: dashed;>
                            <nav class=" nav nav-pills flex-column">
                            <a class="nav-link1" href="#item-1">Meus Dados</a>
                            <a class="nav-link1" href="#item-2">Meu Endereço</a>
                            <a class="nav-link1" href="#item-3">Excluir Conta</a>
                        </nav>
                    </div>
                    <div class="col" style="color: #f3dbcf; padding-top: 4rem;">
                        <br /><br />

                        <h4 id="item-1">Meus dados</h4>
                        <br />
                        <!-- profile -->
                        <form action="./functions/editUser.php" method="post" post>
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
                                name="senha">
                            <small id="passwordHelpId" class="form-text text-muted">* Sua senha deve conter 8 caracteres
                                no mínimo</small>
                            <br />
                            <input type="password" class="form-control form-rounded" id="senhaConfirmada"
                                placeholder="Confirme a Senha" name="senhaConfirmada">
                            <br /><br />
                            <button type="submit" class="btn_send">Salvar</button>
                        </form>
                        <br /><br />
                        <hr />

                        <h4 id="item-2" style="padding-top: 1rem;">Meu Endereço</h4>
                        <br />
                        <!-- Address -->
                        <form action="./functions/editAddress.php" method="post">
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
                        <form action="./functions/deleteUser.php" method="post">
                            <div class="mb-3">
                                <p>Deseja mesmo excluir sua conta?</p>
                                <p>Digite sua senha e clique no botão excluir</p>
                                <br />
                                <input type="password" class="form-control form-rounded" id="senha" name="senha"
                                    placeholder="Senha">
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

        <br /><br /><br /><br />

        <foot>
            <?php
            include("footer.php");
            ?>
        </foot>

    </main>
</body>

</html>