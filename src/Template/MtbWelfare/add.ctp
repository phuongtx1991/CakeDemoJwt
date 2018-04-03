<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MtbWelfare $mtbWelfare
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Mtb Welfare'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="mtbWelfare form large-9 medium-8 columns content">
    <?= $this->Form->create($mtbWelfare) ?>
    <fieldset>
        <legend><?= __('Add Mtb Welfare') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('name_vn');
            echo $this->Form->control('rank');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
