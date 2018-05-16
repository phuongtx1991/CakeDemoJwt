<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MtbCategory $mtbCategory
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Mtb Category'), ['action' => 'edit', $mtbCategory->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Mtb Category'), ['action' => 'delete', $mtbCategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mtbCategory->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Mtb Category'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Mtb Category'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="mtbCategory view large-9 medium-8 columns content">
    <h3><?= h($mtbCategory->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($mtbCategory->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Object Id') ?></th>
            <td><?= $this->Number->format($mtbCategory->object_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rank') ?></th>
            <td><?= $this->Number->format($mtbCategory->rank) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mobile View') ?></th>
            <td><?= $this->Number->format($mtbCategory->mobile_view) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Name') ?></h4>
        <?= $this->Text->autoParagraph(h($mtbCategory->name)); ?>
    </div>
    <div class="row">
        <h4><?= __('Name Vn') ?></h4>
        <?= $this->Text->autoParagraph(h($mtbCategory->name_vn)); ?>
    </div>
</div>
