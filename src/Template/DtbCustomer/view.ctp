<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DtbCustomer $dtbCustomer
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Dtb Customer'), ['action' => 'edit', $dtbCustomer->customer_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Dtb Customer'), ['action' => 'delete', $dtbCustomer->customer_id], ['confirm' => __('Are you sure you want to delete # {0}?', $dtbCustomer->customer_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Dtb Customer'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Dtb Customer'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="dtbCustomer view large-9 medium-8 columns content">
    <h3><?= h($dtbCustomer->customer_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Customer Id') ?></th>
            <td><?= $this->Number->format($dtbCustomer->customer_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Country Id') ?></th>
            <td><?= $this->Number->format($dtbCustomer->country_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pref') ?></th>
            <td><?= $this->Number->format($dtbCustomer->pref) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sex') ?></th>
            <td><?= $this->Number->format($dtbCustomer->sex) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Job') ?></th>
            <td><?= $this->Number->format($dtbCustomer->job) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Reminder') ?></th>
            <td><?= $this->Number->format($dtbCustomer->reminder) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Buy Times') ?></th>
            <td><?= $this->Number->format($dtbCustomer->buy_times) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Buy Total') ?></th>
            <td><?= $this->Number->format($dtbCustomer->buy_total) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Point') ?></th>
            <td><?= $this->Number->format($dtbCustomer->point) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($dtbCustomer->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Del Flg') ?></th>
            <td><?= $this->Number->format($dtbCustomer->del_flg) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mailmaga Flg') ?></th>
            <td><?= $this->Number->format($dtbCustomer->mailmaga_flg) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Receive Work Info') ?></th>
            <td><?= $this->Number->format($dtbCustomer->receive_work_info) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Marital Status') ?></th>
            <td><?= $this->Number->format($dtbCustomer->marital_status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Current Address') ?></th>
            <td><?= $this->Number->format($dtbCustomer->current_address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Education') ?></th>
            <td><?= $this->Number->format($dtbCustomer->education) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Current Salary') ?></th>
            <td><?= $this->Number->format($dtbCustomer->current_salary) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Desired Salary') ?></th>
            <td><?= $this->Number->format($dtbCustomer->desired_salary) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Work Experience') ?></th>
            <td><?= $this->Number->format($dtbCustomer->work_experience) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Jp Level') ?></th>
            <td><?= $this->Number->format($dtbCustomer->jp_level) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Birth') ?></th>
            <td><?= h($dtbCustomer->birth) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('First Buy Date') ?></th>
            <td><?= h($dtbCustomer->first_buy_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Last Buy Date') ?></th>
            <td><?= h($dtbCustomer->last_buy_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Create Date') ?></th>
            <td><?= h($dtbCustomer->create_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Update Date') ?></th>
            <td><?= h($dtbCustomer->update_date) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Name01') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbCustomer->name01)); ?>
    </div>
    <div class="row">
        <h4><?= __('Name02') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbCustomer->name02)); ?>
    </div>
    <div class="row">
        <h4><?= __('Kana01') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbCustomer->kana01)); ?>
    </div>
    <div class="row">
        <h4><?= __('Kana02') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbCustomer->kana02)); ?>
    </div>
    <div class="row">
        <h4><?= __('Company Name') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbCustomer->company_name)); ?>
    </div>
    <div class="row">
        <h4><?= __('Zip01') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbCustomer->zip01)); ?>
    </div>
    <div class="row">
        <h4><?= __('Zip02') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbCustomer->zip02)); ?>
    </div>
    <div class="row">
        <h4><?= __('Zipcode') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbCustomer->zipcode)); ?>
    </div>
    <div class="row">
        <h4><?= __('Addr01') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbCustomer->addr01)); ?>
    </div>
    <div class="row">
        <h4><?= __('Addr02') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbCustomer->addr02)); ?>
    </div>
    <div class="row">
        <h4><?= __('Email') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbCustomer->email)); ?>
    </div>
    <div class="row">
        <h4><?= __('Email Mobile') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbCustomer->email_mobile)); ?>
    </div>
    <div class="row">
        <h4><?= __('Tel01') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbCustomer->tel01)); ?>
    </div>
    <div class="row">
        <h4><?= __('Tel02') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbCustomer->tel02)); ?>
    </div>
    <div class="row">
        <h4><?= __('Tel03') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbCustomer->tel03)); ?>
    </div>
    <div class="row">
        <h4><?= __('Fax01') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbCustomer->fax01)); ?>
    </div>
    <div class="row">
        <h4><?= __('Fax02') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbCustomer->fax02)); ?>
    </div>
    <div class="row">
        <h4><?= __('Fax03') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbCustomer->fax03)); ?>
    </div>
    <div class="row">
        <h4><?= __('Password') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbCustomer->password)); ?>
    </div>
    <div class="row">
        <h4><?= __('Reminder Answer') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbCustomer->reminder_answer)); ?>
    </div>
    <div class="row">
        <h4><?= __('Salt') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbCustomer->salt)); ?>
    </div>
    <div class="row">
        <h4><?= __('Secret Key') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbCustomer->secret_key)); ?>
    </div>
    <div class="row">
        <h4><?= __('Note') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbCustomer->note)); ?>
    </div>
    <div class="row">
        <h4><?= __('Mobile Phone Id') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbCustomer->mobile_phone_id)); ?>
    </div>
    <div class="row">
        <h4><?= __('Tel') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbCustomer->tel)); ?>
    </div>
    <div class="row">
        <h4><?= __('Image') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbCustomer->image)); ?>
    </div>
    <div class="row">
        <h4><?= __('Cv') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbCustomer->cv)); ?>
    </div>
    <div class="row">
        <h4><?= __('Cv Name') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbCustomer->cv_name)); ?>
    </div>
    <div class="row">
        <h4><?= __('Pref By Text') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbCustomer->pref_by_text)); ?>
    </div>
    <div class="row">
        <h4><?= __('School Name') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbCustomer->school_name)); ?>
    </div>
    <div class="row">
        <h4><?= __('Major') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbCustomer->major)); ?>
    </div>
    <div class="row">
        <h4><?= __('Desired Work') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbCustomer->desired_work)); ?>
    </div>
    <div class="row">
        <h4><?= __('Desired Position') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbCustomer->desired_position)); ?>
    </div>
    <div class="row">
        <h4><?= __('Desired Region') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbCustomer->desired_region)); ?>
    </div>
    <div class="row">
        <h4><?= __('Jp Other') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbCustomer->jp_other)); ?>
    </div>
    <div class="row">
        <h4><?= __('Toeic') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbCustomer->toeic)); ?>
    </div>
    <div class="row">
        <h4><?= __('Ielts') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbCustomer->ielts)); ?>
    </div>
    <div class="row">
        <h4><?= __('Eng Other') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbCustomer->eng_other)); ?>
    </div>
    <div class="row">
        <h4><?= __('Other Language') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbCustomer->other_language)); ?>
    </div>
    <div class="row">
        <h4><?= __('Qualification') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbCustomer->qualification)); ?>
    </div>
    <div class="row">
        <h4><?= __('Skill') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbCustomer->skill)); ?>
    </div>
    <div class="row">
        <h4><?= __('Self Pr') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbCustomer->self_pr)); ?>
    </div>
</div>
