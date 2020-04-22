<?php

/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $users
 */
?>

<div class="users index content">
    <?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Users') ?></h3>

    <?= $this->Form->create(null, ['type' => 'get']) ?>
    <?= $this->Form->control('key', ['label' => 'Search', 'value' => $this->request->getQuery('key'), 'autocomplete' => 'off']) ?>
    <?= $this->Form->submit() ?>
    <?= $this->Form->end() ?>

    <div class="table-responsive">
        <?= $this->Form->create(null, ['url' => ['action' => 'deleteAll']]) ?>
        <button>Delete All</button>
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('username') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('image') ?></th>
                    <th>Mobile</th>
                    <th>Skills</th>
                    <th><?= $this->Paginator->sort('Change Status') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($users as $user) : ?>
                    <tr>
                        <td><?= $this->Form->checkbox('ids[]', ['value' => $user->id]) ?></td>

                        <td><?= $this->Number->format($user->id) ?></td>
                        <td><?= h($user->username) ?></td>
                        <td><?= h($user->email) ?></td>
                        <td><?= @$this->Html->image($user->image, ['style' => 'max-width:50px;height:50px;border-radius:50%;']) ?></td>
                        <td><?= @h($user->profile->mobile) ?></td>
                        
                        <td>
                           <?php 
                                foreach ($user->skills as $key => $skill) {
                                    echo $skill->name." ";
                                }
                           ?>
                        </td>

                        <td>

                            <?php if ($user->status == 1) : ?>
                                <?= $this->Form->postLink(__('Inactive'), ['action' => 'userStatus', $user->id, $user->status], ['block' => true, 'confirm' => __('Are you sure you want to inactive # {0}?', $user->id)]) ?>
                            <?php else : ?>
                                <?= $this->Form->postLink(__('Active'), ['action' => 'userStatus', $user->id, $user->status], ['block' => true, 'confirm' => __('Are you sure you want to active # {0}?', $user->id)]) ?>
                            <?php endif; ?>

                        </td>

                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $user->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['block' => true, 'confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>

        </table>
        <?= $this->Form->end() ?>
        <?= $this->fetch('postLink'); ?>
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