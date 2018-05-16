<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MtbCategory $mtbCategory
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Mtb Category'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="mtbCategory form large-9 medium-8 columns content">
    <?= $this->Form->create($mtbCategory) ?>
    <fieldset>
        <legend><?= __('Add Mtb Category') ?></legend>
        <?php
            echo $this->Form->control('object_id');
            echo $this->Form->control('name');
            echo $this->Form->control('name_vn');
            echo $this->Form->control('rank');
            echo $this->Form->control('mobile_view');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
