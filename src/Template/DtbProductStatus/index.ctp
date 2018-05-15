<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DtbProductStatus[]|\Cake\Collection\CollectionInterface $dtbProductStatus
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Dtb Product Status'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="dtbProductStatus index large-9 medium-8 columns content">
    <h3><?= __('Dtb Product Status') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('product_status_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('product_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('creator_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('create_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('update_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('del_flg') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($dtbProductStatus as $dtbProductStatus): ?>
            <tr>
                <td><?= $this->Number->format($dtbProductStatus->product_status_id) ?></td>
                <td><?= $this->Number->format($dtbProductStatus->product_id) ?></td>
                <td><?= $this->Number->format($dtbProductStatus->creator_id) ?></td>
                <td><?= h($dtbProductStatus->create_date) ?></td>
                <td><?= h($dtbProductStatus->update_date) ?></td>
                <td><?= $this->Number->format($dtbProductStatus->del_flg) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $dtbProductStatus->product_status_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $dtbProductStatus->product_status_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $dtbProductStatus->product_status_id], ['confirm' => __('Are you sure you want to delete # {0}?', $dtbProductStatus->product_status_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
