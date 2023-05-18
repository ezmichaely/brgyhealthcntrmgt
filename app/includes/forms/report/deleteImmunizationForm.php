<form method="POST" data-id="<?php echo $immu_id; ?>" id="deleteImmunizationForm">
    <div class="modal-header">
        <h5 class="modal-title" id="deleteModalLabel">
            DELETE Immunization entry
        </h5>
        <button id="ModalCloseButtonDeleteImmunizationOne" type="button" class="btn-close btn-close-white"
            data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <div id="alertImmunizationSuccess" class="deleteimmunization d-none">
            <div class="modal-warning">
                <div class="modal-warning-icon">
                    <i class="far fa-check-circle text-success"></i>
                </div>
                <div class="modal-warning-title">
                    <h3 id="succMsg" class="deleteimmunization text-center text-success list-unstyled"></h3>
                </div>
            </div>
        </div>

        <div id="warningImmunizationSuccess" class="deleteimmunization d-block">
            <div class="form-group w-100 d-none">
                <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                    Immunization ID <span class="text-danger">*</span></label>
                <input type="text" id="immunization_id" name="immunization_id" class="form-control"
                    value="<?php echo $immu_id; ?>" readonly />
            </div>
            <div class="modal-warning">
                <div class="modal-warning-icon">
                    <i class="far fa-times-circle"></i>
                </div>
                <div class="modal-warning-title">
                    <h3>Are you sure?</h3>
                </div>
                <div class="modal-warning-body">
                    <p class="text-center">
                        Do you really want to delete these
                        record?
                        </br>
                        This process cannot be undone.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <div id="immunizationModalFooterOne" class="d-block">
            <button type="button" class="close btn btn-secondary" data-bs-dismiss="modal">
                <i class="fas fa-times"></i>
                <span class="ms-1">CANCEL</span>
            </button>

            <button type="submit" id="DeleteImmunization" name="DeleteImmunization" data-id="<?php echo $immu_id; ?>"
                class="btn btn-danger">
                <i class="fas fa-trash"></i>
                <span class="ms-1">DELETE</span>
            </button>
        </div>

        <div id="immunizationModalFooterTwo" class="d-none">
            <button id="ModalCloseButtonDeleteImmunizationTwo" type="button" class="close btn btn-secondary"
                data-bs-dismiss="modal">
                <i class="fas fa-times"></i>
                <span class="ms-1">CLOSE</span>
            </button>
        </div>
    </div>
</form>
