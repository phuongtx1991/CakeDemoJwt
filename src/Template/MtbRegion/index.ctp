<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MtbRegion[]|\Cake\Collection\CollectionInterface $mtbRegion
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Mtb Region'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="mtbRegion index large-9 medium-8 columns content">
    <h3><?= __('Mtb Region') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('rank') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mtbRegion as $mtbRegion): ?>
            <tr>
                <td><?= $this->Number->format($mtbRegion->id) ?></td>
                <td><?= $this->Number->format($mtbRegion->rank) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $mtbRegion->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $mtbRegion->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $mtbRegion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mtbRegion->id)]) ?>
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
