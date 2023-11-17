<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Vaga> $vagas
 */
?>
<div class="vagas index content">
    <?= $this->Html->link(__('New Vaga'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Vagas') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('titulo') ?></th>
                    <th><?= $this->Paginator->sort('num_vagas') ?></th>
                    <th><?= $this->Paginator->sort('vale_alimentacao') ?></th>
                    <th><?= $this->Paginator->sort('vale_refeicao') ?></th>
                    <th><?= $this->Paginator->sort('vale_combustivel') ?></th>
                    <th><?= $this->Paginator->sort('seguro_vida') ?></th>
                    <th><?= $this->Paginator->sort('office') ?></th>
                    <th><?= $this->Paginator->sort('profissional_area_id') ?></th>
                    <th><?= $this->Paginator->sort('cnh_a') ?></th>
                    <th><?= $this->Paginator->sort('escolaridade') ?></th>
                    <th><?= $this->Paginator->sort('ingles') ?></th>
                    <th><?= $this->Paginator->sort('espanhol') ?></th>
                    <th><?= $this->Paginator->sort('informatica') ?></th>
                    <th><?= $this->Paginator->sort('slug') ?></th>
                    <th><?= $this->Paginator->sort('publicar') ?></th>
                    <th><?= $this->Paginator->sort('empresa_id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($vagas as $vaga): ?>
                <tr>
                    <td><?= $this->Number->format($vaga->id) ?></td>
                    <td><?= h($vaga->titulo) ?></td>
                    <td><?= $vaga->num_vagas === null ? '' : $this->Number->format($vaga->num_vagas) ?></td>
                    <td><?= h($vaga->vale_alimentacao) ?></td>
                    <td><?= h($vaga->vale_refeicao) ?></td>
                    <td><?= h($vaga->vale_combustivel) ?></td>
                    <td><?= h($vaga->seguro_vida) ?></td>
                    <td><?= h($vaga->office) ?></td>
                    <td><?= $vaga->profissional_area_id === null ? '' : $this->Number->format($vaga->profissional_area_id) ?></td>
                    <td><?= h($vaga->cnh_a) ?></td>
                    <td><?= h($vaga->escolaridade) ?></td>
                    <td><?= h($vaga->ingles) ?></td>
                    <td><?= h($vaga->espanhol) ?></td>
                    <td><?= h($vaga->informatica) ?></td>
                    <td><?= h($vaga->slug) ?></td>
                    <td><?= h($vaga->publicar) ?></td>
                    <td><?= $vaga->hasValue('empresa') ? $this->Html->link($vaga->empresa->id, ['controller' => 'Empresas', 'action' => 'view', $vaga->empresa->id]) : '' ?></td>
                    <td><?= h($vaga->created) ?></td>
                    <td><?= h($vaga->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $vaga->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $vaga->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $vaga->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vaga->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
