<?php
/**
 *Author: Israel C A Silva
 *git: https://github.com/israelsilva1310
 *HomePage: https://israelcasilva.com.br
 **/
$mailer = new Mailer();
$mailer
    ->setEmailFormat('both')
    ->setTo('bob@example.com')
    ->setFrom('app@domain.com')
    ->viewBuilder()
    ->setTemplate('welcome')
    ->setLayout('fancy');

$mailer->deliver();
