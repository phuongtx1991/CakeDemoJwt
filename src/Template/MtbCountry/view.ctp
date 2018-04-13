<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MtbCountry $mtbCountry
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Mtb Country'), ['action' => 'edit', $mtbCountry->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Mtb Country'), ['action' => 'delete', $mtbCountry->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mtbCountry->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Mtb Country'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Mtb Country'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="mtbCountry view large-9 medium-8 columns content">
    <h3><?= h($mtbCountry->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($mtbCountry->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rank') ?></th>
            <td><?= $this->Number->format($mtbCountry->rank) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Name') ?></h4>
        <?= $this->Text->autoParagraph(h($mtbCountry->name)); ?>
    </div>
</div>
