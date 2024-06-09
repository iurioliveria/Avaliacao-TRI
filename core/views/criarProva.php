<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= APP_NAME ?> | Criação de prova</title>
    <link rel="stylesheet" href="./public/assets/css/criarProvas.css">

</head>

<body>
    <?php
    $gestor = new PDO("mysql:host=" . 'localhost' . ";dbname=" . 'automind' . ";charset=utf8", 'root', '');
    $email = $_SESSION['usuario'];

    $usuario = $gestor->query("SELECT id FROM usuarios WHERE email='$email'")->fetch()['id'];
    $questoes = $gestor->query("SELECT * FROM questao WHERE visu='Publico' OR idprofessor='$usuario'");
    ?>

    <main>
        <div class="questoes">
            <?php
            while ($questao = $questoes->fetch(PDO::FETCH_ASSOC)) {
                $id_quest = $questao['id'];
                $texto = $questao['texto_questao'];
                $img = is_null($questao['img']) ? null : "./public/assets/img/" . $questao['img'];
                $pergunta = is_null($questao['pergunta']) ? null : $questao['pergunta'];
                $dificuldade = $questao['dificuldade'];
                $alternativas = $gestor->query("SELECT * FROM alternativas WHERE id='$id_quest'");
                while ($alt = $alternativas->fetch(PDO::FETCH_ASSOC)) {
            ?>
                    <div class="questao">
                        <h4>Dificuldade: <?= $dificuldade?></h4>
                        <p class="texto-questao"><?= $texto ?></p class="texto-questao">
                        <img src="<?= $img ?>" alt="">
                        <p class="pergunta-questao"><?= $pergunta ?></p class="pergunta-questao">
                        <div class="alternativas">
                            <ul>
                                <li class="<?php echo ($alt['alternativacorreta'] == 'a') ? "altCorreta alternativa" : "alternativa"?>">A - <?= $alt['alternativaa']?></li>
                                <li class="<?php echo ($alt['alternativacorreta'] == 'b') ? "altCorreta alternativa" : "alternativa"?>">B - <?= $alt['alternativab']?></li>
                                <li class="<?php echo ($alt['alternativacorreta'] == 'c') ? "altCorreta alternativa" : "alternativa"?>">C - <?= $alt['alternativac']?></li>
                                <li class="<?php echo ($alt['alternativacorreta'] == 'd') ? "altCorreta alternativa" : "alternativa"?>">D - <?= $alt['alternativad']?></li>
                                <li class="<?php echo ($alt['alternativacorreta'] == 'e') ? "altCorreta alternativa" : "alternativa"?>">E - <?= $alt['alternativae']?></li>
                            </ul>
                        </div>
                        <button class="add" onclick="addQuest(<?= $id_quest?>)">
                            Adicionar Questão
                        </button>
                    </div>
            <?php  }
            } ?>
        </div>
        <div class="prova">

        </div>
    </main>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="./public/assets/js/criarProva.js"></script>
</body>

</html>