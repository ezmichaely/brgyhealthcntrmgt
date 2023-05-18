<form method="POST" data-id="<?php echo $report_id; ?>" id="EditReportForm">

    <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel">
            EDIT Report
        </h5>
        <button id="ModalCloseButtonEditReportOne" type="button" class="btn-close btn-close-white me-2"
            data-bs-dismiss="modal" aria-label="Close"></button>
    </div>

    <div class="modal-body">

        <!-- form alert -->
        <ul id="alertEditReportSuccess" role="alert"
            class="editreport d-none alert alert-success fw-bold fs-7 py-2 px-4">
            <li id="succMsg" class="editreport d-none"></li>
        </ul>

        <ul id="alertEditReportError" role="alert" class="editreport d-none alert alert-danger fw-bold fs-7 py-2 px-4">
            <li id="errAll" class="editreport d-none"></li>
        </ul>

        <div class="form-group">

            <div class="form-group d-none">
                <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title">
                    report id <span class="text-danger">*</span>
                </label>
                <input type="text" id="report_id" name="report_id" class="form-control editreport"
                    value='<?php echo $report_id ?>' readonly />
            </div>


            <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title"> Type
                <span class="text-danger"> * </span></label>
            <input type="text" name="report_type" id="report_type" value="<?php echo $report_type ?>"
                class="editreport form-control" />
        </div>

    </div>

    <div class="modal-footer">
        <button id="ModalCloseButtonEditReportTwo" type="button" class="close btn btn-danger" data-bs-dismiss="modal">
            <i class="fas fa-times"></i>
            <span class="ms-1">CLOSE</span>
        </button>

        <button type="submit" id="EditReport" name="EditReport" class="btn btn-primary"
            data-id="<?php echo $report_id; ?>">
            <i class="fas fa-save"></i>
            <span class="ms-1">SAVE</span>
        </button>
    </div>

</form>
