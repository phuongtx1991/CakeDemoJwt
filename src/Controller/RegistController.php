<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RegistController extends AppController
{

    public $components = ['User'];

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        if ($this->request->is('post')) {
            $customerTbl = TableRegistry::get('DtbCustomer');
            $data = $this->request->data;
            $checkEmailExist = $customerTbl->isMatchEmail($data['email']);
            if (!$checkEmailExist) {
                $result = $this->User->registUser($this->request->data);
                if ($result) {
                    $this->redirect('/searchjob');
                } else {
                    debug("false");
                    die;
                }
            } else {
                $this->set('error', 'Địa chỉ email đã tồn tại. Nếu bạn đã có tài khoản, xin hãy vào trang đăng nhập.');
                $this->set('data', $data);
            }
        }
    }
}
