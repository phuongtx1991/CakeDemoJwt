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
class SearchJobController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
//        debug($this->request->data);
//        die;
//        $rq = new Request();
//        var_dump($rq->url("http://local.testcake.cakedemojwt.jp:8090/api/Cocktails.json"));die;
        $jobTbl = TableRegistry::get('DtbProducts');
        $jobCartTbl = TableRegistry::get('MtbCategory');
        $RegionTbl = TableRegistry::get('MtbRegion');

        $jobFastShow = $jobTbl->getFiveJobFastRecruit();
        $this->set('jobFast', $jobFastShow);

        $jobAbsShow = $jobTbl->getFiveJobAbsorbation();
        $this->set('jobAbs', $jobAbsShow);

        $jobCart = $jobCartTbl->getAllCartegoryJob();
        $jobCartArray = array();
        foreach ($jobCart as $jobItem) {
            $jobCartArray += array($jobItem['id'] => $jobItem['name_vn']);
        }
        $this->set('jobCartArray', $jobCartArray);

        $Region = $RegionTbl->getAllRegion();
        $RegionArray = array();
        foreach ($Region as $RjItem) {
            $RegionArray += array($RjItem['id'] => $RjItem['name_vn']);
        }
        $this->set('RegionArray', $RegionArray);

        if (isset($this->request->query['search'])) {
            $jobSearchResult = $jobTbl->getSearchResult($this->request->query);
            $this->set('jobSearchResult', $jobSearchResult);
            $this->set('search', 1);
            $this->set('searchKeyword',$this->request->query('searchKeyword'));
        }

    }
}
