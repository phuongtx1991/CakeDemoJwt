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
    public $components = ['User', 'Common', 'FileCV'];

    /**
     * Before filter callback.
     *
     * @param \Cake\Event\Event $event The beforeRender event.
     * @return void
     */
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        //Check if not logged in
        if(!$this->request->session()->check('userData'))
        {
            $this->redirect('/Login');
        }
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        if ($this->request->is('post')) {
            $fileCV = $this->request->data['file_cv'];
            //check if file extention is wrong
            if (!preg_match("/\.(doc|docx|xls|xlsx|pdf)$/", $fileCV['name'])) {
                $this->set('error',Configure::read('mypage.error_ext.'.$this->lang));
            //check if file size too larg
            }else if($fileCV['size'] > Configure::read('Common.max_size_upload')){
                $this->set('error',Configure::read('mypage.error_max_size.'.$this->lang));
            }else{
                //doing upload cv
                $result = $this->FileCV->UploadSingleFile($fileCV,$this->customerId);
                //upload error
                if(!$result)
                {
                    $this->set('error',Configure::read('mypage.error_upload_fail.'.$this->lang));
                }else{

                }
            }

        }
        //set data for view
        $CustomerTbl = TableRegistry::get('DtbCustomer');
        $this->set('customInfo', $CustomerTbl->getCustomerInfoById($this->customerId));

        //Last Position
        $CustomerExpTbl = TableRegistry::get('DtbCustomerCareer');
        $this->set('lastPosition',$CustomerExpTbl->getLastPosition($this->customerId)['position']);
    }

}
