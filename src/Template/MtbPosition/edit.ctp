<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MtbPosition $mtbPosition
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $mtbPosition->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $mtbPosition->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Mtb Position'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="mtbPosition form large-9 medium-8 columns content">
    <?= $this->Form->create($mtbPosition) ?>
    <fieldset>
        <legend><?= __('Edit Mtb Position') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('name_vn');
            echo $this->Form->control('rank');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
