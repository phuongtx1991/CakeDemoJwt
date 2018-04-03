<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DtbProduct[]|\Cake\Collection\CollectionInterface $dtbProducts
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Dtb Product'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="dtbProducts index large-9 medium-8 columns content">
    <h3><?= __('Dtb Products') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('product_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('maker_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('del_flg') ?></th>
                <th scope="col"><?= $this->Paginator->sort('creator_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('create_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('update_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('deliv_date_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dummy_flg') ?></th>
                <th scope="col"><?= $this->Paginator->sort('position') ?></th>
                <th scope="col"><?= $this->Paginator->sort('end_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('offer_number') ?></th>
                <th scope="col"><?= $this->Paginator->sort('client_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('client_pref') ?></th>
                <th scope="col"><?= $this->Paginator->sort('target') ?></th>
                <th scope="col"><?= $this->Paginator->sort('employment_status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('salary_type') ?></th>
                <th scope="col"><?= $this->Paginator->sort('currency') ?></th>
                <th scope="col"><?= $this->Paginator->sort('salary_min') ?></th>
                <th scope="col"><?= $this->Paginator->sort('salary_max') ?></th>
                <th scope="col"><?= $this->Paginator->sort('region') ?></th>
                <th scope="col"><?= $this->Paginator->sort('city') ?></th>
                <th scope="col"><?= $this->Paginator->sort('concierge') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($dtbProducts as $dtbProduct): ?>
            <tr>
                <td><?= $this->Number->format($dtbProduct->product_id) ?></td>
                <td><?= $this->Number->format($dtbProduct->maker_id) ?></td>
                <td><?= $this->Number->format($dtbProduct->status) ?></td>
                <td><?= $this->Number->format($dtbProduct->del_flg) ?></td>
                <td><?= $this->Number->format($dtbProduct->creator_id) ?></td>
                <td><?= h($dtbProduct->create_date) ?></td>
                <td><?= h($dtbProduct->update_date) ?></td>
                <td><?= $this->Number->format($dtbProduct->deliv_date_id) ?></td>
                <td><?= $this->Number->format($dtbProduct->dummy_flg) ?></td>
                <td><?= $this->Number->format($dtbProduct->position) ?></td>
                <td><?= h($dtbProduct->end_date) ?></td>
                <td><?= $this->Number->format($dtbProduct->offer_number) ?></td>
                <td><?= $this->Number->format($dtbProduct->client_id) ?></td>
                <td><?= $this->Number->format($dtbProduct->client_pref) ?></td>
                <td><?= $this->Number->format($dtbProduct->target) ?></td>
                <td><?= $this->Number->format($dtbProduct->employment_status) ?></td>
                <td><?= $this->Number->format($dtbProduct->salary_type) ?></td>
                <td><?= $this->Number->format($dtbProduct->currency) ?></td>
                <td><?= $this->Number->format($dtbProduct->salary_min) ?></td>
                <td><?= $this->Number->format($dtbProduct->salary_max) ?></td>
                <td><?= $this->Number->format($dtbProduct->region) ?></td>
                <td><?= $this->Number->format($dtbProduct->city) ?></td>
                <td><?= $this->Number->format($dtbProduct->concierge) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $dtbProduct->product_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $dtbProduct->product_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $dtbProduct->product_id], ['confirm' => __('Are you sure you want to delete # {0}?', $dtbProduct->product_id)]) ?>
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
