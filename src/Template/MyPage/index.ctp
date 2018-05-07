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
                                <a href="/updateuserinfo" class="btn btn-danger">Cập nhật hồ sơ</a>

                            </div>
                        </div>
                        <div class="col-md-8 col-sm-8">
                            <h2 class="card-title-fix text-center m-t-15"><?= $customInfo['name02'] ?> <?= $customInfo['name01'] ?></h2>
                            <p class="card-text-fix"><strong>Profile: </strong> Web Developer </p>
                            <p class="card-text-fix"><strong>Skills: </strong> Theme, plugin and website development </p>
                            <p><strong>Platform: </strong>
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
        <div class="upload-form" id="uploader">
            <!-- Form Heading -->
            <h1 class="">Hồ sơ đính kèm</h1>

            <p>Được cập nhật ngày 18/04/1028</p>

            <!-- Select & Upload Button -->
            <div>
                <a class="button" id="pickfiles" href="#">Chọn tệp</a>
                <a class="button" id="uploadfiles" href="#">Tải lên</a>
            </div>

            <!-- File List -->
            <div id="filelist" class="cb"></div>

            <!-- Progress Bar -->
            <div id="progressbar"></div>

        </div>
    </div>

    <div class="row p-l-20 p-r-20 myjob" >
        <div class="col-xs-12">
            <div class="col-xs-2">
                <span class="green-color">03</span>
            </div>
            <div class="col-xs-10">
                <a href="#">
                    <h4>
                        <strong>Nhà Tuyển Dụng Xem Hồ Sơ</strong>
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
                        <strong> Việc làm đã lưu</strong>
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
                        <strong> Việc làm đã ứng tuyển</strong>
                    </h4>
                </a>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.js"></script>
<script src="js/screen/upload-form.js"></script>
<script src="js/screen/plupload.full.js"></script>
<script src="js/jquery/jquery-progressbar.min.js"></script>


