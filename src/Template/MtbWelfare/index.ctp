<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MtbWelfare[]|\Cake\Collection\CollectionInterface $mtbWelfare
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Mtb Welfare'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="mtbWelfare index large-9 medium-8 columns content">
    <h3><?= __('Mtb Welfare') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('rank') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mtbWelfare as $mtbWelfare): ?>
            <tr>
                <td><?= $this->Number->format($mtbWelfare->id) ?></td>
                <td><?= $this->Number->format($mtbWelfare->rank) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $mtbWelfare->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $mtbWelfare->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $mtbWelfare->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mtbWelfare->id)]) ?>
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
