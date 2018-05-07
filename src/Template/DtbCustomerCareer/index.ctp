<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DtbCustomerCareer[]|\Cake\Collection\CollectionInterface $dtbCustomerCareer
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Dtb Customer Career'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="dtbCustomerCareer index large-9 medium-8 columns content">
    <h3><?= __('Dtb Customer Career') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('customer_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('start_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('end_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('working_year') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($dtbCustomerCareer as $dtbCustomerCareer): ?>
            <tr>
                <td><?= $this->Number->format($dtbCustomerCareer->id) ?></td>
                <td><?= $this->Number->format($dtbCustomerCareer->customer_id) ?></td>
                <td><?= h($dtbCustomerCareer->start_date) ?></td>
                <td><?= h($dtbCustomerCareer->end_date) ?></td>
                <td><?= $this->Number->format($dtbCustomerCareer->working_year) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $dtbCustomerCareer->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $dtbCustomerCareer->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $dtbCustomerCareer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dtbCustomerCareer->id)]) ?>
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
