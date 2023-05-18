<!-- ADD ADMIN -->
<div class="modal fade" id="addReportModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="AddReportForm">
                <div class="modal-header">
                    <h5 class="modal-title" id="addModalLabel">
                        ADD NEW Report
                    </h5>
                    <button id="ModalCloseButtonAddReportOne" type="button" class="btn-close btn-close-white"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">

                    <!-- form alert -->
                    <ul id="alertAddReportSuccess" role="alert"
                        class="addreport d-none alert alert-success fw-bold fs-7 py-2 px-4">
                        <li id="succMsg" class="addreport d-none"></li>
                    </ul>

                    <ul id="alertAddReportError" role="alert"
                        class="addreport d-none alert alert-danger fw-bold fs-7 py-2 px-4">
                        <li id="errAll" class="addreport d-none"></li>
                    </ul>

                    <div class="form-group">
                        <label class="form-label text-uppercase fw-bold fs-7 m-0 font-title"> Type
                            <span class="text-danger"> * </span></label>
                        <input type="text" name="report_type" id="report_type" class="addreport form-control" />
                    </div>

                </div>

                <div class="modal-footer">
                    <button id="ModalCloseButtonAddReportTwo" type="button" class="close btn btn-danger"
                        data-bs-dismiss="modal">
                        <i class="fas fa-times"></i>
                        <span class="ms-1">CLOSE</span>
                    </button>

                    <button type="submit" name="AddReport" id="AddReport" class="btn btn-primary">
                        <i class="fas fa-save"></i>
                        <span class="ms-1">SAVE</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- VIEW -->
<div class="modal fade" id="editReportModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div id="content-data"></div>
        </div>
    </div>
</div>
