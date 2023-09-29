<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= APP_NAME ?> | Criação de prova</title>
    <style>
        /* Estilizando o corpo do documento */
        body {
            font-family: Arial, sans-serif;
            background-color: #ededed;
            margin: 0;
            padding: 0;
        }

        /* Estilizando a entrada */
        .entrada {
            max-width: 400px;
            margin: 0 auto;
            padding: 50px;
            background-color: #fff;
            border-radius: 5px;
            margin-top: 50px;
            box-shadow: 3px 5px 10px rgba(0, 0, 0, 0.3);

        }


        h2 {
            text-align: center;
            color: #ff6f00;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 10px;
            color: #333;
        }

        /* Estilizando o botão de envio */
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-top: 20px;
            background-color: #ff6f00;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 20px;
        }

        /* Estilizando as seleções de período */
        select {
            width: 48%;
            padding: 8px;
            border: 1px solid #ff6f00;
            border-radius: 5px;
            font-size: 16px;
        }

        h1 {
            color: #ff6f00;
        }
    </style>

</head>

<body>
    <div class="entrada">
        <h1>Criação de prova</h1>
        <form action="?a=gerarProvas" method="post">

            <!-- ===================================================================================================================== -->

            <h3>Turma</h3>
            <label for="edif"><input type="radio" name="turma" id="edif" value="edif" checked>Edificações</label>
            <label for="eletro"><input type="radio" name="turma" id="eletro" value="elet">Eletrotécnica</label>
            <label for="info"><input type="radio" name="turma" id="info" value="info">Informática</label>
            <label for="tst"><input type="radio" name="turma" id="tst" value="segt">Segurança do Trabalho</label>

            <!-- ===================================================================================================================== -->

            <h3>Período*</h3>

            <select name="serie" id="serie" required>
                <option value="1">1° Ano</option>
                <option value="2">2° Ano</option>
                <option value="3">3° Ano</option>
            </select>

            <select name="bimestre" id="bimestre" required>
                <option value="1">1° Bimestre</option>
                <option value="2">2° Bimestre</option>
                <option value="3">3° Bimestre</option>
                <option value="4">4° Bimestre</option>
            </select>

            <!-- ===================================================================================================================== -->

            <h3>Quantidade de questões*</h3>

            <input type="number" name="quantQuest" id="quantQuest" min="3" max="30" required value="3">

            <!-- ===================================================================================================================== -->

            <input type="submit" value="Criar provas" name="criarprovas">

        </form>
    </div>
</body>

</html> 