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
    public function getDataJobDetail($id)
    {
        $jobTbl = TableRegistry::get('DtbProducts');
        $regionTbl = TableRegistry::get('MtbRegion');
        $positionTbl = TableRegistry::get('MtbPosition');
        $cityTbl = TableRegistry::get('MtbCity');
        $empStatusTbl = TableRegistry::get('MtbEmploymentStatus');
        $welfareTbl = TableRegistry::get('MtbWelfare');
        $processTbl = TableRegistry::get('MtbProcess');

        $sex = [
            '0' => 'Không yêu cầu',
            '1' => 'Nữ',
            '2' => 'Nam',
        ];

        $infoRecArray = $jobTbl->getJobInfoById($id);
        //job description
        $infoRecArray['client_introduction_vn'] = ($infoRecArray['employment_status'] == 1) ? $infoRecArray['client_introduction_vn'] : '';
        //loai cong viecemployment_status
        $infoRecArray['employment_status'] = $empStatusTbl->getEmployStatusById($infoRecArray['employment_status'])['name_vn'];
        //regiton
        $infoRecArray['region'] = $regionTbl->getRegionById($infoRecArray['region'])['name_vn'];
        //city
        $infoRecArray['city'] = $cityTbl->getCityById($infoRecArray['city'])['name_vn'];
        //position
        $infoRecArray['position'] = $positionTbl->getPositionById($infoRecArray['position'])['name_vn'];
        //work time
        $infoRecArray['work_time'] = nl2br($infoRecArray['working_hour_vn']) . '<br>' . 'Giờ nghỉ trưa: ' . $infoRecArray['lunch_time_vn'];
        //salary rank
        $infoRecArray['salary_rank'] = '[Lương tháng]' . ' ' . $infoRecArray['salary_min'] . 'JPY〜' . $infoRecArray['salary_max'] . 'JPY';
        //sex
        $infoRecArray['sex'] = $sex[$infoRecArray['sex']];
        //work place
        $infoRecArray['place'] = $infoRecArray['region'] . " " . $infoRecArray['city'] . "<br>" . $infoRecArray['work_location_vn'];
        //welfare
        $welfareArray = (explode(" ", $infoRecArray['welfare']));
        $welfareStr = '';
        foreach ($welfareArray as $item)
        {
            $welfareStr .= '■ '.$welfareTbl->getWelfareById($item)['name_vn'].'<br>';
        }
        $infoRecArray['welfare'] = $welfareStr;

        //process
        $processArray = (explode(" ", $infoRecArray['selection_process']));
        $processStr = '';
        foreach ($processArray as $item)
        {
            $processStr .= '■ '.$processTbl->getProcessById($item)['name_vn'].'<br>';
        }
        $infoRecArray['selection_process'] = $processStr;

        return $infoRecArray;
    }
}
