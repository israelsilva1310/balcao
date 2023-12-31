<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Empresa $empresa
 * @var string[]|\Cake\Collection\CollectionInterface $users
 * @var string[]|\Cake\Collection\CollectionInterface $municipios
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $empresa->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $empresa->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Empresas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="empresas form content">
            <?= $this->Form->create($empresa) ?>
            <fieldset>
                <legend><?= __('Edit Empresa') ?></legend>
                <?php
                    echo $this->Form->control('razaosocial');
                    echo $this->Form->control('nome_fantasia');
                    echo $this->Form->control('telefone');
                    echo $this->Form->control('email');
                    echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
                    echo $this->Form->control('missao');
                    echo $this->Form->control('visao');
                    echo $this->Form->control('valores');
                    echo $this->Form->control('is_pj');
                    echo $this->Form->control('municipio_id', ['options' => $municipios, 'empty' => true]);
                    echo $this->Form->control('cpfcnpj');
                    echo $this->Form->control('ie');
                    echo $this->Form->control('ativo');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
