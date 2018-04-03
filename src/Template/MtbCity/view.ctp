<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MtbCity $mtbCity
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Mtb City'), ['action' => 'edit', $mtbCity->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Mtb City'), ['action' => 'delete', $mtbCity->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mtbCity->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Mtb City'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Mtb City'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="mtbCity view large-9 medium-8 columns content">
    <h3><?= h($mtbCity->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($mtbCity->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Region Id') ?></th>
            <td><?= $this->Number->format($mtbCity->region_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rank') ?></th>
            <td><?= $this->Number->format($mtbCity->rank) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Name') ?></h4>
        <?= $this->Text->autoParagraph(h($mtbCity->name)); ?>
    </div>
    <div class="row">
        <h4><?= __('Name Vn') ?></h4>
        <?= $this->Text->autoParagraph(h($mtbCity->name_vn)); ?>
    </div>
</div>
