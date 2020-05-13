<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Skill[]|\Cake\Collection\CollectionInterface $skills
 */
?>

<?php
$this->Breadcrumbs->add(
    'Skills',
    ['controller' => 'skills', 'action' => 'index']
);

echo $this->Breadcrumbs->render(
    ['class' => 'breadcrumbs-trail'],
    ['separator' => '<i class="fa fa-angle-right"></i>']
);

?>
<div class="skills index content">
    <?= $this->Html->link(__('New Skill'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Skills') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($skills as $skill): ?>
                <tr>
                    <td><?= $this->Number->format($skill->id) ?></td>
                    <td><?= $skill->has('user') ? $this->Html->link($skill->user->username, ['controller' => 'Users', 'action' => 'view', $skill->user->id]) : '' ?></td>
                    <td><?= h($skill->name) ?></td>
                    <td><?= h($skill->created) ?></td>
                    <td><?= h($skill->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $skill->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $skill->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $skill->id], ['confirm' => __('Are you sure you want to delete # {0}?', $skill->id)]) ?>
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
