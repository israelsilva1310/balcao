<?php
/**
 *Author: Israel C A Silva
 *git: https://github.com/israelsilva1310
 *HomePage: https://israelcasilva.com.br
 **/
?>
<div class="form-signin">
    <?= $this->Form->create() ?>
    <h1 class="h3 mb-3 font-weight-normal">Candidatos</h1>
    <?= $this->Html->image('Logo-PMI.png', [
        'class' => 'mb-3',
        'alt' => 'Logo',
        'width' => '300',
        'height' => '100'
    ]) ?>
    <?= $this->Flash->render() ?>
    <div class="my-6">

        <div class="card">
            <div class="card-header">
                <h2>
                    Login
                </h2>
            </div>
            <div class="card-body">

                <div class="mb-3">
                    <?= $this->Form->control('email', [
                        'required' => true,
                        'class' => 'form-control',
                        'type' => 'email',
                        'id' => 'email']) ?>
                    <spam class="text-danger"></spam>
                </div>
                <div class="mb-3">
                    <?= $this->Form->control('password', [
                        'required' => true,
                        'class' => 'form-control',
                        'label' => 'Senha']) ?>
                    <spam class="text-danger"></spam>
                </div>
                <div class="mb-3">

                    <?= $this->Form->submit(__('Entrar'), [
                        'class' => 'btn btn-primary btn-busca mb-3'
                    ]) ?>

                    <?= $this->Html->link(__('Voltar'), [
                        'controller' => 'Dashboard'],
                        ['class' => 'btn btn-danger mb-3']) ?>

                    <div class="mt-3 text-center">
                        <?= $this->Html->link('Esqueceu a senha?', [
                            'action' => 'esquecisenha'
                        ]) ?>
                    </div>
                    |
                    <?= $this->Html->link('Novo cadastro', [
                        'class' => 'text-decoration-none text-dark'
                    ], ['action' => 'cadpf']) ?>
                    <?= $this->Form->end() ?>
                </div>
            </div>
        </div>
    </div>
</div>
