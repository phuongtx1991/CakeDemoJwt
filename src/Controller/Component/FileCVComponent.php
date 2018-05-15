<?php

namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\ORM\TableRegistry;
use Cake\Core\Configure;
use Cake\Datasource\ConnectionManager;
use Exception;
use Cake\Utility\Security;


/**
 * Common component
 */
class FileCVComponent extends Component
{

    /**
     * 単体ファイルのテンポラリアップロード：Android用共通処理
     * ＜アルバム/動画/ファイル＞
     * リクエストに指定された単体ファイルを、テンポラリ状態としてサーバに保存します。
     * 　※ UploadFile と同等の処理を行なっているが、Android専用として定義。
     *
     * @author Androidブラウザ対応
     *
     * @access public
     * @param string $user_data ユーザー情報オブジェクト
     * @param string $file_input リクエスト$_FILES から受け取った 単体ファイル情報オブジェクト
     * @param string $file_id ストレージ内の実体ファイル名にするファイルID
     *
     * @return string アップロードしたディレクトリパス
     *
     */
    public function UploadSingleFile($file_input,$customerId)
    {
        $customerTbl = TableRegistry::get('DtbCustomer');
        if ($file_input['tmp_name'] == "") {
            return false;
        }

        //Create a unique file name.
        $uniqname = date('mdHi') . '_' . uniqid('').'.';
        $saveFileName = preg_replace("/^.*\./", $uniqname, $file_input['name']);

        // upload  - from phptemp to My Directory
        $tempFile = $file_input['tmp_name'];

        // save as file_id
        $result = $this->moveUploadedFile($tempFile, UploadCV . $saveFileName);
        if ($result) {
            //get old cv file upload
            $oldCv = $customerTbl->getCustomerCVById($customerId);

            //insert cv file info to db
            $insertResult = $this->InsertFileInfo($saveFileName,$file_input['name'],$customerId);
            //delete old cv file
            if($insertResult)
            {
                //delete cv file uploaded (add show log delete result on future)
                $this->DeleteUploadFile($oldCv['cv'],UploadCV);
            }
            return $insertResult;
        }else{
            return false;
        }
    }

    public function InsertFileInfo($saveFileName,$fileName,$customerId)
    {
        $customerTbl = TableRegistry::get('DtbCustomer');
        $entity = $customerTbl->get($customerId);
        $entity->cv = $saveFileName;
        $entity->cv_name = $fileName;
        $entity->cv_update = date("Y-m-d");


        try {
            //transaction
            $customerTbl->connection()->transactional(function () use ($customerTbl, $entity) {
                $customerTbl->save($entity, ['atomic' => false]);
            });
            return true;
        } catch (Exception $e) {
            return false;
        }

    }
    //アップロードファイルを削除
    public function DeleteUploadFile($name,$path)
    {
        $result = false;
        if (is_file($path.$name)) {
            $result = unlink($path.$name);
        }
        return $result;
    }

    public function moveUploadedFile($filename, $destination)
    {
        //Copy file
        return copy($filename, $destination);
    }

}
