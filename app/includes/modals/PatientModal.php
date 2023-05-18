<?php 
    $sqlc = "SELECT * FROM `category` ORDER BY category_type ASC";
    $stmtc = mysqli_query($conn, $sqlc);

    $sqlcs = "SELECT * FROM `civilstatus` ORDER BY civilstatus_id ASC";
    $stmtcs = mysqli_query($conn, $sqlcs);

    $sqlPatients = 'SELECT * FROM `patients` 
                INNER JOIN `category` ON patients.patient_category = category.category_id
                INNER JOIN `civilstatus` ON patients.patient_civilstatus = civilstatus.civilstatus_id';
?>


<!-- ADD PATIENT -->
<div class="modal fade" id="addPatientModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="AddPatientForm">
                <div class="modal-header">
                    <h5 class="modal-title" id="addModalLabel">
                        ADD NEW patient
                    </h5>
                    <button id="ModalCloseButtonAddPatientOne" type="button" class="btn-close btn-close-white"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- form alert -->
                    <ul id="alertAddPatientSuccess" class="addpatient d-none alert alert-success fw-bold fs-7 py-2 px-4"
                        role="alert">
                        <li class="addpatient d-none" id="succMsg"></li>
                    </ul>

                    <ul id="alertAddPatientError" class="addpatient d-none alert alert-danger fw-bold fs-7 py-2 px-4 "
                        role="alert">
                        <li class="addpatient d-none" id="errAll"></li>
                        <li class="addpatient d-none" id="errCategory"></li>
                        <li class="addpatient d-none" id="errFirstname"></li>
                        <li class="addpatient d-none" id="errLastname"></li>
                        <li class="addpatient d-none" id="errAge"></li>
                        <li class="addpatient d-none" id="errDob"></li>
                        <li class="addpatient d-none" id="errGender"></li>
                        <li class="addpatient d-none" id="errContactno"></li>
                        <li class="addpatient d-none" id="errWeight"></li>
                        <li class="addpatient d-none" id="errHeight"></li>
                        <li class="addpatient d-none" id="errAddress"></li>
                        <li class="addpatient d-none" id="errPob"></li>
                        <li class="addpatient d-none" id="errNationality"></li>
                        <li class="addpatient d-none" id="errGuardianspouse"></li>
                        <li class="addpatient d-none" id="errGuardianspouseno"></li>
                    </ul>

                    <!-- category -->
                    <div class="form-group">
                        <label for="category" class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                            patient category <span class="text-danger">*</span>
                        </label>
                        <select id="patient_category" name="patient_category"
                            class="addpatient form-select border border-primary" aria-label="Default select example">
                            <?php 
                                while($rowc = mysqli_fetch_array($stmtc)) :; 
                                    $category_id = $rowc['category_id'];
                                    $category_type = $rowc['category_type'];
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
                            <input type="text" id="patient_firstname" name="patient_firstname"
                                class="addpatient form-control"
                                onkeypress="if (!isNaN(this.value + String.fromCharCode(event.keyCode))) return false;" />
                        </div>
                        <div class="form-group w-50 ms-1">
                            <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                                middle name </label>
                            <input type="text" id="patient_middlename" name="patient_middlename"
                                class="addpatient form-control"
                                onkeypress="if (!isNaN(this.value + String.fromCharCode(event.keyCode))) return false;" />
                        </div>
                    </div>

                    <div class="form-row d-flex flex-row justify-content-between align-items-center mt-2">
                        <div class="form-group w-50 me-1">
                            <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                                last name <span class="text-danger">*</span></label>
                            <input type="text" id="patient_lastname" name="patient_lastname"
                                class="addpatient form-control"
                                onkeypress="if (!isNaN(this.value + String.fromCharCode(event.keyCode))) return false;" />
                        </div>
                        <div class="form-group w-50 ms-1">
                            <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                                suffix </label>
                            <input type="text" id="patient_suffix" name="patient_suffix" class="addpatient form-control"
                                onkeypress="if (!isNaN(this.value + String.fromCharCode(event.keyCode))) return false;" />
                        </div>
                    </div>

                    <div class="form-row d-flex flex-row justify-content-between align-items-center mt-2">
                        <div class="form-group w-50 me-1">
                            <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                                age <span class="text-danger">*</span></label>
                            <input type="text" id="patient_age" name="patient_age" class="addpatient form-control" />
                        </div>

                        <div class="form-group w-50 ms-1">
                            <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                                birth date <span class="text-danger">*</span></label>
                            <input type="date" id="patient_dob" name="patient_dob" min="1890-01-01"
                                class="addpatient form-control" />
                        </div>
                    </div>

                    <div class="form-row d-flex flex-row justify-content-between align-items-center mt-2">
                        <div class="form-group w-50 me-1">
                            <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                                gender <span class="text-danger">*</span></label>
                            <select id="patient_gender" name="patient_gender"
                                class="addpatient form-select border border-primary"
                                aria-label="Default select example">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>

                        <div class="form-group w-50 ms-1">
                            <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                                contact number </label>
                            <input type="number" id="patient_contactno" name="patient_contactno"
                                class="addpatient form-control" />
                        </div>
                    </div>

                    <div class="form-row d-flex flex-row justify-content-between align-items-center mt-2">
                        <div class="form-group w-50 me-1">
                            <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                                weight <span class="text-danger">*</span></label>
                            <input type="text" id="patient_weight" name="patient_weight"
                                class="addpatient form-control" />
                        </div>

                        <div class="form-group w-50 ms-1">
                            <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                                height <span class="text-danger">*</span></label>
                            <input type="text" id="patient_height" name="patient_height"
                                class="addpatient form-control" />
                        </div>
                    </div>

                    <div class="form-row d-flex flex-row justify-content-between align-items-center mt-2">
                        <div class="form-group w-50 me-1">
                            <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                                address <span class="text-danger">*</span></label>
                            <textarea id="patient_address" name="patient_address"
                                class="addpatient form-control border-primary"></textarea>
                        </div>
                        <div class="form-group w-50 ms-1">
                            <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                                place of birth <span class="text-danger">*</span></label>
                            <textarea id="patient_pob" name="patient_pob"
                                class="addpatient form-control border-primary"></textarea>
                        </div>
                    </div>

                    <div class="form-row d-flex flex-row justify-content-between align-items-center mt-2">
                        <div class="form-group w-50 me-1">
                            <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                                Nationality <span class="text-danger">*</span></label>
                            <input type="text" id="patient_nationality" name="patient_nationality" min="1890-01-01"
                                class="addpatient form-control" />
                        </div>

                        <div class="form-group w-50 ms-1">
                            <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                                Civil Status <span class="text-danger">*</span> </label>
                            <select id="patient_civilstatus" name="patient_civilstatus"
                                class="addpatient form-select border border-primary"
                                aria-label="Default select example">

                                <?php 
                                    while($rowcs = mysqli_fetch_array($stmtcs)) :; 
                                        $civilstatus_id = $rowcs['civilstatus_id'];
                                        $civilstatus_name = $rowcs['civilstatus_name'];
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
                                GUARDIAN / Spouse
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" id="patient_guardianspouse" name="patient_guardianspouse"
                                class="addpatient form-control" />
                        </div>

                        <div class="form-group w-50 ms-1">
                            <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                                Guardian / Spouse Contact Number <span class="text-danger">*</span></label>
                            <input type="number" id="patient_guardianspouseno" name="patient_guardianspouseno"
                                class="addpatient form-control" />
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button id="ModalCloseButtonAddPatientTwo" type="button" class="close btn btn-danger"
                        data-bs-dismiss="modal">
                        <i class="fas fa-times"></i>
                        <span class="ms-1">CLOSE</span>
                    </button>

                    <button type="submit" name="AddPatient" id="AddPatient" class="btn btn-primary">
                        <i class="fas fa-save"></i>
                        <span class="ms-1">SAVE</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!--EDIT PATIENT MODAL-->
<div class="modal fade" id="editPatientModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div id="content-data"></div>
        </div>
    </div>
</div>
