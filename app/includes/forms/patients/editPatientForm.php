<form method="POST" data-id="<?php echo $patient_id; ?>" id="EditPatientForm">

    <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel">
            EDIT PATIENT
        </h5>
        <button id="ModalCloseButtonEditPatientOne" type="button" class="btn-close btn-close-white me-2"
            data-bs-dismiss="modal" aria-label="Close"></button>
    </div>

    <div class="modal-body">
        <!-- form alert -->
        <ul id="alertEditPatientSuccess" class="editpatient d-none alert alert-success fw-bold fs-7 py-2 px-4"
            role="alert">
            <li class="editpatient d-none" id="succMsg"></li>
        </ul>

        <ul id="alertEditPatientError" class="editpatient d-none alert alert-danger fw-bold fs-7 py-2 px-4 "
            role="alert">
            <li class="editpatient d-none" id="errCategory"></li>
            <li class="editpatient d-none" id="errAll"></li>
            <li class="editpatient d-none" id="errFirstname"></li>
            <li class="editpatient d-none" id="errLastname"></li>
            <li class="editpatient d-none" id="errAge"></li>
            <li class="editpatient d-none" id="errDob"></li>
            <li class="editpatient d-none" id="errGender"></li>
            <li class="editpatient d-none" id="errContactno"></li>
            <li class="editpatient d-none" id="errWeight"></li>
            <li class="editpatient d-none" id="errHeight"></li>
            <li class="editpatient d-none" id="errAddress"></li>
            <li class="editpatient d-none" id="errPob"></li>
            <li class="editpatient d-none" id="errNationality"></li>
            <li class="editpatient d-none" id="errGuardianspouse"></li>
            <li class="editpatient d-none" id="errGuardianspouseno"></li>
        </ul>

        <div class="form-group d-none">
            <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                patient id <span class="text-danger">*</span>
            </label>
            <input type="text" id="patient_id" name="patient_id" class="editpatient form-control"
                value="<?php echo $patient_id ?>" />
        </div>

        <!-- category -->
        <div class="form-group">
            <label for="category" class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                patient category <span class="text-danger">*</span>
            </label>
            <select id="patient_category" name="patient_category" class="editpatient form-select border border-primary"
                aria-label="Default select example">
                <option selected hidden value="<?php echo $pcategory_id ?>"><?php echo $pcategory_type ?>
                </option>

                <?php 
                    while($rowcat = mysqli_fetch_array($stmtcat)) :; 
                        $category_id = $rowcat['category_id'];
                        $category_type = $rowcat['category_type'];
                ?>

                <option value="<?php echo $category_id; ?>">
                    <?php echo $category_type; ?>
                </option>
                <?php endwhile; ?>
            </select>
        </div>

        <div class="form-row d-flex flex-row justify-content-between align-items-center mt-2">
            <div class="form-group w-50 me-1">
                <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                    first name <span class="text-danger">*</span></label>
                <input type="text" id="patient_firstname" name="patient_firstname" class="editpatient form-control"
                    onkeypress="if (!isNaN(this.value + String.fromCharCode(event.keyCode))) return false;"
                    value="<?php echo $patient_firstname ?>" />
            </div>
            <div class="form-group w-50 ms-1">
                <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                    middle name </label>
                <input type="text" id="patient_middlename" name="patient_middlename" class="editpatient form-control"
                    onkeypress="if (!isNaN(this.value + String.fromCharCode(event.keyCode))) return false;"
                    value="<?php echo $patient_middlename ?>" />
            </div>
        </div>

        <div class="form-row d-flex flex-row justify-content-between align-items-center mt-2">
            <div class="form-group w-50 me-1">
                <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                    last name <span class="text-danger">*</span></label>
                <input type="text" id="patient_lastname" name="patient_lastname" class="editpatient form-control"
                    onkeypress="if (!isNaN(this.value + String.fromCharCode(event.keyCode))) return false;"
                    value="<?php echo $patient_lastname ?>" />
            </div>
            <div class="form-group w-50 ms-1">
                <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                    suffix </label>
                <input type="text" id="patient_suffix" name="patient_suffix" class="editpatient form-control"
                    onkeypress="if (!isNaN(this.value + String.fromCharCode(event.keyCode))) return false;"
                    value="<?php echo $patient_suffix ?>" />
            </div>
        </div>

        <div class="form-row d-flex flex-row justify-content-between align-items-center mt-2">
            <div class="form-group w-50 me-1">
                <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                    age <span class="text-danger">*</span></label>
                <input type="text" id="patient_age" name="patient_age" class="editpatient form-control"
                    value="<?php echo $patient_age ?>" />
            </div>

            <div class="form-group w-50 ms-1">
                <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                    birth date <span class="text-danger">*</span></label>
                <input type="date" id="patient_dob" name="patient_dob" min="1890-01-01" class="editpatient form-control"
                    value="<?php echo $patient_dob ?>" />
            </div>
        </div>

        <div class="form-row d-flex flex-row justify-content-between align-items-center mt-2">
            <div class="form-group w-50 me-1">
                <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                    gender <span class="text-danger">*</span></label>
                <select id="patient_gender" name="patient_gender" class="editpatient form-select border border-primary"
                    aria-label="Default select example">
                    <option selected hidden value="<?php echo $patient_gender ?>">
                        <?php echo $patient_gender ?></option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>

            <div class="form-group w-50 ms-1">
                <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                    contact number </label>
                <input type="number" id="patient_contactno" name="patient_contactno" class="editpatient form-control"
                    value="<?php echo $patient_contactno ?>" />
            </div>
        </div>

        <div class="form-row d-flex flex-row justify-content-between align-items-center mt-2">
            <div class="form-group w-50 me-1">
                <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                    weight <span class="text-danger">*</span></label>
                <input type="text" id="patient_weight" name="patient_weight" class="editpatient form-control"
                    value="<?php echo $patient_weight ?>" />
            </div>

            <div class="form-group w-50 ms-1">
                <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                    height <span class="text-danger">*</span></label>
                <input type="text" id="patient_height" name="patient_height" class="editpatient form-control"
                    value="<?php echo $patient_height ?>" />
            </div>
        </div>

        <div class="form-row d-flex flex-row justify-content-between align-items-center mt-2">
            <div class="form-group w-50 me-1">
                <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                    address <span class="text-danger">*</span></label>
                <textarea id="patient_address" name="patient_address"
                    class="editpatient form-control border-primary"><?php echo $patient_address ?></textarea>
            </div>
            <div class="form-group w-50 ms-1">
                <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                    place of birth <span class="text-danger">*</span></label>
                <textarea id="patient_pob" name="patient_pob"
                    class="editpatient form-control border-primary"><?php echo $patient_pob ?></textarea>
            </div>
        </div>

        <div class="form-row d-flex flex-row justify-content-between align-items-center mt-2">
            <div class="form-group w-50 me-1">
                <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                    Nationality <span class="text-danger">*</span></label>
                <input type="text" id="patient_nationality" name="patient_nationality" class="editpatient form-control"
                    value="<?php echo $patient_nationality ?>" />
            </div>

            <div class="form-group w-50 ms-1">
                <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                    Civil Status </label>
                <select id="patient_civilstatus" name="patient_civilstatus"
                    class="editpatient form-select border border-primary" aria-label="Default select example">
                    <option selected hidden value="<?php echo $patient_civilstatus ?>">
                        <?php echo $pcivilstatus_name ?></option>

                    <?php 
                        while($rowcivilstatus = mysqli_fetch_array($stmtcivilstatus)) :; 
                            $civilstatus_id = $rowcivilstatus['civilstatus_id'];
                            $civilstatus_name = $rowcivilstatus['civilstatus_name'];
                    ?>

                    <option value="<?php echo $civilstatus_id; ?>">
                        <?php echo $civilstatus_name; ?>
                    </option>
                    <?php endwhile; ?>
                </select>
            </div>
        </div>

        <div class="form-row d-flex flex-row justify-content-between align-items-center mt-2">
            <div class="form-group w-50 me-1">
                <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                    GUARDIAN / SPOUSE <span class="text-danger">*</span></label>
                <input type="text" id="patient_guardianspouse" name="patient_guardianspouse"
                    class="editpatient form-control" value="<?php echo $patient_guardianspouse ?>" />
            </div>

            <div class="form-group w-50 ms-1">
                <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                    Guardian / spouse Contact Number <span class="text-danger">*</span></label>
                <input type="text" id="patient_guardianspouseno" name="patient_guardianspouseno"
                    class="editpatient form-control" value="<?php echo $patient_guardianspouseno ?>" />
            </div>
        </div>
    </div>

    <div class="modal-footer">
        <button id="ModalCloseButtonEditPatientTwo" type="button" class="close btn btn-danger" data-bs-dismiss="modal">
            <i class="fas fa-times"></i>
            <span class="ms-1">CLOSE</span>
        </button>

        <button type="submit" id="EditPatient" name="EditPatient" class="btn btn-primary"
            data-id="<?php echo $patient_id; ?>">
            <i class="fas fa-save"></i>
            <span class="ms-1">SAVE</span>
        </button>
    </div>

</form>
