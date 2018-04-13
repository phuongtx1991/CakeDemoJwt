<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DtbCustomer[]|\Cake\Collection\CollectionInterface $dtbCustomer
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Dtb Customer'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="dtbCustomer index large-9 medium-8 columns content">
    <h3><?= __('Dtb Customer') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('customer_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('country_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pref') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sex') ?></th>
                <th scope="col"><?= $this->Paginator->sort('job') ?></th>
                <th scope="col"><?= $this->Paginator->sort('birth') ?></th>
                <th scope="col"><?= $this->Paginator->sort('reminder') ?></th>
                <th scope="col"><?= $this->Paginator->sort('first_buy_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('last_buy_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('buy_times') ?></th>
                <th scope="col"><?= $this->Paginator->sort('buy_total') ?></th>
                <th scope="col"><?= $this->Paginator->sort('point') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('create_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('update_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('del_flg') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mailmaga_flg') ?></th>
                <th scope="col"><?= $this->Paginator->sort('receive_work_info') ?></th>
                <th scope="col"><?= $this->Paginator->sort('marital_status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('current_address') ?></th>
                <th scope="col"><?= $this->Paginator->sort('education') ?></th>
                <th scope="col"><?= $this->Paginator->sort('current_salary') ?></th>
                <th scope="col"><?= $this->Paginator->sort('desired_salary') ?></th>
                <th scope="col"><?= $this->Paginator->sort('work_experience') ?></th>
                <th scope="col"><?= $this->Paginator->sort('jp_level') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($dtbCustomer as $dtbCustomer): ?>
            <tr>
                <td><?= $this->Number->format($dtbCustomer->customer_id) ?></td>
                <td><?= $this->Number->format($dtbCustomer->country_id) ?></td>
                <td><?= $this->Number->format($dtbCustomer->pref) ?></td>
                <td><?= $this->Number->format($dtbCustomer->sex) ?></td>
                <td><?= $this->Number->format($dtbCustomer->job) ?></td>
                <td><?= h($dtbCustomer->birth) ?></td>
                <td><?= $this->Number->format($dtbCustomer->reminder) ?></td>
                <td><?= h($dtbCustomer->first_buy_date) ?></td>
                <td><?= h($dtbCustomer->last_buy_date) ?></td>
                <td><?= $this->Number->format($dtbCustomer->buy_times) ?></td>
                <td><?= $this->Number->format($dtbCustomer->buy_total) ?></td>
                <td><?= $this->Number->format($dtbCustomer->point) ?></td>
                <td><?= $this->Number->format($dtbCustomer->status) ?></td>
                <td><?= h($dtbCustomer->create_date) ?></td>
                <td><?= h($dtbCustomer->update_date) ?></td>
                <td><?= $this->Number->format($dtbCustomer->del_flg) ?></td>
                <td><?= $this->Number->format($dtbCustomer->mailmaga_flg) ?></td>
                <td><?= $this->Number->format($dtbCustomer->receive_work_info) ?></td>
                <td><?= $this->Number->format($dtbCustomer->marital_status) ?></td>
                <td><?= $this->Number->format($dtbCustomer->current_address) ?></td>
                <td><?= $this->Number->format($dtbCustomer->education) ?></td>
                <td><?= $this->Number->format($dtbCustomer->current_salary) ?></td>
                <td><?= $this->Number->format($dtbCustomer->desired_salary) ?></td>
                <td><?= $this->Number->format($dtbCustomer->work_experience) ?></td>
                <td><?= $this->Number->format($dtbCustomer->jp_level) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $dtbCustomer->customer_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $dtbCustomer->customer_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $dtbCustomer->customer_id], ['confirm' => __('Are you sure you want to delete # {0}?', $dtbCustomer->customer_id)]) ?>
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
