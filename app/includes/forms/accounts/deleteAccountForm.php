<form method="POST" data-id="<?php echo $account_id; ?>" id="deleteAccountForm">
    <div class="modal-header">
        <h5 class="modal-title" id="deleteModalLabel">
            DELETE account
        </h5>
        <button id="ModalCloseButtonDeleteAccountOne" type="button" class="btn-close btn-close-white"
            data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <div id="warningDeleteAccountSuccess" class="deleteaccount d-block">
            <div class="form-group w-100 d-none">
                <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                    account ID <span class="text-danger">*</span></label>
                <input type="text" id="account_id" name="account_id" class="form-control"
                    value="<?php echo $account_id; ?>" readonly />
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

        <div id="alertDeleteAccountSuccess" class="deleteaccount d-none">
            <div class="modal-warning">
                <div class="modal-warning-icon">
                    <i class="far fa-check-circle text-success"></i>
                </div>
                <div class="modal-warning-title">
                    <h3 id="succMsg" class="deleteaccount text-center text-success list-unstyled"></h3>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <div id="accountModalFooterOne" class="d-block">
            <button type="button" class="close btn btn-secondary" data-bs-dismiss="modal">
                <i class="fas fa-times"></i>
                <span class="ms-1">CLOSE</span>
            </button>

            <button type="submit" id="DeleteAccount" name="DeleteAccount" data-id="<?php echo $account_id; ?>"
                class="btn btn-danger">
                <i class="fas fa-trash"></i>
                <span class="ms-1">DELETE</span>
            </button>
        </div>

        <div id="accountModalFooterTwo" class="d-none">
            <button id="ModalCloseButtonDeleteAccountTwo" type="button" class="close btn btn-secondary"
                data-bs-dismiss="modal">
                <i class="fas fa-times"></i>
                <span class="ms-1">CLOSE</span>
            </button>
        </div>
    </div>
</form>
