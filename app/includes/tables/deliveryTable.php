<div class="row mt-3 ">
    <div class="col-md-12 ">
        <div class="bg-white rounded border-start border-3 border-success p-3">
            <h4 class="fw-bold text-uppercase text-center bg-info text-dark rounded py-1">
                DELIVERY
            </h4>

            <div class="mt-3 d-flex justify-content-between align-items-center flex-row flex-wrap">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-success font-title fw-bold text-uppercase" data-bs-toggle="modal"
                    data-bs-target="#addModalDelivery">
                    <i class="fas fa-plus"></i>
                    <span class="ms-1">ADD NEW DELIVERY</span>
                </button>
            </div>

            <div class="data-table my-3 w-100 overflow-auto mx-0 px-0">
                <table id="DeliveryTable" data-id="<?php echo $patient_id; ?>"
                    class="table table-striped table-bordered my-3 mx-0 px-0">
                    <thead>
                        <tr>
                            <th class="">date</th>
                            <th class="">age of delivery</th>
                            <th class=""># of babies</th>
                            <th class="">gender</th>
                            <th class="">delivery type</th>
                            <th class="">action</th>
                        </tr>
                    </thead>
                    <tbody class="DeliveryTableBody">
                    </tbody>
                </table>
            </div>

            <!-- DELIVERY MODALS-->
            <?php include(ROOT_PATH . '/app/includes/modals/DeliveryModal.php'); ?>
        </div>
    </div>
</div>
