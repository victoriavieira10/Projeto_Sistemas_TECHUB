<?php 
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Techhub</title>
    <link rel="shortcut icon" href="assets/TechHub.png" />
    <link rel="stylesheet" type="text/css" href="styles/cadastro.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
</head>

<body>

    <main id="container-cadastro">
    
        <div id="cadastro">
            <div id="titulo-cadastrar">
                <h1>
                    Cadastre-se:
                </h1>
            </div>
                        
            <?php
            if(isset($_SESSION['status_cadastro'])):
            ?>
            <div class="notification is-success">
                <p>Cadastro efetuado!</p>
                <p>Faça login informando o seu usuário e senha</p>
            </div>
            <?php
            endif;
            unset($_SESSION['status_cadastro']);
            ?>

            <?php
            if(isset($_SESSION['usuario_existe'])):
            ?>
            <div class="notification is-danger">
                <p>ERRO: Usuário escolhido já existe. Informe outro e tente novamente.</p>
            </div>
            <?php
            endif;
            unset($_SESSION['usuario_existe']);
            ?>           
                    
            <form action="cadastrar.php" method="POST">
                <div class="container-input">
                    <input type="text" name="nome" placeholder="Nome" required>
                    <input type="text" name="sobrenome" placeholder="Sobrenome">
                </div>
                <div class="container-input">
                    <input type="email" name="email" placeholder="E-mail" required>
                    <input type="password" name="senha" placeholder="Senha" required>
                </div>
                <div class="container-input">
                    <input type="text" name="cep" placeholder="CEP" class="input-100" id="cep" required>
                </div>
                <div class="container-input">
                    <input type="text" name="logradouro" placeholder="Rua" id="logradouro" required>
                    <input type="text" name="numero" placeholder="Número" required>
                </div>
                <div class="container-input">
                    <input type="text" name="complemento" placeholder="Complemento">
                    <input type="text" name="bairro" placeholder="Bairro" id="bairro" required>
                </div>
                <div class="container-input">
                    <input type="text" name="cidade" placeholder="Cidade" id="cidade" required>
                    <input type="text" name="estado" placeholder="Estado" id="estado" required>
                </div>
                <div class="container-input">
                    <input type="submit" value="Cadastrar" class="input-100">
                </div>
            </form>
        </div>

        <main id="container-login">
            <div id="login">
                <div id="container-imagem">
                    <img class="imagem" src="assets/TechHub.png" alt="">
                </div>
                <div id="titulo-login">
                    <h1>
                        Login:
                    </h1>
                </div>

                <?php
                if(isset($_SESSION['nao_autenticado'])):
                ?>
                <div class="notification is-danger">
                    <p>ERRO: Usuário ou senha inválidos.</p>
                </div>
                <?php
                endif;
                unset($_SESSION['nao_autenticado']);
                ?>

                <form action="login.php" method="POST">
                    <div class="container-input">
                        <input type="email" name="email" placeholder="E-mail" class="input-100" id="email" required>
                    </div>
                    <div class="container-input">
                        <input type="password" name="senha" placeholder="Senha" class="input-100" id="senha" required>
                    </div>
                    <div class="container-input">
                        <input type="submit" value="Login" class="input-100">
                    </div>
                </form>
            </div>
        </main>
        <script src="cadastro.js"></script>
</body>

</html>