<?php
/**
 *Author: Israel C A Silva
 *git: https://github.com/israelsilva1310
 *HomePage: https://israelcasilva.com.br
 **/
?>

<h3>Login</h3>
<?= $this->Form->create() ?>
<div class="col-md-6 my-3">
    <?= $this->Flash->render() ?>
    <div class="card">
        <div class="card-header">
            Acesso para Pessoas
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
            <?= $this->Form->submit(__('Entrar'), [
                'class' => 'btn btn-primary btn-busca mb-3'
            ]) ?>
            <div style="display:none"><label>Preencha este campo para continuar</label><input type="text"
                    <?= $this->Form->end() ?>
                                                                                              name="campo1"
                                                                                              value=""></div>

            <div class="mt-3 text-center">
                <a href="/balcao/esqueciasenha/1" class="text-decoration-none text-dark"><i
                        class="bi bi-question-circle-fill"></i> Esqueceu a senha?</a> |
                <a href="/balcao/cadastro/curriculo" class="text-decoration-none text-dark"><i
                        class="bi bi-person-fill-add"></i> Novo cadastro</a>
                <?= $this->Html->link("Cadastrar", ['action' => 'cadpf']) ?>
            </div>
        </div>
    </div>
</div>
