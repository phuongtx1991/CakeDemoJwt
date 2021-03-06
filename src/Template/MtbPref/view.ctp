<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MtbPref $mtbPref
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Mtb Pref'), ['action' => 'edit', $mtbPref->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Mtb Pref'), ['action' => 'delete', $mtbPref->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mtbPref->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Mtb Pref'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Mtb Pref'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="mtbPref view large-9 medium-8 columns content">
    <h3><?= h($mtbPref->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($mtbPref->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Object Id') ?></th>
            <td><?= $this->Number->format($mtbPref->object_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rank') ?></th>
            <td><?= $this->Number->format($mtbPref->rank) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Name') ?></h4>
        <?= $this->Text->autoParagraph(h($mtbPref->name)); ?>
    </div>
    <div class="row">
        <h4><?= __('Name Vn') ?></h4>
        <?= $this->Text->autoParagraph(h($mtbPref->name_vn)); ?>
    </div>
</div>
