<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller\Api;

use Cake\Controller\Controller;
use Cake\Event\Event;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppControllerApi extends Controller
{

//    use \Crud\Controller\ControllerTrait;
//    public function initialize()
//    {
//        parent::initialize();
//        $this->loadComponent('RequestHandler');
//        $this->loadComponent('Crud.Crud', [
//            'actions' => [
//                'Crud.Index',
//                'Crud.View',
//                'Crud.Add',
//                'Crud.Edit',
//                'Crud.Delete'
//            ],
//            'listeners' => [
//                'Crud.Api',
//                'Crud.ApiPagination',
//                'Crud.ApiQueryLog'
//            ]
//        ]);
//        $this->loadComponent('Auth', [
//            'storage' => 'Memory',
//            'authenticate' => [
//                'Form' => [
//                    'scope' => ['Users.active' => 1]
//                ],
//                'ADmad/JwtAuth.Jwt' => [
//                    'parameter' => 'token',
//                    'userModel' => 'Users',
//                    'scope' => ['Users.active' => 1],
//                    'fields' => [
//                        'username' => 'id'
//                    ],
//                    'queryDatasource' => true
//                ]
//            ],
//            'unauthorizedRedirect' => false,
//            'checkAuthIn' => 'Controller.initialize'
//        ]);
//    }

    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');

        /*
         * Enable the following components for recommended CakePHP security settings.
         * see https://book.cakephp.org/3.0/en/controllers/components/security.html
         */
        //$this->loadComponent('Security');
        //$this->loadComponent('Csrf');
    }
}
