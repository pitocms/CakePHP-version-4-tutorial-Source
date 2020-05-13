<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Skill $skill
 */
?>

<?php
$this->Breadcrumbs->add(
    'Skills',
    ['controller' => 'skills', 'action' => 'index']
);

$this->Breadcrumbs->add(
    'add',
    ['controller' => 'skills', 'action' => 'add']
);

$this->Breadcrumbs->setTemplates([
    'wrapper' => '<nav class="test"><ul{{attrs}}>{{content}}</ul></nav>',
]);


echo $this->Breadcrumbs->render(
    ['class' => 'breadcrumbs-trail'],
    ['separator' => '<i class="fa fa-angle-right"></i>']
);



?>

<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Skills'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="skills form content">
            <?= $this->Form->create($skill) ?>
            <fieldset>
                <legend><?= __('Add Skill') ?></legend>
                <?php
                echo $this->Form->control('user_id', ['options' => $users]);
                echo $this->Form->control('name');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>