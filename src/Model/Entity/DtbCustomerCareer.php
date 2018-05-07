<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DtbCustomerCareer Entity
 *
 * @property int $id
 * @property int $customer_id
 * @property \Cake\I18n\FrozenDate $start_date
 * @property \Cake\I18n\FrozenDate $end_date
 * @property float $working_year
 * @property string $working_company_name
 * @property string $position
 * @property string $job_description
 *
 * @property \App\Model\Entity\Customer $customer
 */
class DtbCustomerCareer extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'customer_id' => true,
        'start_date' => true,
        'end_date' => true,
        'working_year' => true,
        'working_company_name' => true,
        'position' => true,
        'job_description' => true,
        'customer' => true
    ];
}
