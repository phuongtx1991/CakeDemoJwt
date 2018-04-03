<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MtbRegion $mtbRegion
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Mtb Region'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="mtbRegion form large-9 medium-8 columns content">
    <?= $this->Form->create($mtbRegion) ?>
    <fieldset>
        <legend><?= __('Add Mtb Region') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('name_vn');
            echo $this->Form->control('rank');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
