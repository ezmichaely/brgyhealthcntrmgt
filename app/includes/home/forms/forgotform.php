<!-- forgot  form -->
<div class=" form-forgot bg-white rounded-end">
    <div class="text-center">
        <img src="assets/images/icons/male_user.svg" alt="" height="80" class="" />
        <h4 class="font-title fw-bold mb-2">FORGOT PASSWORD</h4>
    </div>

    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="w-100"
        id="ForgotPasswordForm">

        <div class="mx-3">
            <!-- form alert -->
            <?php if(isset($_SESSION['errorMessageOne']) || isset($_SESSION['errorMessageTwo'])) : ?>
            <ul id="alertResetPasswordError" role="alert"
                class="resetpassword alert alert-danger fw-bold fs-7 py-2 px-4">
                <li id="succMsg" class="resetpassword"><?php echo $_SESSION['errorMessageOne']; ?></li>
                <li id="succMsg" class="resetpassword"><?php echo $_SESSION['errorMessageTwo']; ?></li>
            </ul>
            <?php endif; ?>
            <?php unset($_SESSION['errorMessageOne'], $_SESSION['errorMessageTwo']); ?>

            <ul id="alertForgotPasswordError" role="alert"
                class="forgotpassword d-none alert alert-danger fw-bold fs-7 py-2 px-4">
                <li id="errAll" class="forgotpassword d-none"></li>
                <li id="errType" class="forgotpassword d-none"></li>
                <li id="errFirstname" class="forgotpassword d-none"></li>
                <li id="errLastname" class="forgotpassword d-none"></li>
                <li id="errUsername" class="forgotpassword d-none"></li>
                <li id="errQuestion" class="forgotpassword d-none"></li>
                <li id="errAnswer" class="forgotpassword d-none"></li>
            </ul>

            <!-- account type -->
            <div class="form-group mt-2">
                <label for="account_type" class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                    account type <span class="text-danger">*</span>
                </label>
                <select id="account_type" name="account_type" class="forgotpassword form-select border border-primary"
                    aria-label="Default select example">
                    <option hidden></option>
                    <option value="1">Staff</option>
                    <option value="2">Nurse</option>
                </select>
            </div>

            <!-- first name -->
            <div class="form-group mt-2">
                <label for="firstname" class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                    first name <span class="text-danger">*</span>
                </label>
                <input type="text" id="account_firstname" name="account_firstname"
                    class="forgotpassword form-control border border-primary" />
            </div>

            <!-- last name -->
            <div class="form-group">
                <label for="lastname" class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                    last name <span class="text-danger">*</span>
                </label>
                <input type="text" id="account_lastname" name="account_lastname"
                    class="forgotpassword form-control border border-primary" />
            </div>

            <!-- username -->
            <div class="form-group">
                <label for="username" class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                    username <span class="text-danger">*</span>
                </label>
                <input type="text" id="account_username" name="account_username"
                    class="forgotpassword form-control border border-primary" />
            </div>

            <!-- question -->
            <div class="form-group w-100">
                <label for="question_id" class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                    password security question <span class="text-danger">*</span>
                </label>
                <select id="question_id" name="question_id" class="forgotpassword form-select border border-primary"
                    aria-label="Default select example">
                    <option hidden></option>

                    <?php while ($row = mysqli_fetch_array($stmt)) :
                            $question_id = $row['question_id'];
                            $question_name = $row['question_name']
                    ?>
                    <option value="<?php echo $question_id; ?>"><?php echo $question_name; ?></option>
                    <?php endwhile; ?>
                </select>
            </div>

            <!-- answer -->
            <div class="form-group w-100">
                <label for="answer" class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                    answer <span class="text-danger">*</span>
                </label>
                <input type="text" id="account_answer" name="account_answer"
                    class="forgotpassword form-control border border-primary" />
            </div>

            <!-- submit button -->
            <div class="my-3">
                <button type="submit" id="ForgotPasswordBtn" name="ForgotPasswordBtn"
                    class="w-100  py-2 font-title btn btn-primary fw-bold text-uppercase ">
                    submit
                </button>
            </div>
        </div>
    </form>
    <!-- end of form -->

    <div class="mb-3 px-3 border-top border-primary">
        <p class="my-2 text-center font-text fw-bold fs-7">
            Want to log in?
        </p>

        <a href="index.php" class=" btn btn-outline-primary py-2 fw-bold text-uppercase w-100 ">
            log in now
        </a>
    </div>
</div>
<!-- end of login form -->
