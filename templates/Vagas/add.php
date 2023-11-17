<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Vaga $vaga
 * @var \Cake\Collection\CollectionInterface|string[] $empresas
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Vagas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="vagas form content">
            <?= $this->Form->create($vaga) ?>
            <fieldset>
                <legend><?= __('Add Vaga') ?></legend>
                <?php
                    echo $this->Form->control('titulo');
                    echo $this->Form->control('descricao');
                    echo $this->Form->control('num_vagas');
                    echo $this->Form->control('vale_alimentacao');
                    echo $this->Form->control('vale_refeicao');
                    echo $this->Form->control('vale_combustivel');
                    echo $this->Form->control('seguro_vida');
                    echo $this->Form->control('office');
                    echo $this->Form->control('profissional_area_id');
                    echo $this->Form->control('cnh_a');
                    echo $this->Form->control('escolaridade');
                    echo $this->Form->control('ingles');
                    echo $this->Form->control('espanhol');
                    echo $this->Form->control('informatica');
                    echo $this->Form->control('outros');
                    echo $this->Form->control('slug');
                    echo $this->Form->control('publicar');
                    echo $this->Form->control('empresa_id', ['options' => $empresas, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
