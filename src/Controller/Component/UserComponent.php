<?php

namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\ORM\TableRegistry;
use Cake\Core\Configure;
use Cake\Datasource\ConnectionManager;
use Exception;
use Cake\Utility\Security;


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

    public function insertUserData($data)
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
        return $this->updateUserData($data);
    }

    public function updateUserData($data)
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
}
