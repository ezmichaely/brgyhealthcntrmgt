<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="EditDeliveryForm">
    <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel">
            Edit Delivery
        </h5>
        <button id="ModalCloseButtonEditDeliveryOne" type="button" class="btn-close btn-close-white"
            data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <!-- form alert -->
        <ul id="alertEditDeliverySuccess" role="alert"
            class="editdelivery d-none alert alert-success fw-bold fs-7 py-2 px-4">
            <li class="editdelivery d-none" id="succMsg"></li>
        </ul>

        <ul id="alertEditDeliveryError" role="alert"
            class="editdelivery d-none alert alert-danger fw-bold fs-7 py-2 px-4 ">
            <li id="errAll" class="editdelivery d-none"></li>
            <li id="errDate" class="editdelivery d-none"></li>
            <li id="errTemp" class="editdelivery d-none"></li>
            <li id="errRR" class="editdelivery d-none"></li>
            <li id="errHR" class="editdelivery d-none"></li>
            <li id="errBP" class="editdelivery d-none"></li>
            <li id="errAge" class="editdelivery d-none"></li>
            <li id="errBabiesNo" class="editdelivery d-none"></li>
            <li id="errGender" class="editdelivery d-none"></li>
            <li id="errType" class="editdelivery d-none"></li>
        </ul>

        <div class="form-row d-flex flex-row justify-content-between align-items-center">
            <div class="form-group w-50 me-1">
                <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                    Delivery ID <span class="text-danger">*</span></label>
                <input type="text" name="delivery_id" class="editdelivery form-control"
                    value="<?php echo $delivery_id; ?>" readonly />
            </div>

            <div class="form-group w-50 ms-1">
                <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                    Patient ID <span class="text-danger">*</span></label>
                <input type="text" name="patient_id" class="editdelivery form-control"
                    value="<?php echo $patient_id; ?>" readonly />
            </div>
        </div>

        <div class="form-row d-flex flex-row justify-content-between align-items-center mt-2">
            <div class="form-group w-50 me-1">
                <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                    delivery date <span class="text-danger">*</span></label>
                <input type="date" id="delivery_date" name="delivery_date" class="editdelivery form-control"
                    value="<?php echo $delivery_date; ?>" />
            </div>

            <div class="form-group w-50 ms-1">
                <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                    temperature<span class="text-danger">*</span> </label>
                <input type="text" id="delivery_temperature" name="delivery_temperature"
                    class="editdelivery form-control" value="<?php echo $delivery_temp; ?>" />
            </div>
        </div>

        <div class="form-row d-flex flex-row justify-content-between align-items-end mt-2">
            <div class="form-group w-50">
                <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                    <span class="d-none d-md-block d-lg-block">respiratory&nbsp;rate</span>
                    <span class="d-block d-sm-none">rr</span>
                    <span class="d-none d-sm-block d-md-none">rr</span>
                    <span class="text-danger">*</span></label>
                <input type="text" id="delivery_rr" name="delivery_rr" class="editdelivery form-control"
                    value="<?php echo $delivery_rr; ?>" />
            </div>
            <div class="form-group w-50 mx-2">
                <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                    heart&nbsp;rate<span class="text-danger">*</span>
                </label>
                <input type="text" id="delivery_hr" name="delivery_hr" class="editdelivery form-control"
                    value="<?php echo $delivery_hr; ?>" />
            </div>
            <div class="form-group w-50">
                <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                    <span class="d-none d-md-block d-lg-block">blood&nbsp;pressure</span>
                    <span class="d-block d-sm-none">bp</span>
                    <span class="d-none d-sm-block d-md-none">bp</span>
                    <span class="text-danger">*</span>
                </label>
                <input type="text" id="delivery_bp" name="delivery_bp" class="editdelivery form-control"
                    value="<?php echo $delivery_bp; ?>" />
            </div>
        </div>

        <div class="form-row d-flex flex-row justify-content-between align-items-center mt-2">
            <div class="form-group w-50 me-1">
                <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                    Delivery Age <span class="text-danger">*</span></label>
                <input type="text" id="delivery_age" name="delivery_age" class="editdelivery form-control"
                    value="<?php echo $delivery_age; ?>" />
            </div>
            <div class="form-group w-50 ms-1">
                <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                    Number of Babies <span class="text-danger">*</span></label>
                <input type="text" id="delivery_babiesno" name="delivery_babiesno" class="editdelivery form-control"
                    value="<?php echo $delivery_babiesno; ?>" />
            </div>
        </div>

        <div class="form-row d-flex flex-row justify-content-between align-items-center mt-2">
            <div class="form-group w-50 me-1">
                <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                    Baby's Gender <span class="text-danger">*</span></label>
                <input type="text" id="delivery_gender" name="delivery_gender" class="editdelivery form-control"
                    value="<?php echo $delivery_gender; ?>" />
            </div>
            <div class="form-group w-50 ms-1">
                <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                    Delivery Type <span class="text-danger">*</span></label>
                <select id="delivery_type" name="delivery_type" class="editdelivery form-select border border-primary"
                    aria-label="Default select example">
                    <option selected hidden value="<?php echo $dtype_id; ?>">
                        <?php echo $dtype_name; ?>
                    </option>
                    <?php
                        $sqldtype = "SELECT * FROM `delivery_type`";
                        $stmtdtype = mysqli_query($conn, $sqldtype);
                        while($rowdtype = mysqli_fetch_array($stmtdtype)) :; 
                            $dtype_id = $rowdtype['dtype_id'];
                            $dtype_name = $rowdtype['dtype_name'];
                    ?>
                    <option value="<?php echo $dtype_id; ?>">
                        <?php echo $dtype_name; ?>
                    </option>
                    <?php endwhile; ?>
                </select>
            </div>
        </div>
    </div>

    <div class="modal-footer">
        <button id="ModalCloseButtonEditDeliveryTwo" type="button" class="close  btn btn-secondary"
            data-bs-dismiss="modal">
            <i class="fas fa-times"></i>
            <span class="ms-1">CLOSE</span>
        </button>

        <button type="submit" name="EditDelivery" id="EditDelivery" class="btn btn-success">
            <i class="fas fa-save"></i>
            <span class="ms-1">SAVE</span>
        </button>
    </div>
</form>
