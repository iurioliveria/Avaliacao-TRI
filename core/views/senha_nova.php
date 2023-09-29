<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= APP_NAME ?> | Criar Senha</title>
    <style>
        /* Estilizando o bode de ipueira do documento */
        body {
            font-family: Arial, sans-serif;
        }

        /* Estilizaçao da entrada */
        .entrada {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            margin-top: 100px;
            box-shadow: 3px 5px 10px rgba(0, 0, 0, 0.3);
        }

        /* Estilizando o h2 para o cabeçalho na entrada*/
        .entrada h2 {
            text-align: center;
            color: #333;
        }

        /* Estilizando o nome Email e Senha */
        .entrada label {
            display: block;
            font-weight: bold;
            margin-bottom: 10px;
            color: #333;
        }

        /* Estilizando os inputs de entrada de email e senha */
        .entrada input[type="email"],
        .entrada input[type="text"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #f2f2f2;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        .entrada input[type="text"] {
            background-color: #C0C0C0;
        }

        .entrada input[type="text"].enabled {
            background-color: #f2f2f2;
        }

        /* Estilizando o botão de envio */
        .entrada button[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-top: 20px;
            background-color: #808080;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 20px;

        }

        .Teubotao button.enabled {
            background-color: #FFA500;
            cursor: pointer;
        }

        .Teubotao button.enabled:hover {
            background-color: #FFC04D;
        }

        /* Estilizando os links */
        .entrada .links {
            text-align: center;
            margin-top: 20px;
        }

        /* Estilizando os links */
        .entrada .links a {
            margin-right: 10px;
            color: #ff6f00;
            text-decoration: none;
            transition: .3s;
            font-size: .8em;
        }

        /* Estilizando o efeito ao passar o mause nos links*/
        .entrada .links a:hover {
            color: #000;
            text-decoration: underline;
        }

        /* colocando a imagem de fundo */
        body {
            background-color: #ededed;
        }
    </style>
    <script>
        window.onload = function() {
            const emailInput = document.getElementById('email');
            const codigoInput = document.getElementById('codigo');
            const enviarButton = document.querySelector('.Teubotao button');

            emailInput.addEventListener('input', function() {
                const email = emailInput.value.trim();
                enviarButton.disabled = email === '';
                codigoInput.disabled = true;
                codigoInput.classList.add('blocked');
                codigoInput.classList.remove('enabled');
                enviarButton.classList.toggle('enabled', email !== '');
            });

            enviarButton.addEventListener('click', function(event) {
                event.preventDefault();
                codigoInput.disabled = false;
                codigoInput.classList.remove('blocked');
                codigoInput.classList.add('enabled');
                enviarButton.disabled = true;
            });
        };
    </script>
</head>

<body>
    <div class="entrada">
        <h2>CRIAÇÃO DE SENHA</h2>
        <br>
        <form action="" method="post" class="GEANZINHODOGRAU190">
            <div class="GabrielVankleber">
                <label for="email">EMAIL</label>
                <input type="email" name="email" id="email" placeholder="Digite seu email" required>

            </div>
            <br>
            <div class="GabrielVankleber">
                <label for="codigo">CODIGO</label>
                <input type="text" id="codigo" required disabled class="blocked" placeholder="Digite sua senha" required>
            </div><br>
            <div class="Teubotao">
                <button type="submit" name="acao" disabled class="blocked">ENVIAR</button>
            </div>
    </div>

    </form>
    </div>

</body>

</html>