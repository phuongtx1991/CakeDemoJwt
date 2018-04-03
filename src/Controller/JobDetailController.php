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
class JobDetailController extends AppController
{

    public $components = ['JobInfo'];

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $jobId = $this->request->query('job_id');
        $this->set('JobInfo',$this->JobInfo->getDataJobDetail($jobId));
    }
}
