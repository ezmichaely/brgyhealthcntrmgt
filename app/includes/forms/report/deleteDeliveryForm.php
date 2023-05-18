<form method="POST" data-id="<?php echo $delivery_id; ?>" id="deleteDeliveryForm">
    <div class="modal-header">
        <h5 class="modal-title" id="deleteModalLabel">
            DELETE Delivery entry
        </h5>
        <button id="ModalCloseButtonDeleteDeliveryOne" type="button" class="btn-close btn-close-white"
            data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <div id="alertDeliverySuccess" class="deletedelivery d-none">
            <div class="modal-warning">
                <div class="modal-warning-icon">
                    <i class="far fa-check-circle text-success"></i>
                </div>
                <div class="modal-warning-title">
                    <h3 id="succMsg" class="deletedelivery text-center text-success list-unstyled"></h3>
                </div>
            </div>
        </div>

        <div id="warningDeliverySuccess" class="deletedelivery d-block">
            <div class="form-group w-100 d-none">
                <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                    Delivery ID <span class="text-danger">*</span></label>
                <input type="text" id="delivery_id" name="delivery_id" class="form-control"
                    value="<?php echo $delivery_id; ?>" readonly />
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
        <div id="deliveryModalFooterOne" class="d-block">
            <button type="button" class="close btn btn-secondary" data-bs-dismiss="modal">
                <i class="fas fa-times"></i>
                <span class="ms-1">CANCEL</span>
            </button>

            <button type="submit" id="DeleteDelivery" name="DeleteDelivery" data-id="<?php echo $delivery_id; ?>"
                class="btn btn-danger">
                <i class="fas fa-trash"></i>
                <span class="ms-1">DELETE</span>
            </button>
        </div>

        <div id="deliveryModalFooterTwo" class="d-none">
            <button id="ModalCloseButtonDeleteDeliveryTwo" type="button" class="close btn btn-secondary"
                data-bs-dismiss="modal">
                <i class="fas fa-times"></i>
                <span class="ms-1">CLOSE</span>
            </button>
        </div>
    </div>
</form>
