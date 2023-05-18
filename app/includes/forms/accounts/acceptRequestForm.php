<form method="POST" data-id="<?php echo $account_id; ?>" id="acceptRequestForm">
    <div class="modal-header">
        <h5 class="modal-title" id="acceptModalLabel">
            Accept Account request
        </h5>
        <button id="ModalCloseButtonAcceptRequestOne" type="button" class="btn-close btn-close-white"
            data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">

        <div id="warningRequestSuccess" class="acceptrequest d-block">
            <div class="form-group w-100 d-none">
                <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                    account ID <span class="text-danger">*</span></label>
                <input type="text" id="account_id" name="account_id" class="form-control"
                    value="<?php echo $account_id; ?>" readonly />
            </div>
            <div class="modal-warning">
                <div class="modal-warning-icon">
                    <i class="far fa-check-circle text-success"></i>
                </div>
                <div class="modal-warning-title ">
                    <h3 class="text-success">Are you sure?</h3>
                </div>
                <div class="modal-warning-body">
                    <p class="text-lowercase fw-bold">
                        <span class="text-uppercase">D</span>o you really want to
                        <span class="text-success text-uppercase fw-bolder"><u>accept</u></span>
                        these account?
                    </p>
                </div>
            </div>
        </div>

        <div id="alertRequestSuccess" class="acceptrequest d-none">
            <div class="modal-warning">
                <div class="modal-warning-icon">
                    <i class="far fa-check-circle text-success"></i>
                </div>
                <div class="modal-warning-title">
                    <h3 id="succMsg" class="acceptrequest text-center text-success list-unstyled"></h3>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <div id="requestModalFooterOne" class="d-block">
            <button type="button" class="close btn btn-secondary" data-bs-dismiss="modal">
                <i class="fas fa-times"></i>
                <span class="ms-1">CLOSE</span>
            </button>

            <button type="submit" id="AcceptRequest" name="AcceptRequest" data-id="<?php echo $account_id; ?>"
                class="btn btn-success">
                <i class="fas fa-check"></i>
                <span class="ms-1">accept</span>
            </button>
        </div>

        <div id="requestModalFooterTwo" class="d-none">
            <button id="ModalCloseButtonAcceptRequestTwo" type="button" class="close btn btn-secondary"
                data-bs-dismiss="modal">
                <i class="fas fa-times"></i>
                <span class="ms-1">CLOSE</span>
            </button>
        </div>
    </div>
</form>
