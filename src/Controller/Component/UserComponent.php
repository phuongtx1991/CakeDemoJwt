<?php

namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\ORM\TableRegistry;
use Cake\Core\Configure;
use Cake\Datasource\ConnectionManager;
use Exception;
use Cake\Utility\Security;
use Cake\I18n\Time;


/**
 * Common component
 */
class UserComponent extends Component
{
    public $components = ['Utils'];

    public function checkLogin($data)
    {
        $customerTbl = TableRegistry::get('DtbCustomer');
        //check email is match
        if ($customerTbl->isMatchEmail($data['email'])) {
            $passInfo = $customerTbl->getPasswordInfo($data['email']);
            if ($this->Utils->isMatchHashPassword($data['password'], $passInfo['password'], $passInfo['salt'])) {
                return $customerTbl->getBasicInfoCustumer($passInfo['customer_id']);
            }
        }
        return false;
    }

    public function registUser($data)
    {
        $customerTbl = TableRegistry::get('DtbCustomer');

        //get sceret_key
        $data['secret_key'] = $this->Utils->getUniqRandomId('r');
        //get user id
        $maxId = $customerTbl->getMaxId()['customer_id'];
        if (!empty($maxId)) {
            $data['customer_id'] = $maxId + 1;
        } else {
            $data['customer_id'] = 1000;
        }
        // get salt
        $salt = $this->Utils->getRandomString(10);
        $data['salt'] = $salt;
        //encode password
        $data['password'] = $this->Utils->getHashString($data['password'], $salt);
        unset($data['pass_confirm']);
        return $this->insertUserData($data);
    }

    private function insertUserData($data)
    {
        $result = false;
        try {
            $customerTbl = TableRegistry::get('DtbCustomer');
            $userData = $customerTbl->newEntity();
            foreach ($data as $key => $item) {
                $userData->{$key} = $item;
            }
            //transaction
            $customerTbl->connection()->transactional(function () use ($customerTbl, $userData) {
                $customerTbl->save($userData, ['atomic' => false]);
            });
            $result = true;
        } catch (Exception $e) {
            $result = false;
        }
        return $result;
    }

    public function updateUserData($data)
    {
        $customerTbl = TableRegistry::get('DtbCustomer');
        $userData = $customerTbl->newEntity();
        $entity = $customerTbl->get($data['customer_id']);

        $data['birth_day'] = $data['birth_day']['year'] . '-' . $data['birth_day']['month'] . '-' . $data['birth_day']['day'];
        $data['desired_work'] = !empty($data['desired_work']) ? implode(" ", $data['desired_work']) : '';
        $data['desired_position'] = !empty($data['desired_position']) ? implode(" ", $data['desired_position']) : '';
        $data['desired_region'] = !empty($data['desired_region']) ? implode(" ", $data['desired_region']) : '';
//        $data['update_date'] =  date();

        // convert arraay experion for update
        $expInport = array();
        foreach ($data as $key => $item) {
            $findme = 'project_';
            $pos = strpos($key, $findme);
            if ($pos !== false) {
                $expInport[$key] = $item;
                unset($data[$key]);
            } else {
                $userData->{$key} = $item;
            }
        }

        try {
            //transaction
            $customerTbl->connection()->transactional(function () use ($customerTbl, $userData) {
                $customerTbl->save($userData, ['atomic' => false]);
            });
            $this->updateExpData($expInport);
        } catch (Exception $e) {
            $result = false;
        }
        return true;

    }

    private function updateExpData($data)
    {

        $result = true;
        foreach ($data as $item) {
            $item['start_date'] = $this->formatDateForSaveToDB($item['start_date']);
            $item['end_date'] = $this->formatDateForSaveToDB($item['end_date']);
            $item['id'] = !empty($item['exp_id']) ? $item['exp_id'] : $this->getIdForSaveToDB();
            unset($item['exp_id']);
            try {
                $customerExpTbl = TableRegistry::get('DtbCustomerCareer');
                $entity = $customerExpTbl->get($item['id']);
                foreach ($item as $key => $temp)
                {
                    $entity[$key] = $item[$key];
                }
//                debug($entity);die;
                //transaction
                $customerExpTbl->connection()->transactional(function () use ($customerExpTbl, $entity) {
                    $customerExpTbl->save($entity, ['atomic' => false]);
                });
            } catch (Exception $e) {
                $result = false;
            }
        }

        return $result;
    }

    private function formatDateForSaveToDB($date)
    {
        $date = new Time('01-' . $date);
        $date->i18nFormat('yyyy-MM-dd');
        return $date;
    }

    private function getIdForSaveToDB()
    {
        $customerExpTbl = TableRegistry::get('DtbCustomerCareer');
        return $customerExpTbl->getMaxId() + 1;
    }

}
