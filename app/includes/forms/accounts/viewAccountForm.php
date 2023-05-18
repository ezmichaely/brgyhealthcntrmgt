<form method="POST" data-id="<?php echo $account_id; ?>" id="viewAdminForm">
    <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel">
            account DETAILS
        </h5>
        <button type="button" class="btn-close btn-close-white me-2" data-bs-dismiss="modal"
            aria-label="Close"></button>
    </div>

    <div class="modal-body">
        <!-- form alert -->
        <div class="form-row d-flex flex-row justify-content-between align-items-center">
            <div class="form-group w-50">
                <label class="fs-7"> id <span class="text-danger">*</span></label>
                <input type="text" name="account_id" value="<?php echo $account_id ?>"
                    class="form-control text-uppercase" readonly />
            </div>

            <div class="form-group w-50 mx-2">
                <label class="fs-7"> type <span class="text-danger">*</span></label>
                <input type="text" name="account_type" value="<?php echo $account_type ?>"
                    class="form-control text-uppercase" readonly />
            </div>
            <div class="form-group w-50">
                <label class="fs-7"> status <span class="text-danger">*</span></label>
                <input type="text" name="account_status" value="<?php echo $account_status ?>"
                    class="form-control text-uppercase" readonly />
            </div>
        </div>

        <div class="form-row d-flex flex-row justify-content-between align-items-center mt-2">
            <div class="form-group w-50 me-1">
                <label class="fs-7"> firstname <span class="text-danger">*</span></label>
                <input type="text" name="account_firstname" value="<?php echo $account_firstname ?>"
                    class="form-control text-uppercase" readonly />
            </div>

            <div class="form-group w-50 ms-1">
                <label class="fs-7"> last name <span class="text-danger">*</span></label>
                <input type="text" name="account_lastname" value="<?php echo $account_lastname ?>"
                    class="form-control text-uppercase" readonly />
            </div>
        </div>

        <div class="form-row d-flex flex-row justify-content-between align-items-center mt-2">
            <div class="form-group w-50 me-1">
                <label class="fs-7"> username <span class="text-danger">*</span></label>
                <input type="text" name="account_username" value="<?php echo $account_username ?>" class="form-control"
                    readonly />
            </div>

            <div class="form-group w-50 ms-1">
                <label class="fs-7"> password <span class="text-danger">*</span></label>
                <input type="password" name="account_username" value="<?php echo $account_password ?>"
                    class="form-control" readonly />
            </div>
        </div>

        <div class="form-row d-flex flex-row justify-content-between align-items-center mt-2">
            <div class="form-group w-50 me-1">
                <label class="fs-7">
                    <span class="d-none d-lg-block d-xl-block d-xxl-block">password security question</span>
                    <span class="d-none d-md-block d-lg-none">psq</span>
                    <span class="d-none d-sm-block d-md-none">psq</span>
                    <span class="d-block d-sm-none">psq</span>
                    <span class="text-danger">*</span>
                </label>
                <input type="text" name="question_name" value="<?php echo $question_name ?>" class="form-control"
                    readonly />
            </div>

            <div class="form-group w-50 ms-1">
                <label class="fs-7"> answer <span class="text-danger">*</span></label>
                <input type="password" name="account_answer" value="<?php echo $account_answer ?>" class="form-control"
                    readonly />
            </div>
        </div>
    </div>

    <div class="modal-footer">
        <button type="button" class="close btn btn-secondary" data-bs-dismiss="modal">
            <i class="fas fa-times"></i>
            <span class="ms-1">CLOSE</span>
        </button>
    </div>
</form>
