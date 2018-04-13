<?php
use Cake\Core\Configure;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>出退勤入力（スマホ）</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/common/bootstrap.css"/>
    <link rel="stylesheet"  href="css/font-awesome.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/common/common.css"/>
    <link href="css/bootstrap-toggle.css" rel="stylesheet">
    <link href="css/common/util.css" rel="stylesheet">

    <script type="text/javascript" src="js/common/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="js/common/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/common/Jscommon.js"></script>
    <script src="js/common/bootstrap-toggle.js"></script>

    <!--<?= $this->Html->meta('icon') ?>-->

    <!--<?= $this->Html->css('base.css') ?>-->
    <!--<?= $this->Html->css('cake.css') ?>-->

    <!--<?= $this->fetch('meta') ?>-->
    <!--<?= $this->fetch('css') ?>-->
    <!--<?= $this->fetch('script') ?>-->

</head>
<body>

<div class="container">
    <div class="row">
        <nav id="navigation" class="navbar navbar-fixed-top " role="">
            <div class="logo">
                <i >
                    <img style="height: 42px" src="img/common_img/Hyperion.png"  />
                </i>
                    <input type="checkbox" id="lang-btn" <?php if($lang == 'vn'): ?>checked<?php endif; ?> data-toggle="toggle" data-on="JP" data-off="VN" data-onstyle="success" data-offstyle="danger">

            </div>
            <div class="main-nav">
                <a class="hamburger-nav"></a>
                <ul class="menu" style="margin-top: 19px;">
                    <a href="#home"><li><i class="fa fa-home"></i> Home</li></a>
                    <a href="#portfolio"><li><i class="fa fa-file-image-o"></i> Portfolio</li></a>
                    <a href="#about"><li><i class="fa fa-user"></i> About</li></a>
                    <a href="#contact"><li><i class="fa fa-envelope"></i> Contact</li></a>
                    <a href="#setting"><li><i class="fa fa-cogs"></i>Settings</li></a>
                </ul>
            </div>
        </nav>
    </div>
</div>

<!--<?= $this->Flash->render() ?>-->
<?= $this->fetch('content') ?>

<footer>
    <div class="container footer-container">
        <div class="row">
            <div class="col-xs-12">
                <li class="footer-main-logo">
                    <img src="img/common_img/HyperionLogo.png">
                </li>
            </div>
            <div class="col-xs-12 footer-contact">
                <p class="font-design-lg footer-contact-place-title">
                    <b>Địa chỉ</b>
                    <img src="img/common_img/icon_place.png" alt=""/>
                </p>
                <img class="img-responsive" src="img/common_img/dotted-line-white-med.png" alt=""/>
                <p class="footer-contact-place-detail lead">Phòng 319, tầng 3, tòa nhà UDIC Complex Hoàng Đạo Thúy,
                    phường Trung Hòa, quận Cầu Giấy, thành phố Hà Nội.</p>
                <p class="font-design-lg contact-title-color">
                    <b>Kết nối với chúng tôi</b>
                    <img src="img/common_img/connect_icon.png" alt=""/>
                </p>
                <img class="img-responsive" src="img/common_img/dotted-line-white-med.png" alt=""/>

            </div>
            <div class="col-xs-12 ol-xs-offset-1 footer-contact-icon">
                <a href="https://www.facebook.com/hyperionjobvn/" target="_blank">
                    <img src="img/common_img/facebook_icon.png" alt="Facebook"/>
                </a>
                <a href="https://www.facebook.com/hyperionjobvn/" target="_blank">
                    <img src="img/common_img/yotube_icon.png" alt="Facebook"/>
                </a>
                <a href="https://www.facebook.com/hyperionjobvn/" target="_blank">
                    <img src="img/common_img/twitter_icon.png" alt="Facebook"/>
                </a>
                <a href="https://www.facebook.com/hyperionjobvn/" target="_blank">
                    <img src="img/common_img/linkedin_icon.png" alt="Facebook"/>
                </a>
            </div>
            <div class="col-xs-12 footer-contact-icon">
                <i>
                    <img src="img/common_img/tel_full.png" alt="Facebook"/>
                </i>
            </div>
            <div class="col-xs-12 footer-contact-icon">
                <i>
                    <img src="img/common_img/mail_full.png" alt="Facebook"/>
                </i>
            </div>
            <div class="col-xs-12 col-xs-offset-1 footer-contact-relation">
                <div class="col-xs-6  ">
                    <a href="https://pharmapremium.jp/" target="_blank">
                        <img class="img-responsive" src="img/common_img/logo-pharmapremium.png" alt="Pharma premium"/>
                    </a>
                </div>
                <div class="col-xs-6  ">
                    <a href="https://matebank.jp/" target="_blank">
                        <img class="img-responsive" src="img/common_img/logo-matebank.png" alt="Matebank"/>
                    </a>
                </div>
                <div class="col-xs-6 col-xs-offset-3 footer-contact-relation-logo">
                    <a href="http://www.hyperion-job.jp/" target="_blank">
                        <img class="img-responsive" src="img/common_img/logo-hyperionjob.png" alt="Hyperion job"/>
                    </a>
                </div>
            </div>

            <div class="col-xs-12 copyright-style">
                <p class="lead">Copyright © Hyperion All Rights Reserved</p>
            </div>
        </div>
    </div>
</footer>

</body>
</html>
