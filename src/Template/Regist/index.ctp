<link rel="stylesheet" href="css/screen/for-login.css"/>

<div class="limiter m-t-100" style="margin-top: 100px">
    <div class="container-login100">
        <div class="wrap-login100">
            <form class="login100-form validate-form p-l-55 p-r-55 p-t-178" method="post">
                    <span class="login100-form-title">
                        Sign Up
                    </span>

                <?php if(isset($error)): ?>
                <div class="input-error m-b-16">
                    <label class="m-b-0">
                        <?= $error ?>
                    </label>
                </div>
                <?php endif; ?>

                <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter first name">
                    <input class="input100" type="text" name="name01" id="name01"
                           value="<?= (isset($data['name01']))? $data['name01'] : ''; ?>" placeholder="First name">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter last name">
                    <input class="input100" type="text" name="name02" id="name02" value="<?= (isset($data['name02']))? $data['name02'] : ''; ?>" placeholder="Last name">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter Email">
                    <input class="input100" type="text" name="email" id="email" placeholder="Email">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter password">
                    <input class="input100" type="password" id="pass" name="password" placeholder="Password">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter password confirm">
                    <input class="input100" type="password" id="pass_confirm" name="pass_confirm"
                           placeholder="Password confirm">
                    <span class="focus-input100"></span>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Sign up
                    </button>
                </div>

                <div class="flex-col-c p-t-170 p-b-40">
                        <span class="txt1 p-b-9">
                            Do you have an account?
                        </span>

                    <a href="#" class="txt3">
                        Sign in
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="js/screen/for-regist.js"></script>
