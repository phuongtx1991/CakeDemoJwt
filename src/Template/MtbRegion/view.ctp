<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MtbRegion $mtbRegion
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Mtb Region'), ['action' => 'edit', $mtbRegion->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Mtb Region'), ['action' => 'delete', $mtbRegion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mtbRegion->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Mtb Region'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Mtb Region'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="mtbRegion view large-9 medium-8 columns content">
    <h3><?= h($mtbRegion->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($mtbRegion->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rank') ?></th>
            <td><?= $this->Number->format($mtbRegion->rank) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Name') ?></h4>
        <?= $this->Text->autoParagraph(h($mtbRegion->name)); ?>
    </div>
    <div class="row">
        <h4><?= __('Name Vn') ?></h4>
        <?= $this->Text->autoParagraph(h($mtbRegion->name_vn)); ?>
    </div>
</div>
