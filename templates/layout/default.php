<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$cakeDescription = 'CakePHP:';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css([
        // 'normalize.min', 'milligram.min', 'fonts', 'cake',
        'bootstrap.min',
        // 'bootstrap-icons',
        'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css',
        'estilo']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
<header class="bg-topo">
    <?= $this->element('header') ?>
</header>
<div id="conteudo" class="container py-2">
    <section aria-label="breadcrumb" class="bg-secondary-subtle mb-3 px-2 py-2 rounded">
        <ol class="breadcrumb text-uppercase mb-0">
            <li class="breadcrumb-item"><a href="https://inconfidentes.mg.gov.br/"
                                           class="text-decoration-none text-secondary-emphasis">Página Inicial</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Balcão de Empregos</li>
        </ol>
    </section>
    <main class="main">
        <div class="container">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </div>
    </main>
    <footer id="rodape" class="bg-rodape text-white py-3 text-center">
        <?= $this->element('footer') ?>
    </footer>
    <?= $this->Html->script([
        'funcoes',
        'bootstrap.bundle.min',
        'estilo',
        'jquery-3.4.1.min'
    ]) ?>
</body>
</html>
