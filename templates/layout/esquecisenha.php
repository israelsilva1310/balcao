<?php
/**
 *Author: Israel C A Silva
 *git: https://github.com/israelsilva1310
 *HomePage: https://israelcasilva.com.br
 **/ ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Balcão Login</title>
    <link rel="icon" href="imagem/favicon.ico">

    <?= $this->Html->css([
        'bootstrap.min',
        'signin',

    ]) ?>
</head>
<body class="text-center">

<?= $this->fetch('content') ?>
<?= $this->Html->script([
    'all',
    'jquery-3.4.1.min',
    'bootstrap.min'
]) ?>
</body>
</html>
