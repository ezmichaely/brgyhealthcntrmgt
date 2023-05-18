<form method="POST" data-id="<?php echo $c_id; ?>" id="EditConsultationForm">
    <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel">
            EDIT Consultation
        </h5>
        <button id="ModalCloseButtonEditConsultationOne" type="button" class="btn-close btn-close-white me-2"
            data-bs-dismiss="modal" aria-label="Close"></button>
    </div>

    <div class="modal-body">
        <!-- form alert -->
        <ul id="alertEditConsultationSuccess" class="editconsultation d-none alert alert-success fw-bold fs-7 py-2 px-4"
            role="alert">
            <li class="editconsultation d-none" id="succMsg"></li>
        </ul>

        <ul id="alertEditConsultationError" class="editconsultation d-none alert alert-danger fw-bold fs-7 py-2 px-4 "
            role="alert">
            <li class="editconsultation d-none" id="errAll"></li>
            <li class="editconsultation d-none" id="errDate"></li>
            <li class="editconsultation d-none" id="errTemp"></li>
            <li class="editconsultation d-none" id="errRR"></li>
            <li class="editconsultation d-none" id="errHR"></li>
            <li class="editconsultation d-none" id="errBP"></li>
            <li class="editconsultation d-none" id="errSymp"></li>
            <li class="editconsultation d-none" id="errFind"></li>
            <li class="editconsultation d-none" id="errMed"></li>
        </ul>

        <div class="form-row d-flex flex-row justify-content-between align-items-center mt-2">
            <div class="form-group w-50 me-1">
                <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                    Consultation ID <span class="text-danger">*</span></label>
                <input type="text" id="consultation_id" name="consultation_id" class="form-control"
                    value="<?php echo $c_id; ?>" readonly />
            </div>

            <div class="form-group w-50 ms-1">
                <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                    Patient ID <span class="text-danger">*</span></label>
                <input type="text" id="patient_id" name="patient_id" class="form-control" value="<?php echo $p_id; ?>"
                    readonly />
            </div>
        </div>

        <div class="form-row d-flex flex-row justify-content-between align-items-center mt-2">
            <div class="form-group w-50 me-1">
                <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                    consultation date <span class="text-danger">*</span></label>
                <input type="date" id="consultation_date" name="consultation_date" class="editconsultation form-control"
                    value="<?php echo $c_date; ?>" />
            </div>

            <div class="form-group w-50 ms-1">
                <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                    temperature<span class="text-danger">*</span> </label>
                <input type="text" id="consultation_temperature" name="consultation_temperature"
                    class="editconsultation form-control" value="<?php echo $c_temp; ?>" />
            </div>
        </div>

        <div class="form-row d-flex flex-row justify-content-between align-items-end mt-2">
            <div class="form-group w-50">
                <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                    <span class="d-none d-md-block d-lg-block">respiratory&nbsp;rate</span>
                    <span class="d-block d-sm-none">rr</span>
                    <span class="d-none d-sm-block d-md-none">rr</span>
                    <span class="text-danger">*</span></label>
                <input type="text" id="consultation_rr" name="consultation_rr" class="editconsultation form-control"
                    value="<?php echo $c_rr; ?>" />
            </div>
            <div class="form-group w-50 mx-2">
                <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                    heart&nbsp;rate<span class="text-danger">*</span>
                </label>
                <input type="text" id="consultation_hr" name="consultation_hr" class="editconsultation form-control"
                    value="<?php echo $c_hr; ?>" />
            </div>
            <div class="form-group w-50">
                <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                    <span class="d-none d-md-block d-lg-block">blood&nbsp;pressure</span>
                    <span class="d-block d-sm-none">bp</span>
                    <span class="d-none d-sm-block d-md-none">bp</span>
                    <span class="text-danger">*</span>
                </label>
                <input type="text" id="consultation_bp" name="consultation_bp" class="editconsultation form-control"
                    value="<?php echo $c_bp; ?>" />
            </div>
        </div>

        <div class="form-row d-flex flex-row justify-content-between align-items-center mt-2">
            <div class="form-group w-100 ">
                <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                    symptoms <span class="text-danger">*</span></label>
                <textarea id="consultation_symptoms" name="consultation_symptoms"
                    class="editconsultation form-control border-primary"><?php echo $c_symp; ?></textarea>
            </div>
        </div>

        <div class="form-row d-flex flex-row justify-content-between align-items-center mt-2">
            <div class="form-group w-100 ">
                <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                    findings <span class="text-danger">*</span></label>
                <textarea id="consultation_findings" name="consultation_findings"
                    class="editconsultation form-control border-primary"><?php echo $c_find; ?></textarea>
            </div>
        </div>

        <div class="form-row d-flex flex-row justify-content-between align-items-center mt-2">
            <div class="form-group w-100 ">
                <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                    medications <span class="text-danger">*</span></label>
                <textarea id="consultation_medications" name="consultation_medications"
                    class="editconsultation form-control border-primary"><?php echo $c_med; ?></textarea>
            </div>
        </div>



    </div>

    <div class="modal-footer">
        <button id="ModalCloseButtonEditConsultationTwo" type="button" class="close btn btn-secondary"
            data-bs-dismiss="modal">
            <i class="fas fa-times"></i>
            <span class="ms-1">CLOSE</span>
        </button>

        <button type="submit" id="EditConsultation" name="EditConsultation" class="btn btn-success"
            data-id="<?php echo $c_id; ?>">
            <i class="fas fa-save"></i>
            <span class="ms-1">SAVE</span>
        </button>
    </div>
</form>
