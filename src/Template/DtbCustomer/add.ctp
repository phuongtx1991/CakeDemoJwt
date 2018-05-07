<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DtbCustomer $dtbCustomer
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Dtb Customer'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="dtbCustomer form large-9 medium-8 columns content">
    <?= $this->Form->create($dtbCustomer) ?>
    <fieldset>
        <legend><?= __('Add Dtb Customer') ?></legend>
        <?php
            echo $this->Form->control('name01');
            echo $this->Form->control('name02');
            echo $this->Form->control('kana01');
            echo $this->Form->control('kana02');
            echo $this->Form->control('zip01');
            echo $this->Form->control('zip02');
            echo $this->Form->control('country_id');
            echo $this->Form->control('pref');
            echo $this->Form->control('addr01');
            echo $this->Form->control('addr02');
            echo $this->Form->control('email');
            echo $this->Form->control('phone');
            echo $this->Form->control('sex');
            echo $this->Form->control('birth_day', ['empty' => true]);
            echo $this->Form->control('password');
            echo $this->Form->control('reminder');
            echo $this->Form->control('reminder_answer');
            echo $this->Form->control('salt');
            echo $this->Form->control('secret_key');
            echo $this->Form->control('status');
            echo $this->Form->control('create_date');
            echo $this->Form->control('update_date');
            echo $this->Form->control('del_flg');
            echo $this->Form->control('receive_work_info');
            echo $this->Form->control('image');
            echo $this->Form->control('cv');
            echo $this->Form->control('cv_name');
            echo $this->Form->control('marital_status');
            echo $this->Form->control('current_address');
            echo $this->Form->control('pref_by_text');
            echo $this->Form->control('education');
            echo $this->Form->control('school_name');
            echo $this->Form->control('major');
            echo $this->Form->control('desired_work');
            echo $this->Form->control('desired_position');
            echo $this->Form->control('current_salary');
            echo $this->Form->control('desired_salary');
            echo $this->Form->control('desired_region');
            echo $this->Form->control('work_experience');
            echo $this->Form->control('jp_level');
            echo $this->Form->control('jp_other');
            echo $this->Form->control('toeic');
            echo $this->Form->control('ielts');
            echo $this->Form->control('eng_other');
            echo $this->Form->control('other_language');
            echo $this->Form->control('qualification');
            echo $this->Form->control('skill');
            echo $this->Form->control('self_pr');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
