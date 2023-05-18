<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="editAccountForm">
    <div class="modal-header bg-primary">
        <h5 class="fw-bold text-uppercase text-white text-center w-100">
            profile details
        </h5>
    </div>

    <div class="modal-body px-4">

        <!-- form alert -->
        <ul id="alertEditAccountSuccess" role="alert"
            class="editaccount d-none alert alert-success fw-bold fs-7 py-2 px-4">
            <li id="succMsg" class="editaccount d-none"></li>
        </ul>

        <ul id="alertEditAccountError" role="alert"
            class="editaccount d-none alert alert-danger fw-bold fs-7 py-2 px-4">
            <li id="errAll" class="editaccount d-none"></li>
            <li id="errFirstname" class="editaccount d-none"></li>
            <li id="errLastname" class="editaccount d-none"></li>
            <li id="errUsername" class="editaccount d-none"></li>
            <li id="errPassword" class="editaccount d-none"></li>
            <li id="errConfirmpassword" class="editaccount d-none"></li>
            <li id="errQuestion" class="editaccount d-none"></li>
            <li id="errAnswer" class="editaccount d-none"></li>
        </ul>


        <div class="form-row d-flex flex-row justify-content-between align-items-center">
            <!-- account id -->
            <div class="form-group w-40">
                <label for="" class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                    account ID <span class="text-danger">*</span>
                </label>
                <input type="text" name="account_id" value="<?php echo $id; ?>"
                    class="editaccount form-control border border-primary" readonly />
            </div>

            <!-- account type -->
            <div class="form-group w-40 mx-2">
                <label for="" class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                    ACCOUNT TYPE <span class="text-danger">*</span>
                </label>
                <input type="text" name="account_type" value="<?php echo $type; ?>"
                    class="editaccount form-control border border-primary" readonly />
            </div>
            <!-- account status -->
            <div class="form-group w-40">
                <label for="" class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                    ACCOUNT STATUS <span class="text-danger">*</span>
                </label>
                <input type="text" name="account_status" value="<?php echo $status; ?>"
                    class="editaccount form-control border border-primary" readonly />
            </div>
        </div>

        <div class="form-row d-flex flex-row justify-content-between align-items-center">
            <div class="form-group w-50 me-1">
                <label for="firstname" class="form-label text-uppercase fw-bold fs-7 m-0 font-title ">
                    first name <span class="text-danger">*</span>
                </label>
                <input type="text" id="account_firstname" name="account_firstname" value="<?php echo $fname ?>"
                    class="editaccount form-control border border-primary text-capitalize" readonly />
            </div>

            <div class="form-group w-50 ms-1">
                <label for="lastname" class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                    last name <span class="text-danger">*</span>
                </label>
                <input type="text" id="account_lastname" name="account_lastname" value="<?php echo $lname; ?>"
                    class="editaccount form-control border border-primary text-capitalize" readonly />
            </div>
        </div>

        <div class="form-row d-flex flex-row justify-content-between align-items-center mt-2">
            <div class="form-group w-50 me-1">
                <label for="question_id" class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                    password security question <span class="text-danger">*</span>
                </label>
                <select name="question_id" id="question_id" class="editaccount form-select border border-primary"
                    aria-label="Default select example" disabled>
                    <option value="<?php echo $question_id; ?>" selected hidden>
                        <?php echo $question_name; ?>
                    </option>

                    <?php while ($rowQuestions = mysqli_fetch_array($stmtQuestions)) : 
                                                $question_id = $rowQuestions['question_id'];
                                                $question_name = $rowQuestions['question_name'];
                                        ?>
                    <option value="<?php echo $question_id; ?>">
                        <?php echo $question_name; ?>
                    </option>
                    <?php endwhile; ?>
                </select>
            </div>

            <div class="form-group w-50 ms-1">
                <label for="answer" class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                    answer <span class="text-danger">*</span>
                </label>
                <input type="text" id="account_answer" name="account_answer" value="<?php echo $answer; ?>"
                    class="editaccount form-control border border-primary" readonly />
            </div>
        </div>

        <div class="form-row d-flex flex-row justify-content-between align-items-center mt-2">
            <div class="form-group w-100">
                <label for="username" class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                    username <span class="text-danger">*</span>
                </label>
                <input type="text" id="account_username" name="account_username" value="<?php echo $username; ?>"
                    class="editaccount form-control border border-primary" readonly />
            </div>
        </div>

        <div class="form-row d-flex flex-row justify-content-between align-items-center my-2 ">
            <div class="form-group w-50 me-1">
                <label for="password" class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                    Password <span class="text-danger">*</span>
                </label>
                <div class="input-group d-flex justify-content-end align-items-center flex-row border border-primary rounded-2 "
                    id="passwordgroup">
                    <input type="password" id="account_password" name="account_password" value=""
                        class="editaccount form-control flex-grow border-0 border-end border-primary "
                        data-toggle="password" aria-describedby="basic-addon3" readonly />
                    <span class="input-group-text d-flex justify-content-center align-items-center border-0"
                        id="basic-addon3" style="width: 46px">
                        <i class="fa fa-eye"></i>
                    </span>
                </div>
            </div>

            <div class="form-group w-50 ms-1">
                <label for="confirmpassword" class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                    confirm Password <span class="text-danger">*</span>
                </label>

                <div class="input-group d-flex justify-content-end align-items-center flex-row border border-primary rounded-2 "
                    id="confirmpasswordgroup">
                    <input type="password" id="account_confirmpassword" name="account_confirmpassword" value=""
                        class="editaccount form-control flex-grow border-0 border-end border-primary"
                        data-toggle="password" aria-describedby="basic-addon4" readonly />
                    <span class="input-group-text d-flex justify-content-center align-items-center border-0"
                        id="basic-addon4" style="width: 46px">
                        <i class="fa fa-eye"></i>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="modal-footer border-top border-primary">

        <div id="accountProfileModalFooterOne" class="d-block">
            <button type="button" name="getEditAccount" id="getEditAccount"
                class="btn btn-warning fw-bold text-uppercase font-title">
                <i class="fas fa-edit"></i>
                <span class="ms-1">edit</span>
            </button>
        </div>

        <div id="accountProfileModalFooterTwo" class="d-none">
            <button type="button" id="cancelEditAccount" class="btn btn-secondary  fw-bold text-uppercase font-title">
                <i class="fas fa-times"></i>
                <span class="ms-1">CANCEL</span>
            </button>
            <button type="submit" name="EditAccount" id="EditAccount"
                class="btn btn-success fw-bold text-uppercase font-title">
                <i class="fas fa-save"></i>
                <span class="ms-1">SAVE</span>
            </button>
        </div>
    </div>
</form>
