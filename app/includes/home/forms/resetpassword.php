<!-- form -->
<div class="form-register bg-white rounded-bottom py-2 pb-3">
    <div class="d-flex justify-content-center align-items-center flex-column ">
        <div class="text-center">
            <img src="assets/images/icons/male_user.svg" alt="" height="80" class="m-0 p-0" />
            <h4 class="text-uppercase fw-bold">PASSWORD RESET</h4>
        </div>

        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="w-100"
            id="ResetPasswordForm">
            <div class="mx-3">

                <!-- form alert -->
                <?php if(isset($_SESSION['messageOne']) || isset($_SESSION['messageTwo'])) : ?>
                <div class="mt-2">
                    <ul id="alertForgotPasswordSuccess" role="alert"
                        class="forgotpassword alert alert-success fw-bold fs-7 py-2 px-4">
                        <li id="succMsg" class="forgotpassword"><?php echo $_SESSION['messageOne']; ?></li>
                        <li id="succMsg" class="forgotpassword"><?php echo $_SESSION['messageTwo']; ?></li>
                    </ul>
                </div>
                <?php endif; ?>
                <?php unset($_SESSION['messageOne'], $_SESSION['messageTwo']); ?>

                <ul id="alertResetPasswordError" role="alert"
                    class="resetpassword d-none alert alert-danger fw-bold fs-7 py-2 px-4 mt-2">
                    <li id="errPassword" class="resetpassword d-none"></li>
                    <li id="errConfirmpassword" class="resetpassword d-none"></li>
                </ul>
                <div class="d-none">
                    <!-- id -->
                    <div class="form-group mt-2">
                        <label for="account_id" class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                            ID <span class="text-danger">*</span>
                        </label>
                        <input type="text" id="account_id" name="account_id" value="<?php echo $idGET ?>"
                            class="resetpassword form-control border border-primary" />
                    </div>
                    <!-- token -->
                    <div class="form-group mt-2">
                        <label for="account_token" class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                            TOKEN <span class="text-danger">*</span>
                        </label>
                        <input type="text" id="account_token" name="account_token" value="<?php echo $tokenGET ?>"
                            class="resetpassword form-control border border-primary" />
                    </div>
                </div>

                <!-- password -->
                <div class="form-group mt-2">
                    <label for="password" class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                        Password <span class="text-danger">*</span>
                    </label>
                    <div class="input-group d-flex justify-content-end align-items-center flex-row border border-primary rounded-2 "
                        id="passwordgroup">
                        <input type="password" id="account_password" name="account_password"
                            class="resetpassword form-control flex-grow border-0 border-end border-primary "
                            data-toggle="password" aria-describedby="basic-addon3" />
                        <span class="input-group-text d-flex justify-content-center align-items-center border-0"
                            id="basic-addon3" style="width: 46px">
                            <i class="fa fa-eye"></i>
                        </span>
                    </div>
                </div>

                <!-- confirm password -->
                <div class="form-group mt-2">
                    <label for="confirmpassword" class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                        confirm Password <span class="text-danger">*</span>
                    </label>

                    <div class="input-group d-flex justify-content-end align-items-center flex-row border border-primary rounded-2 "
                        id="confirmpasswordgroup">
                        <input type="password" id="account_confirmpassword" name="account_confirmpassword"
                            class="resetpassword form-control flex-grow border-0 border-end border-primary"
                            data-toggle="password" aria-describedby="basic-addon4" />
                        <span class="input-group-text d-flex justify-content-center align-items-center border-0"
                            id="basic-addon4" style="width: 46px">
                            <i class="fa fa-eye"></i>
                        </span>
                    </div>
                </div>

                <div class="my-3">
                    <button type="submit" id="ResetPasswordBtn" name="ResetPasswordBtn"
                        class="w-100 btn btn-primary fw-bold text-uppercase font-title py-2 ">
                        reset password
                    </button>
                </div>

            </div>
        </form>
        <!-- end of form -->

        <div class="border-top border-primary w-100">
            <p class="my-2 text-center font-text fw-bold fs-7">
                Already have an account?
            </p>
            <div class="mx-3">
                <a href="index.php" class=" btn btn-outline-primary py-2 fw-bold text-uppercase w-100">
                    LOG IN NOW
                </a>
            </div>
        </div>
    </div>
</div>
