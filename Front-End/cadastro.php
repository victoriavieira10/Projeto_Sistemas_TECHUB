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
            <form action="">
                <div class="container-input">
                    <input type="text" name="nome" placeholder="Nome">
                    <input type="text" name="sobrenome" placeholder="Sobrenome">
                </div>
                <div class="container-input">
                    <input type="email" name="email-cadastro" placeholder="E-mail">
                    <input type="password" name="senha-cadastro" placeholder="Senha">
                </div>
                <div class="container-input">
                    <input type="text" name="cep" placeholder="CEP" class="input-100" id="cep">
                </div>
                <div class="container-input">
                    <input type="text" name="logradouro" placeholder="Rua" id="logradouro">
                    <input type="text" name="numero" placeholder="Número">
                </div>
                <div class="container-input">
                    <input type="text" name="complemento" placeholder="Complemento">
                    <input type="text" name="bairro" placeholder="Bairro" id="bairro">
                </div>
                <div class="container-input">
                    <input type="text" name="cidade" placeholder="Cidade" id="cidade">
                    <input type="text" name="estado" placeholder="Estado" id="estado">
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
                <form action="">
                    <div class="container-input">
                        <input type="email" name="email-login" placeholder="E-mail" class="input-100" id="email">
                    </div>
                    <div class="container-input">
                        <input type="password" name="senha-login" placeholder="Senha" class="input-100" id="senha">
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