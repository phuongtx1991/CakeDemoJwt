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
class JobInfoComponent extends Component
{
    public function getDataJobDetail($id, $textLang, $lang)
    {
        $jobTbl = TableRegistry::get('DtbProducts');
        $regionTbl = TableRegistry::get('MtbRegion');
        $positionTbl = TableRegistry::get('MtbPosition');
        $cityTbl = TableRegistry::get('MtbCity');
        $empStatusTbl = TableRegistry::get('MtbEmploymentStatus');
        $welfareTbl = TableRegistry::get('MtbWelfare');
        $processTbl = TableRegistry::get('MtbProcess');

        $sex = Configure::read('jobdetail.sex_show.' . $lang);
        $infoRecArray = $jobTbl->getJobInfoById($id);
        //job description
        $infoRecArray['client_introduction'] = ($infoRecArray['employment_status'] == 1) ? $infoRecArray['client_introduction' . $textLang] : '';
        //loai cong viec
        $infoRecArray['employment_status'] = $empStatusTbl->getEmployStatusById($infoRecArray['employment_status'])['name' . $textLang];

        //regiton
        $infoRecArray['region'] = $regionTbl->getRegionById($infoRecArray['region'])['name' . $textLang];
        //city
        $infoRecArray['city'] = $cityTbl->getCityById($infoRecArray['city'])['name' . $textLang];
        //position
        $infoRecArray['position'] = $positionTbl->getPositionById($infoRecArray['position'])['name' . $textLang];
        //work time
        $infoRecArray['work_time'] = nl2br($infoRecArray['working_hour' . $textLang]) . '<br>' . Configure::read('jobdetail.content_lunch_time.' . $lang) . $infoRecArray['lunch_time' . $textLang];
        //salary rank
        $infoRecArray['salary_rank'] = '[Lương tháng]' . ' ' . $infoRecArray['salary_min'] . 'JPY〜' . $infoRecArray['salary_max'] . 'JPY';
        //sex

        $infoRecArray['sex'] = !empty($infoRecArray['sex']) ? $sex[$infoRecArray['sex']] : '';
        //work place
        $infoRecArray['place'] = $infoRecArray['region'] . " " . $infoRecArray['city'] . "<br>" . $infoRecArray['work_location' . $textLang];
        //welfare
        $welfareArray = (explode(" ", $infoRecArray['welfare']));
        $welfareStr = '';
        foreach ($welfareArray as $item) {
            $welfareStr .= '■ ' . $welfareTbl->getWelfareById($item)['name' . $textLang] . '<br>';
        }
        $infoRecArray['welfare'] = $welfareStr;

        //process
        $processArray = (explode(" ", $infoRecArray['selection_process']));
        $processStr = '';
        foreach ($processArray as $item) {
            $processStr .= '■ ' . $processTbl->getProcessById($item)['name' . $textLang] . '<br>';
        }
        $infoRecArray['selection_process'] = $processStr;
//        debug($infoRecArray);die;
        return $infoRecArray;
    }
}
