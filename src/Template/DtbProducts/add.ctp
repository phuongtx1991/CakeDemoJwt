<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DtbProduct $dtbProduct
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Dtb Products'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="dtbProducts form large-9 medium-8 columns content">
    <?= $this->Form->create($dtbProduct) ?>
    <fieldset>
        <legend><?= __('Add Dtb Product') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('name_vn');
            echo $this->Form->control('maker_id');
            echo $this->Form->control('status');
            echo $this->Form->control('comment1');
            echo $this->Form->control('comment2');
            echo $this->Form->control('comment3');
            echo $this->Form->control('comment4');
            echo $this->Form->control('comment5');
            echo $this->Form->control('comment6');
            echo $this->Form->control('note');
            echo $this->Form->control('main_list_comment');
            echo $this->Form->control('main_list_comment_vn');
            echo $this->Form->control('main_list_image');
            echo $this->Form->control('main_comment');
            echo $this->Form->control('main_comment_vn');
            echo $this->Form->control('main_image');
            echo $this->Form->control('main_large_image');
            echo $this->Form->control('del_flg');
            echo $this->Form->control('creator_id');
            echo $this->Form->control('create_date');
            echo $this->Form->control('update_date');
            echo $this->Form->control('deliv_date_id');
            echo $this->Form->control('dummy_flg');
            echo $this->Form->control('position');
            echo $this->Form->control('end_date', ['empty' => true]);
            echo $this->Form->control('offer_number');
            echo $this->Form->control('client_id');
            echo $this->Form->control('client_introduction');
            echo $this->Form->control('client_introduction_vn');
            echo $this->Form->control('client_zip01');
            echo $this->Form->control('client_zip02');
            echo $this->Form->control('client_pref');
            echo $this->Form->control('client_addr01');
            echo $this->Form->control('target');
            echo $this->Form->control('category_id');
            echo $this->Form->control('employment_status');
            echo $this->Form->control('salary_type');
            echo $this->Form->control('currency');
            echo $this->Form->control('salary_min');
            echo $this->Form->control('salary_max');
            echo $this->Form->control('salary');
            echo $this->Form->control('salary_vn');
            echo $this->Form->control('exchange_rate');
            echo $this->Form->control('region');
            echo $this->Form->control('city');
            echo $this->Form->control('work_location');
            echo $this->Form->control('work_location_vn');
            echo $this->Form->control('traffic_access');
            echo $this->Form->control('traffic_access_vn');
            echo $this->Form->control('working_hour');
            echo $this->Form->control('working_hour_vn');
            echo $this->Form->control('working_day');
            echo $this->Form->control('working_day_vn');
            echo $this->Form->control('lunch_time');
            echo $this->Form->control('lunch_time_vn');
            echo $this->Form->control('trial_period');
            echo $this->Form->control('trial_period_vn');
            echo $this->Form->control('sex');
            echo $this->Form->control('qualification');
            echo $this->Form->control('qualification_vn');
            echo $this->Form->control('personality');
            echo $this->Form->control('personality_vn');
            echo $this->Form->control('skill');
            echo $this->Form->control('skill_vn');
            echo $this->Form->control('payrise');
            echo $this->Form->control('payrise_vn');
            echo $this->Form->control('bonus');
            echo $this->Form->control('bonus_vn');
            echo $this->Form->control('insurance');
            echo $this->Form->control('insurance_vn');
            echo $this->Form->control('welfare');
            echo $this->Form->control('other_welfare');
            echo $this->Form->control('other_welfare_vn');
            echo $this->Form->control('medical_checkup');
            echo $this->Form->control('medical_checkup_vn');
            echo $this->Form->control('applicate_method');
            echo $this->Form->control('applicate_method_vn');
            echo $this->Form->control('selection_process');
            echo $this->Form->control('concierge');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
