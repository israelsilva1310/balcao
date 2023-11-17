<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="users view content">
            <h3><?= h($user->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($user->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Role') ?></th>
                    <td><?= $user->hasValue('role') ? $this->Html->link($user->role->id, ['controller' => 'Roles', 'action' => 'view', $user->role->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($user->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($user->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($user->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Candidatos') ?></h4>
                <?php if (!empty($user->candidatos)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Person Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Professional Area Id') ?></th>
                            <th><?= __('Titulation') ?></th>
                            <th><?= __('Is Favorite') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->candidatos as $candidatos) : ?>
                        <tr>
                            <td><?= h($candidatos->id) ?></td>
                            <td><?= h($candidatos->person_id) ?></td>
                            <td><?= h($candidatos->user_id) ?></td>
                            <td><?= h($candidatos->professional_area_id) ?></td>
                            <td><?= h($candidatos->titulation) ?></td>
                            <td><?= h($candidatos->is_favorite) ?></td>
                            <td><?= h($candidatos->created) ?></td>
                            <td><?= h($candidatos->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Candidatos', 'action' => 'view', $candidatos->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Candidatos', 'action' => 'edit', $candidatos->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Candidatos', 'action' => 'delete', $candidatos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $candidatos->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Empregadores') ?></h4>
                <?php if (!empty($user->empregadores)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Person Id') ?></th>
                            <th><?= __('Position Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->empregadores as $empregadores) : ?>
                        <tr>
                            <td><?= h($empregadores->id) ?></td>
                            <td><?= h($empregadores->person_id) ?></td>
                            <td><?= h($empregadores->position_id) ?></td>
                            <td><?= h($empregadores->user_id) ?></td>
                            <td><?= h($empregadores->created) ?></td>
                            <td><?= h($empregadores->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Empregadores', 'action' => 'view', $empregadores->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Empregadores', 'action' => 'edit', $empregadores->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Empregadores', 'action' => 'delete', $empregadores->id], ['confirm' => __('Are you sure you want to delete # {0}?', $empregadores->id)]) ?>
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
