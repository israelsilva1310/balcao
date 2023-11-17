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
            <?= $this->Html->link(__('Edit Curriculo'), ['action' => 'edit', $curriculo->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Curriculo'), ['action' => 'delete', $curriculo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $curriculo->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Curriculos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Curriculo'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="curriculos view content">
            <h3><?= h($curriculo->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nome') ?></th>
                    <td><?= h($curriculo->nome) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estado Civil') ?></th>
                    <td><?= h($curriculo->estado_civil) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cnh Outros') ?></th>
                    <td><?= h($curriculo->cnh_outros) ?></td>
                </tr>
                <tr>
                    <th><?= __('Celular') ?></th>
                    <td><?= h($curriculo->celular) ?></td>
                </tr>
                <tr>
                    <th><?= __('Contato Tipo') ?></th>
                    <td><?= h($curriculo->contato_tipo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cep') ?></th>
                    <td><?= h($curriculo->cep) ?></td>
                </tr>
                <tr>
                    <th><?= __('Logradouro') ?></th>
                    <td><?= h($curriculo->logradouro) ?></td>
                </tr>
                <tr>
                    <th><?= __('Numero') ?></th>
                    <td><?= h($curriculo->numero) ?></td>
                </tr>
                <tr>
                    <th><?= __('Complemento') ?></th>
                    <td><?= h($curriculo->complemento) ?></td>
                </tr>
                <tr>
                    <th><?= __('Bairro') ?></th>
                    <td><?= h($curriculo->bairro) ?></td>
                </tr>
                <tr>
                    <th><?= __('Municipio') ?></th>
                    <td><?= h($curriculo->municipio) ?></td>
                </tr>
                <tr>
                    <th><?= __('Uf') ?></th>
                    <td><?= h($curriculo->uf) ?></td>
                </tr>
                <tr>
                    <th><?= __('Grau Instrucao') ?></th>
                    <td><?= h($curriculo->grau_instrucao) ?></td>
                </tr>
                <tr>
                    <th><?= __('Curso Formacao') ?></th>
                    <td><?= h($curriculo->curso_formacao) ?></td>
                </tr>
                <tr>
                    <th><?= __('Instituicao Ensino') ?></th>
                    <td><?= h($curriculo->instituicao_ensino) ?></td>
                </tr>
                <tr>
                    <th><?= __('Inicio Formacao') ?></th>
                    <td><?= h($curriculo->inicio_formacao) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fim Formacao') ?></th>
                    <td><?= h($curriculo->fim_formacao) ?></td>
                </tr>
                <tr>
                    <th><?= __('Outros Cursos Formacao') ?></th>
                    <td><?= h($curriculo->outros_cursos_formacao) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ingles') ?></th>
                    <td><?= h($curriculo->ingles) ?></td>
                </tr>
                <tr>
                    <th><?= __('Espanhol') ?></th>
                    <td><?= h($curriculo->espanhol) ?></td>
                </tr>
                <tr>
                    <th><?= __('Informatica') ?></th>
                    <td><?= h($curriculo->informatica) ?></td>
                </tr>
                <tr>
                    <th><?= __('Office') ?></th>
                    <td><?= h($curriculo->office) ?></td>
                </tr>
                <tr>
                    <th><?= __('Outras Habilidades') ?></th>
                    <td><?= h($curriculo->outras_habilidades) ?></td>
                </tr>
                <tr>
                    <th><?= __('Obj Area Atuation') ?></th>
                    <td><?= h($curriculo->obj_area_atuation) ?></td>
                </tr>
                <tr>
                    <th><?= __('Conhecimento Geral') ?></th>
                    <td><?= h($curriculo->Conhecimento_geral) ?></td>
                </tr>
                <tr>
                    <th><?= __('Conhecimento Informatica') ?></th>
                    <td><?= h($curriculo->conhecimento_informatica) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($curriculo->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Candidate Id') ?></th>
                    <td><?= $curriculo->candidate_id === null ? '' : $this->Number->format($curriculo->candidate_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Dt Nasc') ?></th>
                    <td><?= h($curriculo->dt_nasc) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($curriculo->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($curriculo->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cnh A') ?></th>
                    <td><?= $curriculo->cnh_a ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Experiencias') ?></h4>
                <?php if (!empty($curriculo->experiencias)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Curriculo Id') ?></th>
                            <th><?= __('Empresa') ?></th>
                            <th><?= __('Inicio') ?></th>
                            <th><?= __('Fim') ?></th>
                            <th><?= __('Cargo') ?></th>
                            <th><?= __('Responsabilidade') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($curriculo->experiencias as $experiencias) : ?>
                        <tr>
                            <td><?= h($experiencias->id) ?></td>
                            <td><?= h($experiencias->curriculo_id) ?></td>
                            <td><?= h($experiencias->empresa) ?></td>
                            <td><?= h($experiencias->inicio) ?></td>
                            <td><?= h($experiencias->fim) ?></td>
                            <td><?= h($experiencias->cargo) ?></td>
                            <td><?= h($experiencias->responsabilidade) ?></td>
                            <td><?= h($experiencias->created) ?></td>
                            <td><?= h($experiencias->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Experiencias', 'action' => 'view', $experiencias->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Experiencias', 'action' => 'edit', $experiencias->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Experiencias', 'action' => 'delete', $experiencias->id], ['confirm' => __('Are you sure you want to delete # {0}?', $experiencias->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
