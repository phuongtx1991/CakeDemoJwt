<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MtbCountry $mtbCountry
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $mtbCountry->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $mtbCountry->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Mtb Country'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="mtbCountry form large-9 medium-8 columns content">
    <?= $this->Form->create($mtbCountry) ?>
    <fieldset>
        <legend><?= __('Edit Mtb Country') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('rank');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
