<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MtbWelfare $mtbWelfare
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Mtb Welfare'), ['action' => 'edit', $mtbWelfare->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Mtb Welfare'), ['action' => 'delete', $mtbWelfare->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mtbWelfare->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Mtb Welfare'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Mtb Welfare'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="mtbWelfare view large-9 medium-8 columns content">
    <h3><?= h($mtbWelfare->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($mtbWelfare->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rank') ?></th>
            <td><?= $this->Number->format($mtbWelfare->rank) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Name') ?></h4>
        <?= $this->Text->autoParagraph(h($mtbWelfare->name)); ?>
    </div>
    <div class="row">
        <h4><?= __('Name Vn') ?></h4>
        <?= $this->Text->autoParagraph(h($mtbWelfare->name_vn)); ?>
    </div>
</div>
