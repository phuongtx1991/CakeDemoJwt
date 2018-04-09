<link rel="stylesheet" href="css/screen/forsearch.css"/>

<div class="container">
    <div class="row">
        <form class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 job-form" 　name="form1" id='form1'
              method="post" 　>
            <h3>Tìm kiếm công việc</h3>

            <input type="text" class="form-control white" placeholder="Nhập từ khóa" id="searchKeyword"
                   value="<?= isset($searchKeyword)? $searchKeyword : '' ?>">

            <?=
                $this->Form->select(
            'searchJobType',
            [1=>'Nhân viên chính thức', 2=>'Làm thêm', 3=>'phái cử'],
            [
            'class' => 'form-control white',
            'empty' => 'Lựa chọn công việc',
            ]
            );
            ?>

            <?=
                $this->Form->select(
            'searchJobCart',
            $jobCartArray,
            [
            'class' => 'form-control white',
            'empty' => 'Lựa chọn ngành nghề',
            ]
            );
            ?>

            <?=
                $this->Form->select(
            'searchRegion',
            $RegionArray,
            [
            'class' => 'form-control white',
            'empty' => 'Lựa chọn địa điểm làm việc',
            ]
            );
            ?>

            <?=
                $this->Form->select(
            'searchFrom',
            [1=>'Tìm việc từ Việt Nam', 2=>'Tìm việc từ nhật bản'],
            [
            'class' => 'form-control white',
            'empty' => 'Nơi tìm việc',
            ]
            );
            ?>

            <div style="text-align: center;margin-top: -20px">
                <input type="button" onclick="submitSearch();" class="btn dark-red btn-search" title="Tìm kiếm"
                       value="Tìm kiếm"
                       name="search"/>
            </div>
        </form>
    </div>

    <?php if(!isset($search)) : ?>
    <!-- job list -->
    <!-- viec lam hap dan -->

    <div class="row">
        <p class="font-design-lg title-jobtype">
            <b>Việc làm hấp dẫn</b>
        </p>
        <img class="img-responsive" src="img/common_img/dotted-line-white-med.png" alt=""/>
    </div>

    <?php foreach ($jobAbs as $item): ?>
    <div class="row rank-job-list">
        <!-- logo -->
        <div class="col-xs-3 job-unit-height">
            <div class="logo-box">
                <a href="/jobDetail?job_id=<?= $item['product_id'] ?>" target="_self">
                    <img class="img-responsive job-logo" src="img/common_img/evolable_logo.png" alt="Facebook"/>
                </a>
            </div>
        </div>
        <div class="col-xs-9 ">
            <a href="/jobDetail?job_id=<?= $item['product_id'] ?>" target="_self"
               title="<?= $item['main_list_comment_vn'] ?>">
                <p class="font-design-lg job-title-text">
                    <b><?= $item['name_vn'] ?></b>
                </p>
            </a>
            <p class="job-salary-text">
                <img src="img/common_img/salary_icon.png" alt=""/>
                <b><?= $item['salary_min'] ?>JPY〜<?= $item['salary_max'] ?>JPY</b>
            </p>
            <p class="job-place-text">
                <img src="img/common_img/job_place.png" alt=""/>
                <b><?= $item['work_location_vn'] ?></b>
            </p>
        </div>
    </div>
    <?php endforeach; ?>

    <!-- viec lam tuyen gap -->
    <div class="row">
        <p class="font-design-lg title-jobtype ">
            <b>Việc làm tuyển gấp</b>
        </p>
        <img class="img-responsive" src="img/common_img/dotted-line-white-med.png" alt=""/>
    </div>

    <?php foreach ($jobFast as $item): ?>
    <div class="row rank-job-list">
        <!-- logo -->
        <div class="col-xs-3 job-unit-height">
            <div class="logo-box">
                <a href="/jobDetail?job_id=<?= $item['product_id'] ?>" target="_self">
                    <img class="img-responsive job-logo" src="img/common_img/evolable_logo.png" alt="Facebook"/>
                </a>
            </div>
        </div>
        <div class="col-xs-9 ">
            <a href="/jobDetail?job_id=<?= $item['product_id'] ?>" target="_self"
               title="<?= $item['main_list_comment_vn'] ?>">
                <p class="font-design-lg job-title-text">
                    <b><?= $item['name_vn'] ?></b>
                </p>
            </a>
            <p class="job-salary-text">
                <img src="img/common_img/salary_icon.png" alt=""/>
                <b><?= $item['salary_min'] ?>JPY〜<?= $item['salary_max'] ?>JPY</b>
            </p>
            <p class="job-place-text">
                <img src="img/common_img/job_place.png" alt=""/>
                <b><?= $item['work_location_vn'] ?></b>
            </p>
        </div>
    </div>
    <?php endforeach; ?>
    <?php else : ?>
    <div class="row">
        <p class="font-design-lg title-jobtype ">
            <b>Kết quả tìm kiếm</b>
        </p>
        <img class="img-responsive" src="img/common_img/dotted-line-white-med.png" alt=""/>
    </div>
    <?php foreach ($jobSearchResult as $item): ?>
    <div class="row rank-job-list">
        <!-- logo -->
        <div class="col-xs-3 job-unit-height">
            <div class="logo-box">
                <a href="/jobDetail?job_id=<?= $item['product_id'] ?>" target="_self">
                    <img class="img-responsive job-logo" src="img/common_img/evolable_logo.png" alt="Facebook"/>
                </a>
            </div>
        </div>
        <div class="col-xs-9 ">
            <a href="/jobDetail?job_id=<?= $item['product_id'] ?>" target="_self"
               title="<?= $item['main_list_comment_vn'] ?>">
                <p class="font-design-lg job-title-text">
                    <b><?= $item['name_vn'] ?></b>
                </p>
            </a>
            <p class="job-salary-text">
                <img src="img/common_img/salary_icon.png" alt=""/>
                <b><?= $item['salary_min'] ?>JPY〜<?= $item['salary_max'] ?>JPY</b>
            </p>
            <p class="job-place-text">
                <img src="img/common_img/job_place.png" alt=""/>
                <b><?= $item['work_location_vn'] ?></b>
            </p>
        </div>
    </div>
    <?php endforeach; ?>
    <?php endif; ?>
</div>


<script>
    function submitSearch() {
        var searchKeyword = $('#searchKeyword').val();
        var searchJobType = $('select[name=searchJobType]').val();
        var searchJobCart = $('select[name=searchJobCart]').val();
        var searchRegion = $('select[name=searchRegion]').val();
        var searchFrom = $('select[name=searchFrom]').val();

        var url_action = '/searchjob?search=1&' +
            'searchKeyword=' + searchKeyword + "&" +
            'searchJobType=' + searchJobType + "&" +
            'searchJobCart=' + searchJobCart + "&" +
            'searchRegion=' + searchRegion + "&" +
            'searchFrom=' + searchFrom;
        $('#form1').attr('action', url_action);
        $('#form1').submit();
    }
</script>

