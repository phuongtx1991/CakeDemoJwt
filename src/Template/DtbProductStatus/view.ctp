<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DtbProductStatus $dtbProductStatus
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Dtb Product Status'), ['action' => 'edit', $dtbProductStatus->product_status_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Dtb Product Status'), ['action' => 'delete', $dtbProductStatus->product_status_id], ['confirm' => __('Are you sure you want to delete # {0}?', $dtbProductStatus->product_status_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Dtb Product Status'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Dtb Product Status'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="dtbProductStatus view large-9 medium-8 columns content">
    <h3><?= h($dtbProductStatus->product_status_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Product Status Id') ?></th>
            <td><?= $this->Number->format($dtbProductStatus->product_status_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Product Id') ?></th>
            <td><?= $this->Number->format($dtbProductStatus->product_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Creator Id') ?></th>
            <td><?= $this->Number->format($dtbProductStatus->creator_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Del Flg') ?></th>
            <td><?= $this->Number->format($dtbProductStatus->del_flg) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Create Date') ?></th>
            <td><?= h($dtbProductStatus->create_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Update Date') ?></th>
            <td><?= h($dtbProductStatus->update_date) ?></td>
        </tr>
    </table>
</div>
