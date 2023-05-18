<!-- login form -->
<div class=" form-login bg-white rounded-end">

    <div class="text-center">
        <img src="assets/images/icons/male_user.svg" alt="" height="80" class="" />
        <h4 class="font-title fw-bold mb-2">LOG IN</h4>
    </div>

    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="LoginForm">
        <div class="mx-3">

            <?php if(isset($_SESSION['messageOne']) || isset($_SESSION['messageTwo'])) : ?>
            <ul id="alertRegisterSuccess" role="alert" class="register alert alert-success fw-bold fs-7 py-2 px-4">
                <li id="succMsg" class="register"><?php echo $_SESSION['messageOne']; ?></li>
                <li id="succMsg" class="register"><?php echo $_SESSION['messageTwo']; ?></li>
            </ul>
            <?php endif; ?>
            <?php unset($_SESSION['messageOne'], $_SESSION['messageTwo']); ?>

            <?php if(isset($_SESSION['errorLogin'])) : ?>
            <ul id="alertRegisterSuccess" role="alert" class="register alert alert-danger fw-bold fs-7 py-2 px-4">
                <li id="succMsg" class="register"><?php echo $_SESSION['errorLogin']; ?></li>
            </ul>
            <?php endif; ?>
            <?php unset($_SESSION['errorLogin']) ?>

            <ul id="alertLoginError" role="alert" class="login d-none alert alert-danger fw-bold fs-7 py-2 px-4">
                <li id="errAll" class="login d-none"></li>
                <li id="errUsername" class="login d-none"></li>
                <li id="errPassword" class="login d-none"></li>
            </ul>


            <div class="form-group">
                <label for="username" class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                    USERNAME <span class="text-danger">*</span>
                </label>
                <input type="text" id="account_username" name="account_username"
                    class="login form-control border border-primary" />
            </div>

            <div class="form-group">
                <label for="password" class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                    Password <span class="text-danger">*</span>
                </label>
                <div
                    class="input-group d-flex justify-content-end align-items-center flex-row border border-primary rounded-2">
                    <input type="password" id="account_password" name="account_password"
                        class="login form-control flex-grow border-0 border-end border-primary" data-toggle="password"
                        aria-describedby="basic-addon2" />
                    <span class="input-group-text d-flex justify-content-center align-items-center border-0"
                        id="basic-addon2" style="width: 46px">
                        <i class="fa fa-eye"></i>
                    </span>
                </div>
            </div>

            <div class="my-2 d-flex justify-content-center align-items-center">
                <a class="fs-7 fw-bold font-text" href="forgot-password.php">
                    Forgot password?
                </a>
            </div>

            <button type="submit" id="Login" name="Login"
                class="w-100 btn btn-primary fw-bold text-uppercase font-title py-2">
                Submit
            </button>
        </div>
    </form>

    <div class="animate__animated animate__slideInUp my-3 border-top border-primary w-100">
        <p class="my-2 text-center font-text fw-bold fs-7">Don't have an account?</p>

        <div class="px-3">
            <a href="signup.php" class="btn btn-outline-primary py-2 fw-bold text-uppercase w-100 ">
                Sign up now
            </a>
        </div>
    </div>
</div>
<!-- end of login form -->
