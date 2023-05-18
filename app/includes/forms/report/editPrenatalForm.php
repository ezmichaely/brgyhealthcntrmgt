<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="EditPrenatalForm">
    <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel">
            Edit NEW Prenatal
        </h5>
        <button id="ModalCloseButtonEditPrenatalOne" type="button" class="btn-close btn-close-white"
            data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <!-- form alert -->
        <ul id="alertEditPrenatalSuccess" role="alert"
            class="editprenatal d-none alert alert-success fw-bold fs-7 py-2 px-4">
            <li class="editprenatal d-none" id="succMsg"></li>
        </ul>

        <ul id="alertEditPrenatalError" role="alert"
            class="editprenatal d-none alert alert-danger fw-bold fs-7 py-2 px-4 ">
            <li id="errAll" class="editprenatal d-none"></li>
            <li id="errDate" class="editprenatal d-none"></li>
            <li id="errTemp" class="editprenatal d-none"></li>
            <li id="errRR" class="editprenatal d-none"></li>
            <li id="errHR" class="editprenatal d-none"></li>
            <li id="errBP" class="editprenatal d-none"></li>
            <li id="errSL" class="editprenatal d-none"></li>
            <li id="errHemo" class="editprenatal d-none"></li>
            <li id="errHeight" class="editprenatal d-none"></li>
            <li id="errWeight" class="editprenatal d-none"></li>
            <li id="errDoseName" class="editprenatal d-none"></li>
            <li id="errDoseLevel" class="editprenatal d-none"></li>
            <li id="errMed" class="editprenatal d-none"></li>
        </ul>

        <div class="form-row d-flex flex-row justify-content-between align-items-center">
            <div class="form-group w-50 me-1">
                <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                    prenatal ID <span class="text-danger">*</span></label>
                <input type="text" name="prenatal_id" class="editprenatal form-control"
                    value="<?php echo $prenatal_id; ?>" readonly />
            </div>

            <div class="form-group w-50 ms-1">
                <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                    Patient ID <span class="text-danger">*</span></label>
                <input type="text" name="patient_id" class="editprenatal form-control"
                    value="<?php echo $patient_id; ?>" readonly />
            </div>
        </div>

        <div class="form-row d-flex flex-row justify-content-between align-items-center mt-2">
            <div class="form-group w-50 me-1">
                <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                    Prenatal date <span class="text-danger">*</span></label>
                <input type="date" id="prenatal_date" name="prenatal_date" class="editprenatal form-control"
                    value="<?php echo $prenatal_date; ?>" />
            </div>

            <div class="form-group w-50 ms-1">
                <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                    temperature<span class="text-danger">*</span> </label>
                <input type="text" id="prenatal_temperature" name="prenatal_temperature"
                    class="editprenatal form-control" value="<?php echo $prenatal_temp; ?>" />
            </div>
        </div>

        <div class="form-row d-flex flex-row justify-content-between align-items-end mt-2">
            <div class="form-group w-50">
                <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                    <span class="d-none d-md-block d-lg-block">respiratory&nbsp;rate</span>
                    <span class="d-block d-sm-none">rr</span>
                    <span class="d-none d-sm-block d-md-none">rr</span>
                    <span class="text-danger">*</span></label>
                <input type="text" id="prenatal_rr" name="prenatal_rr" class="editprenatal form-control"
                    value="<?php echo $prenatal_rr; ?>" />
            </div>
            <div class="form-group w-50 mx-2">
                <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                    heart&nbsp;rate<span class="text-danger">*</span>
                </label>
                <input type="text" id="prenatal_hr" name="prenatal_hr" class="editprenatal form-control"
                    value="<?php echo $prenatal_hr; ?>" />
            </div>
            <div class="form-group w-50">
                <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                    <span class="d-none d-md-block d-lg-block">blood&nbsp;pressure</span>
                    <span class="d-block d-sm-none">bp</span>
                    <span class="d-none d-sm-block d-md-none">bp</span>
                    <span class="text-danger">*</span>
                </label>
                <input type="text" id="prenatal_bp" name="prenatal_bp" class="editprenatal form-control"
                    value="<?php echo $prenatal_bp; ?>" />
            </div>
        </div>

        <div class="form-row d-flex flex-row justify-content-between align-items-center mt-2">
            <div class="form-group w-50 me-1">
                <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                    sugar level <span class="text-danger">*</span></label>
                <input type="text" id="prenatal_sugarlevel" name="prenatal_sugarlevel" class="editprenatal form-control"
                    value="<?php echo $prenatal_sugarlevel; ?>" />
            </div>
            <div class="form-group w-50 ms-1">
                <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                    hemoglobin <span class="text-danger">*</span></label>
                <input type="text" id="prenatal_hemoglobin" name="prenatal_hemoglobin" class="editprenatal form-control"
                    value="<?php echo $prenatal_hemoglobin; ?>" />
            </div>
        </div>

        <div class="form-row d-flex flex-row justify-content-between align-items-center mt-2">
            <div class="form-group w-50 me-1">
                <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                    weight <span class="text-danger">*</span></label>
                <input type="text" id="prenatal_weight" name="prenatal_weight" class="editprenatal form-control"
                    value="<?php echo $prenatal_weight; ?>" />
            </div>
            <div class="form-group w-50 ms-1">
                <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                    height <span class="text-danger">*</span></label>
                <input type="text" id="prenatal_height" name="prenatal_height" class="editprenatal form-control"
                    value="<?php echo $prenatal_height; ?>" />
            </div>
        </div>

        <div class="form-row d-flex flex-row justify-content-between align-items-center mt-2">
            <div class="form-group w-50 me-1">
                <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                    dose name <span class="text-danger">*</span></label>
                <input type="text" id="prenatal_dosename" name="prenatal_dosename" class="editprenatal form-control"
                    value="<?php echo $prenatal_dosename; ?>" />
            </div>
            <div class="form-group w-50 ms-1">
                <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                    dose level <span class="text-danger">*</span></label>
                <input type="text" id="prenatal_doselevel" name="prenatal_doselevel" class="editprenatal form-control"
                    value="<?php echo $prenatal_doselevel; ?>" />
            </div>
        </div>

        <div class="form-row d-flex flex-row justify-content-between align-items-center mt-2">
            <div class="form-group w-100 ">
                <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                    medications <span class="text-danger">*</span></label>
                <textarea id="prenatal_medications" name="prenatal_medications"
                    class="editprenatal form-control border-primary"><?php echo $prenatal_med; ?></textarea>
            </div>
        </div>
    </div>

    <div class="modal-footer">
        <button id="ModalCloseButtonEditPrenatalTwo" type="button" class="close  btn btn-secondary"
            data-bs-dismiss="modal">
            <i class="fas fa-times"></i>
            <span class="ms-1">CLOSE</span>
        </button>

        <button type="submit" name="EditPrenatal" id="EditPrenatal" class="btn btn-success">
            <i class="fas fa-save"></i>
            <span class="ms-1">SAVE</span>
        </button>
    </div>
</form>
