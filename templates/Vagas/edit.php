<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Vaga $vaga
 * @var string[]|\Cake\Collection\CollectionInterface $empresas
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $vaga->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $vaga->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Vagas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="vagas form content">
            <?= $this->Form->create($vaga) ?>
            <fieldset>
                <legend><?= __('Edit Vaga') ?></legend>
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
