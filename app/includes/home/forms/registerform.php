<!-- form -->
<div class="form-register bg-white rounded-bottom py-2 pb-3">
    <div class="d-flex justify-content-center align-items-center flex-column">
        <div class="text-center">
            <img src="assets/images/icons/male_user.svg" alt="" height="80" class="m-0 p-0" />
            <h4 class="text-uppercase fw-bold px-3">REGISTER</h4>
        </div>

        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="w-100"
            id="RegisterForm">

            <div class="mx-3">
                <!-- form alert -->
                <ul id="alertRegisterSuccess" role="alert"
                    class="register d-none alert alert-success fw-bold fs-7 py-2 px-4">
                    <li id="succMsg" class="register d-none"></li>
                </ul>

                <ul id="alertRegisterError" role="alert"
                    class="register d-none alert alert-danger fw-bold fs-7 py-2 px-4">
                    <li id="errAll" class="register d-none"></li>
                    <li id="errType" class="register d-none"></li>
                    <li id="errFirstname" class="register d-none"></li>
                    <li id="errLastname" class="register d-none"></li>
                    <li id="errUsername" class="register d-none"></li>
                    <li id="errPassword" class="register d-none"></li>
                    <li id="errConfirmpassword" class="register d-none"></li>
                    <li id="errQuestion" class="register d-none"></li>
                    <li id="errAnswer" class="register d-none"></li>
                </ul>

                <!-- account type -->
                <div class="form-group mt-2">
                    <label for="account_type" class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                        account type <span class="text-danger">*</span>
                    </label>
                    <select id="account_type" name="account_type" class="register form-select border border-primary"
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
                        class="register form-control border border-primary" />
                </div>

                <!-- last name -->
                <div class="form-group">
                    <label for="lastname" class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                        last name <span class="text-danger">*</span>
                    </label>
                    <input type="text" id="account_lastname" name="account_lastname"
                        class="register form-control border border-primary" />
                </div>

                <!-- username -->
                <div class="form-group">
                    <label for="username" class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                        username <span class="text-danger">*</span>
                    </label>
                    <input type="text" id="account_username" name="account_username"
                        class="register form-control border border-primary" />
                </div>

                <!-- password -->
                <div class="form-group">
                    <label for="password" class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                        Password <span class="text-danger">*</span>
                    </label>
                    <div class="input-group d-flex justify-content-end align-items-center flex-row border border-primary rounded-2 "
                        id="passwordgroup">
                        <input type="password" id="account_password" name="account_password"
                            class="register form-control flex-grow border-0 border-end border-primary "
                            data-toggle="password" aria-describedby="basic-addon3" />
                        <span class="input-group-text d-flex justify-content-center align-items-center border-0"
                            id="basic-addon3" style="width: 46px">
                            <i class="fa fa-eye"></i>
                        </span>
                    </div>
                </div>

                <!-- confirm password -->
                <div class="form-group">
                    <label for="confirmpassword" class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                        confirm Password <span class="text-danger">*</span>
                    </label>

                    <div class="input-group d-flex justify-content-end align-items-center flex-row border border-primary rounded-2 "
                        id="confirmpasswordgroup">
                        <input type="password" id="account_confirmpassword" name="account_confirmpassword"
                            class="register form-control flex-grow border-0 border-end border-primary"
                            data-toggle="password" aria-describedby="basic-addon4" />
                        <span class="input-group-text d-flex justify-content-center align-items-center border-0"
                            id="basic-addon4" style="width: 46px">
                            <i class="fa fa-eye"></i>
                        </span>
                    </div>
                </div>

                <!-- question -->
                <div class="form-group w-100">
                    <label for="question_id" class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                        password security question <span class="text-danger">*</span>
                    </label>
                    <select id="question_id" name="question_id" class="register form-select border border-primary"
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
                        class="register form-control border border-primary" />
                </div>

                <!-- submit button -->
                <div class="mt-3">
                    <button type="submit" id="Register" name="Register"
                        class="w-100  py-2 font-title btn btn-primary fw-bold text-uppercase ">
                        submit
                    </button>
                </div>
            </div>
        </form>
        <!-- end of form -->

        <div class="mt-3 border-top border-primary px-3 w-100">
            <p class="my-2 text-center font-text fw-bold fs-7">
                Already have an account?
            </p>

            <a href="index.php" class=" btn btn-outline-primary py-2 fw-bold text-uppercase w-100">
                LOG IN NOW
            </a>
        </div>

    </div>
</div>
