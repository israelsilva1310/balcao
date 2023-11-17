<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Vaga $vaga
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Vaga'), ['action' => 'edit', $vaga->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Vaga'), ['action' => 'delete', $vaga->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vaga->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Vagas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Vaga'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="vagas view content">
            <h3><?= h($vaga->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Titulo') ?></th>
                    <td><?= h($vaga->titulo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Office') ?></th>
                    <td><?= h($vaga->office) ?></td>
                </tr>
                <tr>
                    <th><?= __('Escolaridade') ?></th>
                    <td><?= h($vaga->escolaridade) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ingles') ?></th>
                    <td><?= h($vaga->ingles) ?></td>
                </tr>
                <tr>
                    <th><?= __('Espanhol') ?></th>
                    <td><?= h($vaga->espanhol) ?></td>
                </tr>
                <tr>
                    <th><?= __('Informatica') ?></th>
                    <td><?= h($vaga->informatica) ?></td>
                </tr>
                <tr>
                    <th><?= __('Slug') ?></th>
                    <td><?= h($vaga->slug) ?></td>
                </tr>
                <tr>
                    <th><?= __('Empresa') ?></th>
                    <td><?= $vaga->hasValue('empresa') ? $this->Html->link($vaga->empresa->id, ['controller' => 'Empresas', 'action' => 'view', $vaga->empresa->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($vaga->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Num Vagas') ?></th>
                    <td><?= $vaga->num_vagas === null ? '' : $this->Number->format($vaga->num_vagas) ?></td>
                </tr>
                <tr>
                    <th><?= __('Profissional Area Id') ?></th>
                    <td><?= $vaga->profissional_area_id === null ? '' : $this->Number->format($vaga->profissional_area_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($vaga->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($vaga->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Vale Alimentacao') ?></th>
                    <td><?= $vaga->vale_alimentacao ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Vale Refeicao') ?></th>
                    <td><?= $vaga->vale_refeicao ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Vale Combustivel') ?></th>
                    <td><?= $vaga->vale_combustivel ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Seguro Vida') ?></th>
                    <td><?= $vaga->seguro_vida ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Cnh A') ?></th>
                    <td><?= $vaga->cnh_a ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Publicar') ?></th>
                    <td><?= $vaga->publicar ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Descricao') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($vaga->descricao)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Outros') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($vaga->outros)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
