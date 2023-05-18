<!-- ADD -->
<div class="modal fade" id="addModalDelivery" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="AddDeliveryForm">
                <div class="modal-header">
                    <h5 class="modal-title" id="addModalLabel">
                        ADD NEW Delivery
                    </h5>
                    <button id="ModalCloseButtonAddDeliveryOne" type="button" class="btn-close btn-close-white"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- form alert -->
                    <ul id="alertAddDeliverySuccess" role="alert"
                        class="adddelivery d-none alert alert-success fw-bold fs-7 py-2 px-4">
                        <li class="adddelivery d-none" id="succMsg"></li>
                    </ul>

                    <ul id="alertAddDeliveryError" role="alert"
                        class="adddelivery d-none alert alert-danger fw-bold fs-7 py-2 px-4 ">
                        <li id="errAll" class="adddelivery d-none"></li>
                        <li id="errDate" class="adddelivery d-none"></li>
                        <li id="errTemp" class="adddelivery d-none"></li>
                        <li id="errRR" class="adddelivery d-none"></li>
                        <li id="errHR" class="adddelivery d-none"></li>
                        <li id="errBP" class="adddelivery d-none"></li>
                        <li id="errAge" class="adddelivery d-none"></li>
                        <li id="errBabiesNo" class="adddelivery d-none"></li>
                        <li id="errGender" class="adddelivery d-none"></li>
                    </ul>

                    <div class="form-row d-flex flex-row justify-content-between align-items-center">
                        <div class="form-group w-100">
                            <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                                Patient ID <span class="text-danger">*</span></label>
                            <input type="text" name="patient_id" class="adddelivery form-control"
                                value="<?php echo $patient_id; ?>" readonly />
                        </div>
                    </div>

                    <div class="form-row d-flex flex-row justify-content-between align-items-center mt-2">
                        <div class="form-group w-50 me-1">
                            <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                                delivery date <span class="text-danger">*</span></label>
                            <input type="date" id="delivery_date" name="delivery_date"
                                class="adddelivery form-control" />
                        </div>

                        <div class="form-group w-50 ms-1">
                            <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                                temperature<span class="text-danger">*</span> </label>
                            <input type="text" id="delivery_temperature" name="delivery_temperature"
                                class="adddelivery form-control" />
                        </div>
                    </div>

                    <div class="form-row d-flex flex-row justify-content-between align-items-end mt-2">
                        <div class="form-group w-50">
                            <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                                <span class="d-none d-md-block d-lg-block">respiratory&nbsp;rate</span>
                                <span class="d-block d-sm-none">rr</span>
                                <span class="d-none d-sm-block d-md-none">rr</span>
                                <span class="text-danger">*</span></label>
                            <input type="text" id="delivery_rr" name="delivery_rr" class="adddelivery form-control" />
                        </div>
                        <div class="form-group w-50 mx-2">
                            <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                                heart&nbsp;rate<span class="text-danger">*</span>
                            </label>
                            <input type="text" id="delivery_hr" name="delivery_hr" class="adddelivery form-control" />
                        </div>
                        <div class="form-group w-50">
                            <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                                <span class="d-none d-md-block d-lg-block">blood&nbsp;pressure</span>
                                <span class="d-block d-sm-none">bp</span>
                                <span class="d-none d-sm-block d-md-none">bp</span>
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" id="delivery_bp" name="delivery_bp" class="adddelivery form-control" />
                        </div>
                    </div>

                    <div class="form-row d-flex flex-row justify-content-between align-items-center mt-2">
                        <div class="form-group w-50 me-1">
                            <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                                Delivery Age <span class="text-danger">*</span></label>
                            <input type="text" id="delivery_age" name="delivery_age" class="adddelivery form-control" />
                        </div>
                        <div class="form-group w-50 ms-1">
                            <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                                Number of Babies <span class="text-danger">*</span></label>
                            <input type="text" id="delivery_babiesno" name="delivery_babiesno"
                                class="adddelivery form-control" />
                        </div>
                    </div>

                    <div class="form-row d-flex flex-row justify-content-between align-items-center mt-2">
                        <div class="form-group w-50 me-1">
                            <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                                Baby's Gender <span class="text-danger">*</span></label>
                            <input type="text" id="delivery_gender" name="delivery_gender"
                                class="adddelivery form-control" />
                        </div>
                        <div class="form-group w-50 ms-1">
                            <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                                Delivery Type <span class="text-danger">*</span></label>
                            <select id="delivery_type" name="delivery_type"
                                class="adddelivery form-select border border-primary"
                                aria-label="Default select example">
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
                    <button id="ModalCloseButtonAddDeliveryTwo" type="button" class="close  btn btn-secondary"
                        data-bs-dismiss="modal">
                        <i class="fas fa-times"></i>
                        <span class="ms-1">CLOSE</span>
                    </button>

                    <button type="submit" name="AddDelivery" id="AddDelivery" class="btn btn-success">
                        <i class="fas fa-save"></i>
                        <span class="ms-1">SAVE</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- EDIT -->
<div class="modal fade" id="editDeliveryModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div id="editDelivery-data"></div>
        </div>
    </div>
</div>


<!-- DELETE -->
<div class="modal fade" id="deleteDeliveryModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div id="deleteDelivery-data"></div>
        </div>
    </div>
</div>
