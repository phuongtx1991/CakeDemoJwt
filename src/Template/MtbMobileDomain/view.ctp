<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MtbMobileDomain $mtbMobileDomain
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Mtb Mobile Domain'), ['action' => 'edit', $mtbMobileDomain->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Mtb Mobile Domain'), ['action' => 'delete', $mtbMobileDomain->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mtbMobileDomain->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Mtb Mobile Domain'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Mtb Mobile Domain'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="mtbMobileDomain view large-9 medium-8 columns content">
    <h3><?= h($mtbMobileDomain->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($mtbMobileDomain->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rank') ?></th>
            <td><?= $this->Number->format($mtbMobileDomain->rank) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Name') ?></h4>
        <?= $this->Text->autoParagraph(h($mtbMobileDomain->name)); ?>
    </div>
</div>
