<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Farm Managment</title>
    <link rel="stylesheet" href="css.css">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src='main.js'></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <?php
    include("includes/header.php")
    ?>
    <div id="main-bg">
        <img src="images/Login-Background.png">
        <form method="POST" action="login.php">
            <div id="login-form">
                <div id="mobile-header">
                    <img src="images/Logo 4.png">
                    <p class="login-form-mobile-p">Gerenciamento de Fazenda</p>
                </div>
                <p>Login de Usuário</p>

                <div id="login-form-userinputs">
                    <input type="text" placeholder="Login" class="login-form-input" name="user">
                    <input type="password" placeholder="Senha" class="login-form-input" name="password">

                    <div id="login-form-usertype">
                        <input type="radio" name="user-type" value=0 id="usuarioR" checked>
                        <input type="radio" name="user-type" value=1 id="empregadorR">
                        <input type="radio" name="user-type" value=2 id="admR">
                        <label for="usuarioR" class="login-form-radio userR user-highlight">Usuário</label>
                        <label for="empregadorR" class="login-form-radio empR">Empregador</label>
                        <label for="admR" class="login-form-radio admR">Adm</label>
                    </div>
                </div>

                <input type="submit" value="Acessar" name="access" class="login-form-submit">
                <p class="login-form-mobile-p">Sobre nós Contatos</p>
            </div>
        </form>
    </div>
</body>
</html>