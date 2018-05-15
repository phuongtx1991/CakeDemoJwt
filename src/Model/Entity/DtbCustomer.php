<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DtbCustomer Entity
 *
 * @property int $customer_id
 * @property string $name01
 * @property string $name02
 * @property string $kana01
 * @property string $kana02
 * @property string $zip01
 * @property string $zip02
 * @property int $country_id
 * @property int $pref
 * @property string $addr01
 * @property string $addr02
 * @property string $email
 * @property int $phone
 * @property int $sex
 * @property \Cake\I18n\FrozenDate $birth_day
 * @property string $password
 * @property int $reminder
 * @property string $reminder_answer
 * @property string $salt
 * @property string $secret_key
 * @property int $status
 * @property \Cake\I18n\FrozenTime $create_date
 * @property \Cake\I18n\FrozenTime $update_date
 * @property int $del_flg
 * @property int $receive_work_info
 * @property string $image
 * @property string $cv
 * @property string $cv_name
 * @property \Cake\I18n\FrozenDate $cv_update
 * @property int $marital_status
 * @property int $current_address
 * @property string $pref_by_text
 * @property int $education
 * @property string $school_name
 * @property string $major
 * @property string $desired_work
 * @property string $desired_position
 * @property float $current_salary
 * @property float $desired_salary
 * @property string $desired_region
 * @property int $work_experience
 * @property int $jp_level
 * @property string $jp_other
 * @property string $toeic
 * @property string $ielts
 * @property string $eng_other
 * @property string $other_language
 * @property string $qualification
 * @property string $skill
 * @property string $self_pr
 *
 * @property \App\Model\Entity\Country $country
 */
class DtbCustomer extends Entity
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
        'name01' => true,
        'name02' => true,
        'kana01' => true,
        'kana02' => true,
        'zip01' => true,
        'zip02' => true,
        'country_id' => true,
        'pref' => true,
        'addr01' => true,
        'addr02' => true,
        'email' => true,
        'phone' => true,
        'sex' => true,
        'birth_day' => true,
        'password' => true,
        'reminder' => true,
        'reminder_answer' => true,
        'salt' => true,
        'secret_key' => true,
        'status' => true,
        'create_date' => true,
        'update_date' => true,
        'del_flg' => true,
        'receive_work_info' => true,
        'image' => true,
        'cv' => true,
        'cv_name' => true,
        'cv_update' => true,
        'marital_status' => true,
        'current_address' => true,
        'pref_by_text' => true,
        'education' => true,
        'school_name' => true,
        'major' => true,
        'desired_work' => true,
        'desired_position' => true,
        'current_salary' => true,
        'desired_salary' => true,
        'desired_region' => true,
        'work_experience' => true,
        'jp_level' => true,
        'jp_other' => true,
        'toeic' => true,
        'ielts' => true,
        'eng_other' => true,
        'other_language' => true,
        'qualification' => true,
        'skill' => true,
        'self_pr' => true,
        'country' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];
}
