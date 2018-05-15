<link rel="stylesheet"  href="css/screen/mypage.css"/>

<div class="container " style="margin-top: 100px;">
    <div class="row m-b-15">
        <div class="col-12 m-r-5 m-l-5">
            <div class="card-fix card-inverse-fix background">
                <div class="card-block-fix">
                    <div class="row">
                        <div class="col-md-4 col-sm-4 text-center ">
                            <div class="col-md-12 col-sm-12 m-b-15">
                                <img src="img/avatar/avatar_1000.jpg" alt="" class="bo-cir height-120">
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <a href="/updateuserinfo" class="btn btn-danger"><?= $mypage['label_update_cv'] ?></a>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-8">
                            <h2 class="card-title-fix text-center m-t-15"><?= $customInfo['name02'] ?> <?= $customInfo['name01'] ?></h2>
                            <p class="card-text-fix"><strong><?= $mypage['label_profile'] ?></strong> <?= $lastPosition ?> </p>
                            <p class="card-text-fix"><strong><?= $mypage['label_skills'] ?></strong> <?= $customInfo['skill'] ?></p>
                            <p style="display: none;"><strong><?= $mypage['label_platform'] ?></strong>
                                <span class="badge-fix btn-primary">WordPress</span>
                                <span class="badge-fix btn-info">Weebly</span>
                                <span class="badge-fix btn-warning">Bootstrap</span>
                                <span class="badge-fix btn-success">Wix</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row m-b-15">
        <div class="upload-form m-l-5 m-r-5">
            <!-- Form Heading -->
            <h1 class="replace-text m-t-0"><?= $mypage['label_cv_attact'] ?></h1>

            <div class="form-text-cv">
                <p><?= $mypage['label_cv_name'] ?></p>
                <p> <i class="fa fa fa-newspaper-o m-l-5 text-red"></i> <?= !empty($customInfo['cv_name']) ? $customInfo['cv_name'] : $mypage['label_non_upload_cv'] ?></p>
                <p><?= $mypage['label_update_time'] ?> <?= !empty($customInfo['cv_update']) ? $customInfo['cv_update']->i18nFormat('YYYY/MM/dd') : '' ?></p>
            </div>

            <h1 class="replace-text m-t-20"><?= $mypage['label_upload_new_cv'] ?></h1>

            <div class="m-b-10">
                    <span class="fileUpload btn btn-md btn-success width-100">
                        <span class="upl" id="upload"><?= $mypage['label_select_file'] ?></span>
                        <form name="form1" id='form1' method="post" enctype="multipart/form-data" action="/Mypage">
                            <input type="file" class="upload up" name="file_cv"/>
                        </form>
                    </span>
                    <input type="button" name="upload" onclick="submitForm()" class="fileUpload btn btn-md btn-primary width-100" value="<?= $mypage['label_upload'] ?>">
            </div>

            <?php if(isset($error)) : ?>
            <div class="bgwhite m-b-10 border-error">
                <i class="fa fa-exclamation-circle m-l-5 text-red"></i>
                <span class="text-red" ><?= $error ?></span>
            </div>
            <?php endif; ?>

            <!-- File List -->
            <div class="file_list">
                <div class="addedFile" style="display: none;">
                    <span></span>
                </div>
            </div>
        </div>
    </div>
    <div class="row p-l-20 p-r-20 myjob" style="display: none" >
        <div class="col-xs-12">
            <div class="col-xs-2">
                <span class="green-color">03</span>
            </div>
            <div class="col-xs-10">
                <a href="#">
                    <h4>
                        <strong><?= $mypage['label_view_profile'] ?></strong>
                    </h4>
                </a>
            </div>
        </div>
        <div class="col-xs-12">
            <div class="col-xs-2">
                <span class="orange-color">04</span>
            </div>
            <div class="col-xs-10">
                <a href="#">
                    <h4>
                        <strong> <?= $mypage['label_job_save'] ?></strong>
                    </h4>
                </a>
            </div>
        </div>
        <div class="col-xs-12">
            <div class="col-xs-2">
                <span class="rose-color">05</span>
            </div>
            <div class="col-xs-10">
                <a href="#">
                    <h4>
                        <strong> <?= $mypage['label_job_apply'] ?></strong>
                    </h4>
                </a>
            </div>
        </div>
    </div>
</div>

<script src="js/screen/upload-cv.js"></script>
<script>
    function submitForm() {
            $("#form1" ).submit();
        }
</script>
