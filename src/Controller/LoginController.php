<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use App\Validation\NoptBaseValidator;


/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LoginController extends AppController
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
            $checkLogin = $this->User->checkLogin($this->request->data);
            if (!$checkLogin) {
                $this->set('error', 'メールアドレスもしくはパスワードが正しくありません。');
            } else {
                $this->request->session()->write('userData', $checkLogin);
                $this->redirect('/searchjob');
            }
        }
    }

//    /**
//     * Validate input
//     * @param Validator $validator
//     * @return Validator
//     */
//    private function validationDefaultLogin(NoptBaseValidator $validator, $data)
//    {
//        $validator->allowEmpty('nickname');
//        $validator->add(
//            'email', 'noValue', ['rule' => function ($nickname) {
//                return $this->User->checkLogin();
//            },
//                'message' => 'メールアドレスもしくはパスワードが正しくありません。',
//            ]
//        );
//
//        return $validator;
//    }
}
