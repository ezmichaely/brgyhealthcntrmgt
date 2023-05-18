<!-- ADD -->
<div class="modal fade" id="addModalImmunization" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content ">
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="AddImmunizationForm">
                <div class="modal-header">
                    <h5 class="modal-title" id="addModalLabel">
                        ADD NEW Immunization
                    </h5>
                    <button id="ModalCloseButtonAddImmunizationOne" type="button" class="btn-close btn-close-white"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- form alert -->
                    <ul id="alertAddImmunizationSuccess" role="alert"
                        class="addimmunization d-none alert alert-success fw-bold fs-7 py-2 px-4">
                        <li class="addimmunization d-none" id="succMsg"></li>
                    </ul>

                    <ul id="alertAddImmunizationError" role="alert"
                        class="addimmunization d-none alert alert-danger fw-bold fs-7 py-2 px-4 ">
                        <li id="errAll" class="addimmunization d-none"></li>
                        <li id="errDate" class="addimmunization d-none"></li>
                        <li id="errTemp" class="addimmunization d-none"></li>
                        <li id="errRR" class="addimmunization d-none"></li>
                        <li id="errHR" class="addimmunization d-none"></li>
                        <li id="errBP" class="addimmunization d-none"></li>
                        <li id="errHeight" class="addimmunization d-none"></li>
                        <li id="errWeight" class="addimmunization d-none"></li>
                        <li id="errVaccineType" class="addimmunization d-none"></li>
                        <li id="errVaccineName" class="addimmunization d-none"></li>
                    </ul>

                    <div class="form-row d-flex flex-row justify-content-between align-items-center">
                        <div class="form-group w-100">
                            <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                                Patient ID <span class="text-danger">*</span></label>
                            <input type="text" name="patient_id" class="addimmunization form-control"
                                value="<?php echo $patient_id; ?>" readonly />
                        </div>
                    </div>

                    <div class="form-row d-flex flex-row justify-content-between align-items-center mt-2">
                        <div class="form-group w-50 me-1">
                            <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                                immunization date <span class="text-danger">*</span></label>
                            <input type="date" id="immunization_date" name="immunization_date"
                                class="addimmunization form-control" />
                        </div>

                        <div class="form-group w-50 ms-1">
                            <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                                temperature<span class="text-danger">*</span> </label>
                            <input type="text" id="immunization_temperature" name="immunization_temperature"
                                class="addimmunization form-control" />
                        </div>
                    </div>

                    <div class="form-row d-flex flex-row justify-content-between align-items-end mt-2">
                        <div class="form-group w-50">
                            <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">

                                <span class="d-none d-md-block d-lg-block">respiratory&nbsp;rate</span>
                                <span class="d-block d-sm-none">rr</span>
                                <span class="d-none d-sm-block d-md-none">rr</span>
                                <span class="text-danger">*</span></label>
                            <input type="text" id="immunization_rr" name="immunization_rr"
                                class="addimmunization form-control" />
                        </div>
                        <div class="form-group w-50 mx-2">
                            <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                                heart&nbsp;rate<span class="text-danger">*</span>
                            </label>
                            <input type="text" id="immunization_hr" name="immunization_hr"
                                class="addimmunization form-control" />
                        </div>
                        <div class="form-group w-50">
                            <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                                <span class="d-none d-md-block d-lg-block">blood&nbsp;pressure</span>
                                <span class="d-block d-sm-none">bp</span>
                                <span class="d-none d-sm-block d-md-none">bp</span>
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" id="immunization_bp" name="immunization_bp"
                                class="addimmunization form-control" />
                        </div>
                    </div>

                    <div class="form-row d-flex flex-row justify-content-between align-items-center mt-2">
                        <div class="form-group w-50 me-1">
                            <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                                weight <span class="text-danger">*</span></label>
                            <input type="text" id="immunization_weight" name="immunization_weight"
                                class="addimmunization form-control" />
                        </div>
                        <div class="form-group w-50 ms-1">
                            <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                                height <span class="text-danger">*</span></label>
                            <input type="text" id="immunization_height" name="immunization_height"
                                class="addimmunization form-control" />
                        </div>
                    </div>

                    <div class="form-row d-flex flex-row justify-content-between align-items-center mt-2">
                        <div class="form-group w-50 me-1">
                            <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                                vaccine type <span class="text-danger">*</span></label>
                            <input type="text" id="immunization_vaccinetype" name="immunization_vaccinetype"
                                class="addimmunization form-control" />
                        </div>
                        <div class="form-group w-50 ms-1">
                            <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                                vaccine name <span class="text-danger">*</span></label>
                            <input type="text" id="immunization_vaccinename" name="immunization_vaccinename"
                                class="addimmunization form-control" />
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button id="ModalCloseButtonAddImmunizationTwo" type="button" class="close  btn btn-secondary"
                        data-bs-dismiss="modal">
                        <i class="fas fa-times"></i>
                        <span class="ms-1">CLOSE</span>
                    </button>

                    <button type="submit" name="AddImmunization" id="AddImmunization" class="btn btn-success">
                        <i class="fas fa-save"></i>
                        <span class="ms-1">SAVE</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- EDIT -->
<div class="modal fade" id="editImmunizationModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div id="editImmunization-data"></div>
        </div>
    </div>
</div>


<!-- DELETE -->
<div class="modal fade" id="deleteImmunizationModal" tabindex="-1" aria-labelledby="deleteModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div id="deleteImmunization-data"></div>
        </div>
    </div>
</div>
