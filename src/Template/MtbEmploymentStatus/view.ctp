<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MtbEmploymentStatus $mtbEmploymentStatus
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Mtb Employment Status'), ['action' => 'edit', $mtbEmploymentStatus->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Mtb Employment Status'), ['action' => 'delete', $mtbEmploymentStatus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mtbEmploymentStatus->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Mtb Employment Status'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Mtb Employment Status'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="mtbEmploymentStatus view large-9 medium-8 columns content">
    <h3><?= h($mtbEmploymentStatus->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($mtbEmploymentStatus->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rank') ?></th>
            <td><?= $this->Number->format($mtbEmploymentStatus->rank) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Name') ?></h4>
        <?= $this->Text->autoParagraph(h($mtbEmploymentStatus->name)); ?>
    </div>
    <div class="row">
        <h4><?= __('Name Vn') ?></h4>
        <?= $this->Text->autoParagraph(h($mtbEmploymentStatus->name_vn)); ?>
    </div>
</div>
