<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MtbProces $mtbProces
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Mtb Process'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="mtbProcess form large-9 medium-8 columns content">
    <?= $this->Form->create($mtbProces) ?>
    <fieldset>
        <legend><?= __('Add Mtb Proces') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('name_vn');
            echo $this->Form->control('rank');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
