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
    public function UploadSingleFile($user_data, $file_input, $file_id)
    {

        if ($file_input['tmp_name'] == "") {
            return "";
        }

        // create upload target directory
        $targetPath = $this->getTargetPath($user_data['user_seq']);

        $userPath = $this->upload_dir . $this->base . $user_data['user_seq'];
        // -- mkdir and chmod, for target directory
        $this->Common->umaskMkdir($userPath, 0777);
        $this->Common->umaskMkdir($targetPath, 0777);

        // upload  - from phptemp to My Directory
        $tempFile = $file_input['tmp_name'];

        // make uploaded file name
        $savingFile = $targetPath . $file_id;

        // save as file_id
        $result = $this->moveUploadedFile($tempFile, $savingFile);
        if ($result) {
            chmod($savingFile, 0777);
        }
        if (!file_exists($savingFile)) {
            return '';
        }

        return $targetPath;
    }

    //アップロードファイルを削除
    public function DeleteUploadFile($user_seq, $name)
    {
        $directory = $this->upload_dir . $this->base . $user_seq . $this->target . $name;
        if (is_file($directory)) {
            $result = unlink($directory);
        }
        return $directory;
    }

    public function moveUploadedFile($filename, $destination)
    {
        //Copy file
        return copy($filename, $destination);
    }

}
