<!-- ADD -->
<div class="modal fade" id="addModalConsultation" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content ">
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="AddConsultationForm">
                <div class="modal-header">
                    <h5 class="modal-title" id="addModalLabel">
                        ADD NEW consultation
                    </h5>
                    <button id="ModalCloseButtonAddConsultationOne" type="button" class="btn-close btn-close-white"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- form alert -->
                    <ul id="alertAddConsultationSuccess" role="alert"
                        class="addconsultation d-none alert alert-success fw-bold fs-7 py-2 px-4">
                        <li class="d-none addconsultation" id="succMsg"></li>
                    </ul>

                    <ul id="alertAddConsultationError" role="alert"
                        class="addconsultation d-none alert alert-danger fw-bold fs-7 py-2 px-4 ">
                        <li id="errAll" class="addconsultation d-none"></li>
                        <li id="errDate" class="addconsultation d-none"></li>
                        <li id="errTemp" class="addconsultation d-none"></li>
                        <li id="errRR" class="addconsultation d-none"></li>
                        <li id="errHR" class="addconsultation d-none"></li>
                        <li id="errBP" class="addconsultation d-none"></li>
                        <li id="errSymp" class="addconsultation d-none"></li>
                        <li id="errFind" class="addconsultation d-none"></li>
                        <li id="errMed" class="addconsultation d-none"></li>
                    </ul>

                    <div class="form-row d-flex flex-row justify-content-between align-items-center">
                        <div class="form-group w-100">
                            <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                                Patient ID <span class="text-danger">*</span></label>
                            <input type="text" id="patient_id" name="patient_id" class="addconsultation form-control"
                                value="<?php echo $patient_id; ?>" readonly />
                        </div>
                    </div>

                    <div class="form-row d-flex flex-row justify-content-between align-items-center mt-2">
                        <div class="form-group w-50 me-1">
                            <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                                consultation date <span class="text-danger">*</span></label>
                            <input type="date" id="consultation_date" name="consultation_date"
                                class="addconsultation form-control" />
                        </div>

                        <div class="form-group w-50 ms-1">
                            <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                                temperature<span class="text-danger">*</span> </label>
                            <input type="text" id="consultation_temperature" name="consultation_temperature"
                                class="addconsultation form-control" />
                        </div>
                    </div>

                    <div class="form-row d-flex flex-row justify-content-between align-items-end mt-2">
                        <div class="form-group w-50">
                            <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">

                                <span class="d-none d-md-block d-lg-block">respiratory&nbsp;rate</span>
                                <span class="d-block d-sm-none">rr</span>
                                <span class="d-none d-sm-block d-md-none">rr</span>
                                <span class="text-danger">*</span></label>
                            <input type="text" id="consultation_rr" name="consultation_rr"
                                class="addconsultation form-control" />
                        </div>
                        <div class="form-group w-50 mx-2">
                            <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                                heart&nbsp;rate<span class="text-danger">*</span>
                            </label>
                            <input type="text" id="consultation_hr" name="consultation_hr"
                                class="addconsultation form-control" />
                        </div>
                        <div class="form-group w-50">
                            <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                                <span class="d-none d-md-block d-lg-block">blood&nbsp;pressure</span>
                                <span class="d-block d-sm-none">bp</span>
                                <span class="d-none d-sm-block d-md-none">bp</span>
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" id="consultation_bp" name="consultation_bp"
                                class="addconsultation form-control" />
                        </div>
                    </div>

                    <div class="form-row d-flex flex-row justify-content-between align-items-center mt-2">
                        <div class="form-group w-100 ">
                            <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                                symptoms <span class="text-danger">*</span></label>
                            <textarea id="consultation_symptoms" name="consultation_symptoms"
                                class="addconsultation form-control border-primary"></textarea>
                        </div>
                    </div>

                    <div class="form-row d-flex flex-row justify-content-between align-items-center mt-2">
                        <div class="form-group w-100 ">
                            <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                                findings <span class="text-danger">*</span></label>
                            <textarea id="consultation_findings" name="consultation_findings"
                                class="addconsultation form-control border-primary"></textarea>
                        </div>
                    </div>

                    <div class="form-row d-flex flex-row justify-content-between align-items-center mt-2">
                        <div class="form-group w-100 ">
                            <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                                medications <span class="text-danger">*</span></label>
                            <textarea id="consultation_medications" name="consultation_medications"
                                class="addconsultation form-control border-primary"></textarea>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button id="ModalCloseButtonAddConsultationTwo" type="button" class="close  btn btn-secondary"
                        data-bs-dismiss="modal">
                        <i class="fas fa-times"></i>
                        <span class="ms-1">CLOSE</span>
                    </button>

                    <button type="submit" name="AddConsultation" id="AddConsultation" class="btn btn-success">
                        <i class="fas fa-save"></i>
                        <span class="ms-1">SAVE</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- EDIT -->
<div class="modal fade" id="editConsultationModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div id="editConsultation-data"></div>
        </div>
    </div>
</div>


<!-- DELETE -->
<div class="modal fade" id="deleteConsultationModal" tabindex="-1" aria-labelledby="deleteModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div id="deleteConsultation-data"></div>
        </div>
    </div>
</div>
