<div class="container">
    <div class="row detail-job-form">
        <div class="col-xs-12 detail-company pading-0 mgtop100">
            <div class="col-xs-12 pading-0 bg-color-title detail-min-height">
                <div class="col-xs-10 " >
                    <p class="padding-title-intro">
                        <?= $JobInfo['name_vn'] ?>
                    </p>
                </div>
                <div class="col-xs-1 active-icon">
                    <i class="fa fa-heart"></i>
                </div>
            </div>

            <p class="deadline">Ngày hết hạn :  <?= $JobInfo['end_date'] ?></p>
            <div class="col-xs-6 text-align-right">
                <i class="fa fa-star-o job-status abs-box"><span>&#32;HẤP DẪN</span></i>
            </div>
            <div class="col-xs-6 text-align-left">
                <i class="fa fa-rocket job-status rec-fast-box"><span>&#32;TUYỂN GẤP</span></i>
            </div>

            <div class="col-xs-10 col-xs-offset-1 text-align-center apply-button">
                <a href="#"><span>ỨNG TUYỂN</span></a>
            </div>
        </div>
        <!-- thông tin tuyển dụng -->
        <div class="col-xs-12 detail-company pading-0 mgtop10">
            <div class="col-xs-12 pading-0 bg-color-title detail-min-height detail-title">
                <div class="col-xs-1 detail-title-icon">
                    <i class="fa fa-info-circle"></i>
                </div>
                <div class="col-xs-9 pading-0">

                    <p class="padding-title-detail">
                        THÔNG TIN TUYỂN DỤNG
                    </p>
                </div>
                <div class="col-xs-1 active-icon">
                    <i class="fa fa-plus-square"></i>
                </div>
            </div>
            <div class="col-xs-12 pading-0 detail-info hiden-detail">
                <dl >
                    <dt>Loại công việc</dt>
                    <dd><?= h($JobInfo['employment_status']) ?></dd>
                    <dt>Vị trí</dt>
                    <dd><?= h($JobInfo['position']) ?></dd>
                    <dt>Lương</dt>
                    <dd><?= h($JobInfo['salary_rank']) ?><br><?= nl2br(h($JobInfo['salary_vn'])) ?></dd>
                    <dt>Địa điểm làm việc</dt>
                    <dd><?= nl2br($JobInfo['place']) ?></dd>
                    <dt>Hướng dẫn đi lại</dt>
                    <dd><?= nl2br(h($JobInfo['traffic_access_vn'])) ?></dd>
                    <dt>Thời gian làm việc</dt>
                    <dd><?= nl2br($JobInfo['work_time']) ?></dd>
                    <dt>Ngày làm việc</dt>
                    <dd><?= nl2br(h($JobInfo['working_day_vn'])) ?></dd>
                    <dt>Thời gian thử việc</dt>
                    <dd><?= nl2br(h($JobInfo['trial_period_vn'])) ?></dd>
                </dl>
            </div>
        </div>

        <!-- Yêu cầu công việc -->
        <div class="col-xs-12 detail-company pading-0 mgtop10">
            <div class="col-xs-12 pading-0 bg-color-title detail-min-height detail-title">
                <div class="col-xs-1 detail-title-icon">
                    <i class="fa fa fa-file-text"></i>
                </div>
                <div class="col-xs-9 pading-0">

                    <p class="padding-title-detail">
                        YÊU CẦU CÔNG VIỆC
                    </p>
                </div>
                <div class="col-xs-1 active-icon ">
                    <i class="fa fa-plus-square"></i>
                </div>
            </div>
            <div class="col-xs-12 pading-0 detail-info hiden-detail" >
                <dl >
                    <dt>Số lượng tuyển</dt>
                    <dd><?= h($JobInfo['offer_number']) ?></dd>
                    <dt>Giới tính</dt>
                    <dd><?= h($JobInfo['sex']) ?></dd>
                    <dt>Trình độ học vấn</dt>
                    <dd><?= nl2br(h($JobInfo['qualification_vn'])) ?></dd>
                    <dt>Tính cách</dt>
                    <dd><?= nl2br(h($JobInfo['personality_vn'])) ?></dd>
                    <dt>Kinh nghiệm, kỹ năng</dt>
                    <dd><?= nl2br(h($JobInfo['skill_vn'])) ?></dd>
                </dl>
            </div>
        </div>

        <!--CHẾ ĐỘ PHÚC LỢI -->
        <div class="col-xs-12 detail-company pading-0 mgtop10">
            <div class="col-xs-12 pading-0 bg-color-title detail-min-height detail-title">
                <div class="col-xs-1 detail-title-icon">
                    <i class="fa fa fa-coffee"></i>
                </div>
                <div class="col-xs-9 pading-0">

                    <p class="padding-title-detail">
                        CHẾ ĐỘ, PHÚC LỢI
                    </p>
                </div>
                <div class="col-xs-1 active-icon ">
                    <i class="fa fa-plus-square"></i>
                </div>
            </div>
            <div class="col-xs-12 pading-0 detail-info hiden-detail" >
                <dl >
                    <dt>Tăng lương</dt>
                    <dd><?= nl2br(h($JobInfo['payrise_vn'])) ?></dd>
                    <dt>Thưởng</dt>
                    <dd><?= nl2br(h($JobInfo['bonus_vn'])) ?></dd>
                    <dt>Bảo hiểm</dt>
                    <dd><?= nl2br(h($JobInfo['insurance_vn'])) ?></dd>
                    <dt>Phúc lợi</dt>
                    <dd><?= nl2br($JobInfo['welfare']) ?></dd>
                    <dt>Phúc lợi khác</dt>
                    <dd><?= nl2br(h($JobInfo['other_welfare_vn'])) ?></dd>
                    <dt>Khám sức khỏe</dt>
                    <dd><?= nl2br(h($JobInfo['medical_checkup_vn'])) ?></dd>
                </dl>
            </div>
        </div>

        <!--mô tả công việc -->
        <div class="col-xs-12 detail-company pading-0 mgtop10">
            <div class="col-xs-12 pading-0 bg-color-title detail-min-height detail-title">
                <div class="col-xs-1 detail-title-icon">
                    <i class="fa fa fa-tasks"></i>
                </div>
                <div class="col-xs-9 pading-0">

                    <p class="padding-title-detail">
                        MÔ TẢ CÔNG VIỆC
                    </p>
                </div>
                <div class="col-xs-1 active-icon ">
                    <i class="fa fa-plus-square"></i>
                </div>
            </div>
            <div class="col-xs-12 pading-0 detail-info hiden-detail" >
                    <p class="job-description">
                        <?= nl2br(h($JobInfo['main_comment_vn'])) ?>
                    </p>
            </div>
        </div>

        <?php if(!empty($JobInfo['client_introduction_vn'])) : ?>
        <!--Thông tin nhà tuyển dụng -->
        <div class="col-xs-12 detail-company pading-0 mgtop10">
            <div class="col-xs-12 pading-0 bg-color-title detail-min-height detail-title">
                <div class="col-xs-1 detail-title-icon">
                    <i class="fa fa fa-group"></i>
                </div>
                <div class="col-xs-9 pading-0">

                    <p class="padding-title-detail">
                        THÔNG TIN NHÀ TUYỂN DỤNG
                    </p>
                </div>
                <div class="col-xs-1 active-icon ">
                    <i class="fa fa-plus-square"></i>
                </div>
            </div>
            <div class="col-xs-12 pading-0 detail-info hiden-detail" >
                <p class="job-description">
                    <?= nl2br(h($JobInfo['client_introduction_vn'])) ?>
                </p>
            </div>
        </div>
        <?php endif; ?>

        <!--Phương pháp ứng tuyển -->
        <div class="col-xs-12 detail-company pading-0 mgtop10">
            <div class="col-xs-12 pading-0 bg-color-title detail-min-height detail-title">
                <div class="col-xs-1 detail-title-icon">
                    <i class="fa fa fa-id-card"></i>
                </div>
                <div class="col-xs-9 pading-0">

                    <p class="padding-title-detail">
                        PHƯƠNG PHÁP ỨNG TUYỂN
                    </p>
                </div>
                <div class="col-xs-1 active-icon ">
                    <i class="fa fa-plus-square"></i>
                </div>
            </div>
            <div class="col-xs-12 pading-0 detail-info hiden-detail" >
                <dl >
                    <dt>Phương pháp ứng tuyển</dt>
                    <dd><?= nl2br(h($JobInfo['applicate_method_vn'])) ?></dd>
                    <dt>Quy trình xét tuyển</dt>
                    <dd><?= nl2br($JobInfo['selection_process']) ?></dd>
                    <dt>Người phụ trách</dt>
                    <dd><?= nl2br($JobInfo['selection_process']) ?></dd>
                </dl>
            </div>
        </div>
    </div>
</div>
