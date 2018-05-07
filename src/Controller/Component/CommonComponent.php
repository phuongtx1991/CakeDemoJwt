<?php

namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\ORM\TableRegistry;
use Cake\Core\Configure;
use Cake\Datasource\ConnectionManager;
use App\Validation\NoptBaseValidator;
use Exception;
use Cake\Utility\Security;

/**
 * Common component
 */
class CommonComponent extends Component
{
    public function textForView($screenName)
    {
        $langForShow = $this->request->session()->read('lang');

        $textArray =  Configure::read($screenName);
        foreach ($textArray as $key=>$item)
        {
            $textArray[$key] = $textArray[$key][$langForShow];

        }
        return $textArray;
    }
}
