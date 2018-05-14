<link rel="stylesheet"  href="css/screen/for-login.css" />

<div class="limiter m-t-100" style="margin-top: 100px">
    <div class="container-login100">
        <div class="wrap-login100">
            <form class="login100-form validate-form p-l-55 p-r-55 p-t-178" method="post">
                    <span class="login100-form-title">
                        <?= $login['label_sign_in'] ?>
                    </span>
                <?php if(isset($error)): ?>
                <div class="input-error m-b-16" >
                    <label class="m-b-0">
                        <?= $error ?>
                    </label>
                </div>
                <?php endif; ?>

                <div class="wrap-input100 validate-input m-b-16" data-validate="">
                    <input class="input100" type="text" name="email" id="email" placeholder="<?= $login['placeholder_email'] ?>">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "<?= $login['validate_password_empty'] ?>">
                        <input class="input100" type="password" name="password" id="pass" placeholder="<?= $login['placeholder_password'] ?>">
                    <span class="focus-input100"></span>
                </div>

                <div class="text-right p-t-13 p-b-23">
                    <a href="#" class="txt2">
                        <?= $login['label_forgot'] ?>
                    </a>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        <?= $login['label_sign_in'] ?>
                    </button>
                </div>

                <div class="flex-col-c p-t-170 p-b-40">
                        <span class="txt1 p-b-9">
                            <?= $login['label_dont_have_acc'] ?>
                        </span>

                    <a href="#" class="txt3">
                        <?= $login['label_sign_up_now'] ?>
                    </a>
                </div>
            </form>
            <input hidden id="validate_email_empty" value="<?= $login['validate_email_empty'] ?>">
            <input hidden id="validate_email_wrong" value="<?= $login['validate_email_wrong'] ?>">
        </div>
    </div>
</div>

<script src="js/screen/for-login.js"></script>
