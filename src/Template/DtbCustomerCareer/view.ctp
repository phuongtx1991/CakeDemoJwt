<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DtbCustomerCareer $dtbCustomerCareer
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Dtb Customer Career'), ['action' => 'edit', $dtbCustomerCareer->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Dtb Customer Career'), ['action' => 'delete', $dtbCustomerCareer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dtbCustomerCareer->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Dtb Customer Career'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Dtb Customer Career'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="dtbCustomerCareer view large-9 medium-8 columns content">
    <h3><?= h($dtbCustomerCareer->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($dtbCustomerCareer->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Customer Id') ?></th>
            <td><?= $this->Number->format($dtbCustomerCareer->customer_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Working Year') ?></th>
            <td><?= $this->Number->format($dtbCustomerCareer->working_year) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Start Date') ?></th>
            <td><?= h($dtbCustomerCareer->start_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('End Date') ?></th>
            <td><?= h($dtbCustomerCareer->end_date) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Working Company Name') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbCustomerCareer->working_company_name)); ?>
    </div>
    <div class="row">
        <h4><?= __('Position') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbCustomerCareer->position)); ?>
    </div>
    <div class="row">
        <h4><?= __('Job Description') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbCustomerCareer->job_description)); ?>
    </div>
</div>
