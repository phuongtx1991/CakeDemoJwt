<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MtbMobileDomain $mtbMobileDomain
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Mtb Mobile Domain'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="mtbMobileDomain form large-9 medium-8 columns content">
    <?= $this->Form->create($mtbMobileDomain) ?>
    <fieldset>
        <legend><?= __('Add Mtb Mobile Domain') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('rank');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
