<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MtbCity[]|\Cake\Collection\CollectionInterface $mtbCity
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Mtb City'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="mtbCity index large-9 medium-8 columns content">
    <h3><?= __('Mtb City') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('region_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('rank') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mtbCity as $mtbCity): ?>
            <tr>
                <td><?= $this->Number->format($mtbCity->id) ?></td>
                <td><?= $this->Number->format($mtbCity->region_id) ?></td>
                <td><?= $this->Number->format($mtbCity->rank) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $mtbCity->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $mtbCity->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $mtbCity->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mtbCity->id)]) ?>
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
