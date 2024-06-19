<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= APP_NAME ?> | Login</title>
    <link rel="stylesheet" href="./public/assets/css/login.css">
</head>

<body>
    <div class="main-login">
        <div class="right-login"></div>
        <div class="card-login">
            <h1>ACESSO AO SISTEMA</h1>

            <form action="" method="post">
                <div class="textfield">
                    <label for="email">EMAIL</label>
                    <input type="email" name="email" id="email" placeholder="Digite seu email" required>
                </div>

                <div class="textfield">
                    <label for="senha">SENHA</label>
                    <input type="password" name="senha" id="senha" placeholder="Digite sua senha" required>


                </div>
                <button class="btn-login" name="acao">Entrar</button>
            </form>
        </div>

    </div>


</body>

</html>