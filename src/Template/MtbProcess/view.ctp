<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MtbProces $mtbProces
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Mtb Proces'), ['action' => 'edit', $mtbProces->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Mtb Proces'), ['action' => 'delete', $mtbProces->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mtbProces->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Mtb Process'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Mtb Proces'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="mtbProcess view large-9 medium-8 columns content">
    <h3><?= h($mtbProces->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($mtbProces->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rank') ?></th>
            <td><?= $this->Number->format($mtbProces->rank) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Name') ?></h4>
        <?= $this->Text->autoParagraph(h($mtbProces->name)); ?>
    </div>
    <div class="row">
        <h4><?= __('Name Vn') ?></h4>
        <?= $this->Text->autoParagraph(h($mtbProces->name_vn)); ?>
    </div>
</div>
