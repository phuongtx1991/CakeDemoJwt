<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MtbCity $mtbCity
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $mtbCity->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $mtbCity->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Mtb City'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="mtbCity form large-9 medium-8 columns content">
    <?= $this->Form->create($mtbCity) ?>
    <fieldset>
        <legend><?= __('Edit Mtb City') ?></legend>
        <?php
            echo $this->Form->control('region_id');
            echo $this->Form->control('name');
            echo $this->Form->control('name_vn');
            echo $this->Form->control('rank');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
