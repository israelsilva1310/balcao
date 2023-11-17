<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Curriculo $curriculo
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $curriculo->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $curriculo->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Curriculos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="curriculos form content">
            <?= $this->Form->create($curriculo) ?>
            <fieldset>
                <legend><?= __('Edit Curriculo') ?></legend>
                <?php
                    echo $this->Form->control('candidate_id');
                    echo $this->Form->control('nome');
                    echo $this->Form->control('dt_nasc', ['empty' => true]);
                    echo $this->Form->control('estado_civil');
                    echo $this->Form->control('cnh_a');
                    echo $this->Form->control('cnh_outros');
                    echo $this->Form->control('celular');
                    echo $this->Form->control('contato_tipo');
                    echo $this->Form->control('cep');
                    echo $this->Form->control('logradouro');
                    echo $this->Form->control('numero');
                    echo $this->Form->control('complemento');
                    echo $this->Form->control('bairro');
                    echo $this->Form->control('municipio');
                    echo $this->Form->control('uf');
                    echo $this->Form->control('grau_instrucao');
                    echo $this->Form->control('curso_formacao');
                    echo $this->Form->control('instituicao_ensino');
                    echo $this->Form->control('inicio_formacao');
                    echo $this->Form->control('fim_formacao');
                    echo $this->Form->control('outros_cursos_formacao');
                    echo $this->Form->control('ingles');
                    echo $this->Form->control('espanhol');
                    echo $this->Form->control('informatica');
                    echo $this->Form->control('office');
                    echo $this->Form->control('outras_habilidades');
                    echo $this->Form->control('obj_area_atuation');
                    echo $this->Form->control('Conhecimento_geral');
                    echo $this->Form->control('conhecimento_informatica');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
