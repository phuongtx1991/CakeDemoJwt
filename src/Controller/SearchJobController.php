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
class SearchJobController extends AppController
{
    public $components = ['User', 'Common', 'PageControl'];


    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $jobTbl = TableRegistry::get('DtbProducts');

        $jobCartTbl = TableRegistry::get('MtbCategory');
        $RegionTbl = TableRegistry::get('MtbRegion');
        $langguage = $this->request->session()->read('lang') == 'vn' ? '_vn' : '';
        $this->set('textLang', $langguage);

        //search condition area

        $jobFastShow = $this->getListFiveJobFollowStatus(Configure::read('Common.job_status.fast_job'));
        $this->set('jobFast', $jobFastShow);

        $jobAbsShow = $this->getListFiveJobFollowStatus(Configure::read('Common.job_status.fast_job'));
        $this->set('jobAbs', $jobAbsShow);

        $jobCart = $jobCartTbl->getAllCartegoryJobForMobile();
        $jobCartArray = array();
        foreach ($jobCart as $jobItem) {
            $jobCartArray += array($jobItem['id'] => $jobItem['name' . $langguage]);
        }
        $this->set('jobCartArray', $jobCartArray);


        $Region = $RegionTbl->getAllRegion();
        $RegionArray = array();
        foreach ($Region as $RjItem) {
            $RegionArray += array($RjItem['id'] => $RjItem['name' . $langguage]);
        }
        $this->set('RegionArray', $RegionArray);
        //end search condition area

        //search event
        if (isset($this->request->query['search'])) {
            $jobSearchResult = $jobTbl->getSearchResult($this->request->query);
            foreach ($jobSearchResult as $key => $item) {
                $jobSearchResult[$key]['region'] = $RegionTbl->getRegionById($item['region']);
            }
            $this->set('jobSearchResult', $jobSearchResult);
            $this->set('search', 1);
            $this->set('searchKeyword', $this->request->query('searchKeyword'));
        }
    }

    private function getListFiveJobFollowStatus($status)
    {
        $jobStatusTbl = TableRegistry::get('DtbProductStatus');
        $jobTbl = TableRegistry::get('DtbProducts');
        $RegionTbl = TableRegistry::get('MtbRegion');

        $listJobId = $jobStatusTbl->getFileJobIdWithStatus($status);

        $listJob = $jobTbl->getFiveJobFollowStatus($listJobId);
        foreach ($listJob as $key => $item) {
            $listJob[$key]['region'] = $RegionTbl->getRegionById($item['region']);
        }

        return $listJob;
    }
}
