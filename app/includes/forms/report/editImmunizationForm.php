<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="EditImmunizationForm">
    <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel">
            Edit Immunization
        </h5>
        <button id="ModalCloseButtonEditImmunizationOne" type="button" class="btn-close btn-close-white"
            data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <!-- form alert -->
        <ul id="alertEditImmunizationSuccess" role="alert"
            class="editimmunization d-none alert alert-success fw-bold fs-7 py-2 px-4">
            <li class="editimmunization d-none" id="succMsg"></li>
        </ul>

        <ul id="alertEditImmunizationError" role="alert"
            class="editimmunization d-none alert alert-danger fw-bold fs-7 py-2 px-4 ">
            <li id="errAll" class="editimmunization d-none"></li>
            <li id="errDate" class="editimmunization d-none"></li>
            <li id="errTemp" class="editimmunization d-none"></li>
            <li id="errRR" class="editimmunization d-none"></li>
            <li id="errHR" class="editimmunization d-none"></li>
            <li id="errBP" class="editimmunization d-none"></li>
            <li id="errHeight" class="editimmunization d-none"></li>
            <li id="errWeight" class="editimmunization d-none"></li>
            <li id="errVaccineType" class="editimmunization d-none"></li>
            <li id="errVaccineName" class="editimmunization d-none"></li>
        </ul>

        <div class="form-row d-flex flex-row justify-content-between align-items-center">
            <div class="form-group w-50 me-1">
                <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                    IMMUNIZATION ID <span class="text-danger">*</span></label>
                <input type="text" name="immunization_id" class="editimmunization form-control"
                    value="<?php echo $immu_id; ?>" readonly />
            </div>

            <div class="form-group w-50 ms-1">
                <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                    Patient ID <span class="text-danger">*</span></label>
                <input type="text" name="patient_id" class="editimmunization form-control" value="<?php echo $p_id; ?>"
                    readonly />
            </div>
        </div>

        <div class="form-row d-flex flex-row justify-content-between align-items-center mt-2">
            <div class="form-group w-50 me-1">
                <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                    immunization date <span class="text-danger">*</span></label>
                <input type="date" id="immunization_date" name="immunization_date" class="editimmunization form-control"
                    value="<?php echo $immu_date; ?>" />
            </div>

            <div class="form-group w-50 ms-1">
                <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                    temperature<span class="text-danger">*</span> </label>
                <input type="text" id="immunization_temperature" name="immunization_temperature"
                    class="editimmunization form-control" value="<?php echo $immu_temp; ?>" />
            </div>
        </div>

        <div class="form-row d-flex flex-row justify-content-between align-items-end mt-2">
            <div class="form-group w-50">
                <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                    <span class="d-none d-md-block d-lg-block">respiratory&nbsp;rate</span>
                    <span class="d-block d-sm-none">rr</span>
                    <span class="d-none d-sm-block d-md-none">rr</span>
                    <span class="text-danger">*</span></label>
                <input type="text" id="immunization_rr" name="immunization_rr" class="editimmunization form-control"
                    value="<?php echo $immu_rr; ?>" />
            </div>
            <div class="form-group w-50 mx-2">
                <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                    heart&nbsp;rate<span class="text-danger">*</span>
                </label>
                <input type="text" id="immunization_hr" name="immunization_hr" class="editimmunization form-control"
                    value="<?php echo $immu_hr; ?>" />
            </div>
            <div class="form-group w-50">
                <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                    <span class="d-none d-md-block d-lg-block">blood&nbsp;pressure</span>
                    <span class="d-block d-sm-none">bp</span>
                    <span class="d-none d-sm-block d-md-none">bp</span>
                    <span class="text-danger">*</span>
                </label>
                <input type="text" id="immunization_bp" name="immunization_bp" class="editimmunization form-control"
                    value="<?php echo $immu_bp; ?>" />
            </div>
        </div>

        <div class="form-row d-flex flex-row justify-content-between align-items-center mt-2">
            <div class="form-group w-50 me-1">
                <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                    weight <span class="text-danger">*</span></label>
                <input type="text" id="immunization_weight" name="immunization_weight"
                    class="editimmunization form-control" value="<?php echo $immu_weight; ?>" />
            </div>
            <div class="form-group w-50 ms-1">
                <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                    height <span class="text-danger">*</span></label>
                <input type="text" id="immunization_height" name="immunization_height"
                    class="editimmunization form-control" value="<?php echo $immu_height; ?>" />
            </div>
        </div>

        <div class="form-row d-flex flex-row justify-content-between align-items-center mt-2">
            <div class="form-group w-50 me-1">
                <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                    vaccine type <span class="text-danger">*</span></label>
                <input type="text" id="immunization_vaccinetype" name="immunization_vaccinetype"
                    class="editimmunization form-control" value="<?php echo $immu_vaccinetype; ?>" />
            </div>
            <div class="form-group w-50 ms-1">
                <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                    vaccine name <span class="text-danger">*</span></label>
                <input type="text" id="immunization_vaccinename" name="immunization_vaccinename"
                    class="editimmunization form-control" value="<?php echo $immu_vaccinename; ?>" />
            </div>
        </div>
    </div>

    <div class="modal-footer">
        <button id="ModalCloseButtonEditImmunizationTwo" type="button" class="close  btn btn-secondary"
            data-bs-dismiss="modal">
            <i class="fas fa-times"></i>
            <span class="ms-1">CLOSE</span>
        </button>

        <button type="submit" name="EditImmunization" id="EditImmunization" class="btn btn-success">
            <i class="fas fa-save"></i>
            <span class="ms-1">SAVE</span>
        </button>
    </div>
</form>
