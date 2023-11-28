<?php
/**
 *Author: Israel C A Silva
 *git: https://github.com/israelsilva1310
 *HomePage: https://israelcasilva.com.br
 **/
//pr($user);?>

<?= $this->Form->create($user) ?>


<div>
    <h4 class="display-6 titulo-sessao fw-bold">Cadastro Pessoa</h4>

    <p>Para iniciar o seu cadastro, por favor, preencha o formulário abaixo e clique em "Enviar". Em seguida, você
        receberá um email de confirmação no email fornecido.</p>
    <div class="mb-3">
        <label for="nome" class="form-label">Nome Completo</label>
        <?= $this->Form->control('name', [
            'class' => 'form-control',
            'label' => 'Nome',
            'type' => 'text',
            'id' => 'name',
            'required' => '',
            'placeholder' => 'Nome Completo'
        ]) ?>
        <spam class="text-danger"></spam>
    </div>
    <div class="mb-3">
        <?= $this->Form->control('email', [
            'class' => 'form-control',
            'label' => 'E-mail',
            'type' => 'email',
            'id' => 'email',
            'placeholder' => 'Seu melhor email',
            'required' => ''
        ]) ?>
        <spam class="text-danger"></spam>
    </div>
    <div class="mb-3">
        <?= $this->Form->control('password', [
            'class' => 'form-control',
            'type' => 'password',
            'id' => 'senha',
            'name' => 'senha',
            'label' => 'Senha',
            'placeholder' => 'Escolha uma senha segura',
            'minlength' => 8,
            'required' => ''
        ]) ?>
        <div class="form-text">
            Tamanho mínimo de 8 digitos.
        </div>
        <spam class="text-danger"></spam>
    </div>
    <div class="mb-3">
        <label for="senha_c" class="form-label">Confirmar Senha</label>
        <input type="password" class="form-control" id="senha_c" name="senha_c" minlength="8" required="">
        <spam class="text-danger"></spam>
    </div>
    <?= $this->Form->button(__('submit', [
        'class' => 'btn btn-primary btn-busca mb-3',
        'type' => 'submit',
        'label' => 'Enviar',
        'value' => 'Enviar'
    ])) ?>

</div>

<?= $this->Form->end() ?>
