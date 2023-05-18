<?php 
    $sql = "SELECT * FROM questions";
    $stmt = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($stmt);
?>


<!-- ADD ADMIN -->
<div class="modal fade" id="addAccountModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="AddAdminForm">
                <div class="modal-header">
                    <h5 class="modal-title" id="addModalLabel">
                        ADD NEW Admin
                    </h5>
                    <button id="ModalCloseButtonAddAdminOne" type="button" class="btn-close btn-close-white"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">

                    <!-- form alert -->
                    <ul id="alertAddAdminSuccess" role="alert"
                        class="addadmin d-none alert alert-success fw-bold fs-7 py-2 px-4">
                        <li id="succMsg" class="addadmin d-none"></li>
                    </ul>

                    <ul id="alertAddAdminError" role="alert"
                        class="addadmin d-none alert alert-danger fw-bold fs-7 py-2 px-4">
                        <li id="errAll" class="addadmin d-none"></li>
                        <li id="errFirstname" class="addadmin d-none"></li>
                        <li id="errLastname" class="addadmin d-none"></li>
                        <li id="errUsername" class="addadmin d-none"></li>
                        <li id="errPassword" class="addadmin d-none"></li>
                        <li id="errConfirmpassword" class="addadmin d-none"></li>
                        <li id="errQuestion" class="addadmin d-none"></li>
                        <li id="errAnswer" class="addadmin d-none"></li>
                    </ul>

                    <div class="form-row d-flex flex-row justify-content-between align-items-center">
                        <div class="form-group w-50 me-1">
                            <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title"> first name
                                <span class="text-danger">*</span></label>
                            <input type="text" name="account_firstname" id="account_firstname"
                                class="addadmin form-control" />
                        </div>

                        <div class="form-group w-50 ms-1">
                            <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title"> last name
                                <span class="text-danger">*</span></label>
                            <input type="text" name="account_lastname" id="account_lastname"
                                class="addadmin form-control" />
                        </div>

                    </div>

                    <div class="form-row d-flex flex-row justify-content-between align-items-center mt-2">
                        <div class="form-group w-100">
                            <label for="username" class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                                username <span class="text-danger">*</span>
                            </label>
                            <input type="text" id="account_username" name="account_username"
                                class="addadmin form-control border border-primary" />
                        </div>
                    </div>

                    <div class="form-row d-flex flex-row justify-content-between align-items-center mt-2">
                        <div class="form-group w-50 me-1">
                            <label for="password" class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                                Password <span class="text-danger">*</span>
                            </label>
                            <div class="input-group d-flex justify-content-end align-items-center flex-row border border-primary rounded-2 "
                                id="passwordgroup">
                                <input type="password" id="account_password" name="account_password"
                                    class="addadmin form-control flex-grow border-0 border-end border-primary "
                                    data-toggle="password" aria-describedby="basic-addon3" />
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
                                <input type="password" id="account_confirmpassword" name="account_confirmpassword"
                                    class="addadmin form-control flex-grow border-0 border-end border-primary"
                                    data-toggle="password" aria-describedby="basic-addon4" />
                                <span class="input-group-text d-flex justify-content-center align-items-center border-0"
                                    id="basic-addon4" style="width: 46px">
                                    <i class="fa fa-eye"></i>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="form-row d-flex flex-row justify-content-between align-items-center mt-2">
                        <div class="form-group w-50 me-1">
                            <label for="question1" class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                                security question <span class="text-danger">*</span>
                            </label>
                            <select id="question_id" name="question_id"
                                class="addadmin form-select border border-primary" aria-label="Default select example">
                                <option hidden></option>

                                <?php while ($row = mysqli_fetch_array($stmt)) :
                                    $question_id = $row['question_id'];
                                    $question_name = $row['question_name']
                                ?>
                                <option value="<?php echo $question_id; ?>"><?php echo $question_name; ?></option>
                                <?php endwhile; ?>
                            </select>
                        </div>

                        <div class="form-group w-50 ms-1">
                            <label for="answer" class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                                answer <span class="text-danger">*</span>
                            </label>
                            <input type="text" id="account_answer" name="account_answer"
                                class="addadmin form-control border border-primary" />
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button id="ModalCloseButtonAddAdminTwo" type="button" class="close btn btn-danger"
                        data-bs-dismiss="modal">
                        <i class="fas fa-times"></i>
                        <span class="ms-1">CLOSE</span>
                    </button>

                    <button type="submit" name="AddAdmin" id="AddAdmin" class="btn btn-primary">
                        <i class="fas fa-save"></i>
                        <span class="ms-1">SAVE</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- VIEW -->
<div class="modal fade" id="viewAccountModal" tabindex="-1" aria-labelledby="viewModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div id="content-data"></div>
        </div>
    </div>
</div>

<!-- DELETE -->
<div class="modal fade" id="deleteAccountModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div id="deleteContent-data"></div>
        </div>
    </div>
</div>
