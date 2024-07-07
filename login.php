<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="login_principal">
        <div class="login_esquerda">
            <h1>Faça seu login<br>E acesse o nosso site</h1>
            <img src="programming-animate.svg" class="logo_animada" alt="Logo Animada">
        </div>
        <div class="login_direita">
            <div class="card_login">
                <h1>LOGIN</h1>
                <div class="campo_texto">
                    <form action="processo_login.php" method="POST">
                        <label for="nome">Usuário</label><br>
                        <input class="nome" type="text" id="nome" name="nome" placeholder="Usuário" required><br><br>

                        <label for="senha">Senha</label><br>
                        <input class="senha" type="password" id="senha" name="senha" placeholder="Senha" required><br><br>

                        <input class="btn_login" id="enviar" type="submit" value="Login">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
