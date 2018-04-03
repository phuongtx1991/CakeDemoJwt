<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MtbPosition $mtbPosition
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Mtb Position'), ['action' => 'edit', $mtbPosition->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Mtb Position'), ['action' => 'delete', $mtbPosition->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mtbPosition->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Mtb Position'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Mtb Position'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="mtbPosition view large-9 medium-8 columns content">
    <h3><?= h($mtbPosition->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($mtbPosition->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rank') ?></th>
            <td><?= $this->Number->format($mtbPosition->rank) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Name') ?></h4>
        <?= $this->Text->autoParagraph(h($mtbPosition->name)); ?>
    </div>
    <div class="row">
        <h4><?= __('Name Vn') ?></h4>
        <?= $this->Text->autoParagraph(h($mtbPosition->name_vn)); ?>
    </div>
</div>
