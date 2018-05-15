<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DtbProductStatus $dtbProductStatus
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Dtb Product Status'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="dtbProductStatus form large-9 medium-8 columns content">
    <?= $this->Form->create($dtbProductStatus) ?>
    <fieldset>
        <legend><?= __('Add Dtb Product Status') ?></legend>
        <?php
            echo $this->Form->control('creator_id');
            echo $this->Form->control('create_date');
            echo $this->Form->control('update_date');
            echo $this->Form->control('del_flg');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
