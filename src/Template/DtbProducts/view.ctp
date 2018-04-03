<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DtbProduct $dtbProduct
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Dtb Product'), ['action' => 'edit', $dtbProduct->product_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Dtb Product'), ['action' => 'delete', $dtbProduct->product_id], ['confirm' => __('Are you sure you want to delete # {0}?', $dtbProduct->product_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Dtb Products'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Dtb Product'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="dtbProducts view large-9 medium-8 columns content">
    <h3><?= h($dtbProduct->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Product Id') ?></th>
            <td><?= $this->Number->format($dtbProduct->product_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Maker Id') ?></th>
            <td><?= $this->Number->format($dtbProduct->maker_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($dtbProduct->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Del Flg') ?></th>
            <td><?= $this->Number->format($dtbProduct->del_flg) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Creator Id') ?></th>
            <td><?= $this->Number->format($dtbProduct->creator_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Deliv Date Id') ?></th>
            <td><?= $this->Number->format($dtbProduct->deliv_date_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dummy Flg') ?></th>
            <td><?= $this->Number->format($dtbProduct->dummy_flg) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Position') ?></th>
            <td><?= $this->Number->format($dtbProduct->position) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Offer Number') ?></th>
            <td><?= $this->Number->format($dtbProduct->offer_number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Client Id') ?></th>
            <td><?= $this->Number->format($dtbProduct->client_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Client Pref') ?></th>
            <td><?= $this->Number->format($dtbProduct->client_pref) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Target') ?></th>
            <td><?= $this->Number->format($dtbProduct->target) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Employment Status') ?></th>
            <td><?= $this->Number->format($dtbProduct->employment_status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Salary Type') ?></th>
            <td><?= $this->Number->format($dtbProduct->salary_type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Currency') ?></th>
            <td><?= $this->Number->format($dtbProduct->currency) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Salary Min') ?></th>
            <td><?= $this->Number->format($dtbProduct->salary_min) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Salary Max') ?></th>
            <td><?= $this->Number->format($dtbProduct->salary_max) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Region') ?></th>
            <td><?= $this->Number->format($dtbProduct->region) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('City') ?></th>
            <td><?= $this->Number->format($dtbProduct->city) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Concierge') ?></th>
            <td><?= $this->Number->format($dtbProduct->concierge) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Create Date') ?></th>
            <td><?= h($dtbProduct->create_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Update Date') ?></th>
            <td><?= h($dtbProduct->update_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('End Date') ?></th>
            <td><?= h($dtbProduct->end_date) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Name') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbProduct->name)); ?>
    </div>
    <div class="row">
        <h4><?= __('Name Vn') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbProduct->name_vn)); ?>
    </div>
    <div class="row">
        <h4><?= __('Comment1') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbProduct->comment1)); ?>
    </div>
    <div class="row">
        <h4><?= __('Comment2') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbProduct->comment2)); ?>
    </div>
    <div class="row">
        <h4><?= __('Comment3') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbProduct->comment3)); ?>
    </div>
    <div class="row">
        <h4><?= __('Comment4') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbProduct->comment4)); ?>
    </div>
    <div class="row">
        <h4><?= __('Comment5') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbProduct->comment5)); ?>
    </div>
    <div class="row">
        <h4><?= __('Comment6') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbProduct->comment6)); ?>
    </div>
    <div class="row">
        <h4><?= __('Note') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbProduct->note)); ?>
    </div>
    <div class="row">
        <h4><?= __('Main List Comment') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbProduct->main_list_comment)); ?>
    </div>
    <div class="row">
        <h4><?= __('Main List Comment Vn') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbProduct->main_list_comment_vn)); ?>
    </div>
    <div class="row">
        <h4><?= __('Main List Image') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbProduct->main_list_image)); ?>
    </div>
    <div class="row">
        <h4><?= __('Main Comment') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbProduct->main_comment)); ?>
    </div>
    <div class="row">
        <h4><?= __('Main Comment Vn') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbProduct->main_comment_vn)); ?>
    </div>
    <div class="row">
        <h4><?= __('Main Image') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbProduct->main_image)); ?>
    </div>
    <div class="row">
        <h4><?= __('Main Large Image') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbProduct->main_large_image)); ?>
    </div>
    <div class="row">
        <h4><?= __('Client Introduction') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbProduct->client_introduction)); ?>
    </div>
    <div class="row">
        <h4><?= __('Client Introduction Vn') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbProduct->client_introduction_vn)); ?>
    </div>
    <div class="row">
        <h4><?= __('Client Zip01') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbProduct->client_zip01)); ?>
    </div>
    <div class="row">
        <h4><?= __('Client Zip02') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbProduct->client_zip02)); ?>
    </div>
    <div class="row">
        <h4><?= __('Client Addr01') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbProduct->client_addr01)); ?>
    </div>
    <div class="row">
        <h4><?= __('Category Id') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbProduct->category_id)); ?>
    </div>
    <div class="row">
        <h4><?= __('Salary') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbProduct->salary)); ?>
    </div>
    <div class="row">
        <h4><?= __('Salary Vn') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbProduct->salary_vn)); ?>
    </div>
    <div class="row">
        <h4><?= __('Exchange Rate') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbProduct->exchange_rate)); ?>
    </div>
    <div class="row">
        <h4><?= __('Work Location') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbProduct->work_location)); ?>
    </div>
    <div class="row">
        <h4><?= __('Work Location Vn') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbProduct->work_location_vn)); ?>
    </div>
    <div class="row">
        <h4><?= __('Traffic Access') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbProduct->traffic_access)); ?>
    </div>
    <div class="row">
        <h4><?= __('Traffic Access Vn') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbProduct->traffic_access_vn)); ?>
    </div>
    <div class="row">
        <h4><?= __('Working Hour') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbProduct->working_hour)); ?>
    </div>
    <div class="row">
        <h4><?= __('Working Hour Vn') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbProduct->working_hour_vn)); ?>
    </div>
    <div class="row">
        <h4><?= __('Working Day') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbProduct->working_day)); ?>
    </div>
    <div class="row">
        <h4><?= __('Working Day Vn') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbProduct->working_day_vn)); ?>
    </div>
    <div class="row">
        <h4><?= __('Lunch Time') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbProduct->lunch_time)); ?>
    </div>
    <div class="row">
        <h4><?= __('Lunch Time Vn') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbProduct->lunch_time_vn)); ?>
    </div>
    <div class="row">
        <h4><?= __('Trial Period') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbProduct->trial_period)); ?>
    </div>
    <div class="row">
        <h4><?= __('Trial Period Vn') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbProduct->trial_period_vn)); ?>
    </div>
    <div class="row">
        <h4><?= __('Sex') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbProduct->sex)); ?>
    </div>
    <div class="row">
        <h4><?= __('Qualification') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbProduct->qualification)); ?>
    </div>
    <div class="row">
        <h4><?= __('Qualification Vn') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbProduct->qualification_vn)); ?>
    </div>
    <div class="row">
        <h4><?= __('Personality') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbProduct->personality)); ?>
    </div>
    <div class="row">
        <h4><?= __('Personality Vn') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbProduct->personality_vn)); ?>
    </div>
    <div class="row">
        <h4><?= __('Skill') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbProduct->skill)); ?>
    </div>
    <div class="row">
        <h4><?= __('Skill Vn') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbProduct->skill_vn)); ?>
    </div>
    <div class="row">
        <h4><?= __('Payrise') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbProduct->payrise)); ?>
    </div>
    <div class="row">
        <h4><?= __('Payrise Vn') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbProduct->payrise_vn)); ?>
    </div>
    <div class="row">
        <h4><?= __('Bonus') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbProduct->bonus)); ?>
    </div>
    <div class="row">
        <h4><?= __('Bonus Vn') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbProduct->bonus_vn)); ?>
    </div>
    <div class="row">
        <h4><?= __('Insurance') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbProduct->insurance)); ?>
    </div>
    <div class="row">
        <h4><?= __('Insurance Vn') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbProduct->insurance_vn)); ?>
    </div>
    <div class="row">
        <h4><?= __('Welfare') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbProduct->welfare)); ?>
    </div>
    <div class="row">
        <h4><?= __('Other Welfare') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbProduct->other_welfare)); ?>
    </div>
    <div class="row">
        <h4><?= __('Other Welfare Vn') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbProduct->other_welfare_vn)); ?>
    </div>
    <div class="row">
        <h4><?= __('Medical Checkup') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbProduct->medical_checkup)); ?>
    </div>
    <div class="row">
        <h4><?= __('Medical Checkup Vn') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbProduct->medical_checkup_vn)); ?>
    </div>
    <div class="row">
        <h4><?= __('Applicate Method') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbProduct->applicate_method)); ?>
    </div>
    <div class="row">
        <h4><?= __('Applicate Method Vn') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbProduct->applicate_method_vn)); ?>
    </div>
    <div class="row">
        <h4><?= __('Selection Process') ?></h4>
        <?= $this->Text->autoParagraph(h($dtbProduct->selection_process)); ?>
    </div>
</div>
