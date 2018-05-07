<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DtbCustomerCareer $dtbCustomerCareer
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Dtb Customer Career'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="dtbCustomerCareer form large-9 medium-8 columns content">
    <?= $this->Form->create($dtbCustomerCareer) ?>
    <fieldset>
        <legend><?= __('Add Dtb Customer Career') ?></legend>
        <?php
            echo $this->Form->control('customer_id');
            echo $this->Form->control('start_date', ['empty' => true]);
            echo $this->Form->control('end_date', ['empty' => true]);
            echo $this->Form->control('working_year');
            echo $this->Form->control('working_company_name');
            echo $this->Form->control('position');
            echo $this->Form->control('job_description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
