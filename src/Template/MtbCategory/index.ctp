<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MtbCategory[]|\Cake\Collection\CollectionInterface $mtbCategory
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Mtb Category'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="mtbCategory index large-9 medium-8 columns content">
    <h3><?= __('Mtb Category') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('object_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('rank') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mtbCategory as $mtbCategory): ?>
            <tr>
                <td><?= $this->Number->format($mtbCategory->id) ?></td>
                <td><?= $this->Number->format($mtbCategory->object_id) ?></td>
                <td><?= $this->Number->format($mtbCategory->rank) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $mtbCategory->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $mtbCategory->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $mtbCategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mtbCategory->id)]) ?>
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
