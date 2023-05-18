<form method="POST" data-id="<?php echo $dtype_id; ?>" id="EditDeliveryTypeForm">

    <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel">
            EDIT Delivery Type
        </h5>
        <button id="ModalCloseButtonEditDeliveryTypeOne" type="button" class="btn-close btn-close-white me-2"
            data-bs-dismiss="modal" aria-label="Close"></button>
    </div>

    <div class="modal-body">

        <!-- form alert -->
        <ul id="alertEditDeliveryTypeSuccess" role="alert"
            class="editdeliverytype d-none alert alert-success fw-bold fs-7 py-2 px-4">
            <li id="succMsg" class="editdeliverytype d-none"></li>
        </ul>

        <ul id="alertEditDeliveryTypeError" role="alert"
            class="editdeliverytype d-none alert alert-danger fw-bold fs-7 py-2 px-4">
            <li id="errAll" class="editdeliverytype d-none"></li>
        </ul>

        <div class="form-group">

            <div class="form-group d-none">
                <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                    delivery type id <span class="text-danger">*</span>
                </label>
                <input type="text" id="dtype_id" name="dtype_id" class="form-control editdeliverytype"
                    value='<?php echo $dtype_id ?>' readonly />
            </div>


            <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title"> Type
                <span class="text-danger"> * </span></label>
            <input type="text" name="dtype_name" id="dtype_name" value="<?php echo $dtype_name ?>"
                class="editdeliverytype form-control" />
        </div>

    </div>

    <div class="modal-footer">
        <button id="ModalCloseButtonEditDeliveryTypeTwo" type="button" class="close btn btn-danger"
            data-bs-dismiss="modal">
            <i class="fas fa-times"></i>
            <span class="ms-1">CLOSE</span>
        </button>

        <button type="submit" id="EditDeliveryType" name="EditDeliveryType" class="btn btn-primary"
            data-id="<?php echo $dtype_id; ?>">
            <i class="fas fa-save"></i>
            <span class="ms-1">SAVE</span>
        </button>
    </div>

</form>
