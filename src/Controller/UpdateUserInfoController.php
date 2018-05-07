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
class UpdateUserInfoController extends AppController
{

    public $components = ['User'];

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->getDataForView();
        if($this->request->is('post'))
        {
            $this->User->updateUserData($this->request->data);
            $this->redirect('/Mypage');
        }
    }

    private function getDataForView ()
    {
        $textLang = $this->request->session()->read('lang') == 'vn' ? '_vn' : '';
        $prefTbl = TableRegistry::get('MtbPref');
        $cateTbl = TableRegistry::get('MtbCategory');
        $regionTbl = TableRegistry::get('MtbRegion');
        $CustomerTbl = TableRegistry::get('DtbCustomer');
        $CustomerExpTbl = TableRegistry::get('DtbCustomerCareer');

        //tinh thanh pho
        $pref = $this->bindingDataFromTbl($prefTbl->getListPref(),$textLang);
        $this->set('pref',$pref);
        // category
        $cart = $this->bindingDataFromTbl($cateTbl->getAllCartegoryJob(),$textLang);
        $this->set('cart',$cart);
        //region
        $region = $this->bindingDataFromTbl($regionTbl->getAllRegion(),$textLang);
        $this->set('region',$region);

        $this->set('customInfo',$CustomerTbl->getCustumerInfoById(1002));
        $this->set('customExp',$CustomerExpTbl->getCustumerExpById(1002));
    }

    private function bindingDataFromTbl($tblArray,$textLang)
    {
            $result = array();
            foreach ($tblArray as $key=>$item)
            {
                $result[$item['id']] = $item['name'.$textLang];
            }
            return $result;
    }

}
