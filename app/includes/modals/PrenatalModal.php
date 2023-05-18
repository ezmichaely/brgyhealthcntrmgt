<!-- ADD -->
<div class="modal fade" id="addModalPrenatal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="AddPrenatalForm">
                <div class="modal-header">
                    <h5 class="modal-title" id="addModalLabel">
                        ADD NEW Prenatal
                    </h5>
                    <button id="ModalCloseButtonAddPrenatalOne" type="button" class="btn-close btn-close-white"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- form alert -->
                    <ul id="alertAddPrenatalSuccess" role="alert"
                        class="addprenatal d-none alert alert-success fw-bold fs-7 py-2 px-4">
                        <li class="addprenatal d-none" id="succMsg"></li>
                    </ul>

                    <ul id="alertAddPrenatalError" role="alert"
                        class="addprenatal d-none alert alert-danger fw-bold fs-7 py-2 px-4 ">
                        <li id="errAll" class="addprenatal d-none"></li>
                        <li id="errDate" class="addprenatal d-none"></li>
                        <li id="errTemp" class="addprenatal d-none"></li>
                        <li id="errRR" class="addprenatal d-none"></li>
                        <li id="errHR" class="addprenatal d-none"></li>
                        <li id="errBP" class="addprenatal d-none"></li>
                        <li id="errSL" class="addprenatal d-none"></li>
                        <li id="errHemo" class="addprenatal d-none"></li>
                        <li id="errHeight" class="addprenatal d-none"></li>
                        <li id="errWeight" class="addprenatal d-none"></li>
                        <li id="errDoseName" class="addprenatal d-none"></li>
                        <li id="errDoseLevel" class="addprenatal d-none"></li>
                        <li id="errMedications" class="addprenatal d-none"></li>
                    </ul>

                    <div class="form-row d-flex flex-row justify-content-between align-items-center">
                        <div class="form-group w-100">
                            <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                                Patient ID <span class="text-danger">*</span></label>
                            <input type="text" name="patient_id" class="addprenatal form-control"
                                value="<?php echo $patient_id; ?>" readonly />
                        </div>
                    </div>

                    <div class="form-row d-flex flex-row justify-content-between align-items-center mt-2">
                        <div class="form-group w-50 me-1">
                            <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                                Prenatal date <span class="text-danger">*</span></label>
                            <input type="date" id="prenatal_date" name="prenatal_date"
                                class="addprenatal form-control" />
                        </div>

                        <div class="form-group w-50 ms-1">
                            <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                                temperature<span class="text-danger">*</span> </label>
                            <input type="text" id="prenatal_temperature" name="prenatal_temperature"
                                class="addprenatal form-control" />
                        </div>
                    </div>

                    <div class="form-row d-flex flex-row justify-content-between align-items-end mt-2">
                        <div class="form-group w-50">
                            <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">

                                <span class="d-none d-md-block d-lg-block">respiratory&nbsp;rate</span>
                                <span class="d-block d-sm-none">rr</span>
                                <span class="d-none d-sm-block d-md-none">rr</span>
                                <span class="text-danger">*</span></label>
                            <input type="text" id="prenatal_rr" name="prenatal_rr" class="addprenatal form-control" />
                        </div>
                        <div class="form-group w-50 mx-2">
                            <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                                heart&nbsp;rate<span class="text-danger">*</span>
                            </label>
                            <input type="text" id="prenatal_hr" name="prenatal_hr" class="addprenatal form-control" />
                        </div>
                        <div class="form-group w-50">
                            <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                                <span class="d-none d-md-block d-lg-block">blood&nbsp;pressure</span>
                                <span class="d-block d-sm-none">bp</span>
                                <span class="d-none d-sm-block d-md-none">bp</span>
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" id="prenatal_bp" name="prenatal_bp" class="addprenatal form-control" />
                        </div>
                    </div>

                    <div class="form-row d-flex flex-row justify-content-between align-items-center mt-2">
                        <div class="form-group w-50 me-1">
                            <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                                sugar level <span class="text-danger">*</span></label>
                            <input type="text" id="prenatal_sugarlevel" name="prenatal_sugarlevel"
                                class="addprenatal form-control" />
                        </div>
                        <div class="form-group w-50 ms-1">
                            <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                                hemoglobin <span class="text-danger">*</span></label>
                            <input type="text" id="prenatal_hemoglobin" name="prenatal_hemoglobin"
                                class="addprenatal form-control" />
                        </div>
                    </div>

                    <div class="form-row d-flex flex-row justify-content-between align-items-center mt-2">
                        <div class="form-group w-50 me-1">
                            <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                                weight <span class="text-danger">*</span></label>
                            <input type="text" id="prenatal_weight" name="prenatal_weight"
                                class="addprenatal form-control" />
                        </div>
                        <div class="form-group w-50 ms-1">
                            <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                                height <span class="text-danger">*</span></label>
                            <input type="text" id="prenatal_height" name="prenatal_height"
                                class="addprenatal form-control" />
                        </div>
                    </div>

                    <div class="form-row d-flex flex-row justify-content-between align-items-center mt-2">
                        <div class="form-group w-50 me-1">
                            <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                                dose name <span class="text-danger">*</span></label>
                            <input type="text" id="prenatal_dosename" name="prenatal_dosename"
                                class="addprenatal form-control" />
                        </div>
                        <div class="form-group w-50 ms-1">
                            <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                                dose level <span class="text-danger">*</span></label>
                            <input type="text" id="prenatal_doselevel" name="prenatal_doselevel"
                                class="addprenatal form-control" />
                        </div>
                    </div>

                    <div class="form-row d-flex flex-row justify-content-between align-items-center mt-2">
                        <div class="form-group w-100 ">
                            <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                                medications <span class="text-danger">*</span></label>
                            <textarea id="prenatal_medications" name="prenatal_medications"
                                class="addprenatal form-control border-primary"></textarea>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button id="ModalCloseButtonAddPrenatalTwo" type="button" class="close  btn btn-secondary"
                        data-bs-dismiss="modal">
                        <i class="fas fa-times"></i>
                        <span class="ms-1">CLOSE</span>
                    </button>

                    <button type="submit" name="AddPrenatal" id="AddPrenatal" class="btn btn-success">
                        <i class="fas fa-save"></i>
                        <span class="ms-1">SAVE</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- EDIT -->
<div class="modal fade" id="editPrenatalModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div id="editPrenatal-data"></div>
        </div>
    </div>
</div>


<!-- DELETE -->
<div class="modal fade" id="deletePrenatalModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div id="deletePrenatal-data"></div>
        </div>
    </div>
</div>
