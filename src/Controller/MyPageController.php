<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Core\Configure;
use Cake\Event\Event;


/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MyPageController extends AppController
{
    public $components = ['User', 'Common'];


    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $CustomerTbl = TableRegistry::get('DtbCustomer');

        $this->set('customInfo',$CustomerTbl->getCustumerInfoById(1002));
    }

}
