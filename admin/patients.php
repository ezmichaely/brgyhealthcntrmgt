<?php require_once('../path.php');?>
<?php include(ROOT_PATH . '/app/database/dbconPro.php'); ?>

<?php 
    include(ROOT_PATH . '/app/helpers/middleware.php');
    adminOnly();
?>

<?php $title = 'Patients';?>
<?php include(ROOT_PATH . '/app/includes/admin/head.php'); ?>

<body>
    <!-- main -->
    <main class="admin backend-main bg-primary overflow-x-hidden">
        <div class="d-flex justify-content-start align-items-start flex-row">
            <?php include(ROOT_PATH . '/app/includes/admin/aside.php'); ?>

            <section class="main-container" id="main-container">
                <?php include(ROOT_PATH . '/app/includes/admin/header.php'); ?>

                <!-- MAIN CODE HERE -->
                <div class="main-content container-fluid fluid-padding py-4">
                    <h4 class="text-dark fw-bold text-uppercase text-center m-0 p-0">
                        <?php echo $title ?>
                    </h4>

                    <div class="mt-2">

                        <button type="button" class="btn btn-success font-title fw-bold text-uppercase"
                            data-bs-toggle="modal" data-bs-target="#addPatientModal">
                            <i class="fas fa-plus"></i>
                            <span>ADD NEW patient</span>
                        </button>

                        <div class="data-table w-100 mt-3 overflow-auto">
                            <table id="PatientsTable" class="display table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th class="">#</th>
                                        <th class="">Category</th>
                                        <th class="">Name</th>
                                        <th class="">Age</th>
                                        <th class="">Consultations</th>
                                        <th class="">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <?php include(ROOT_PATH . '/app/includes/modals/PatientModal.php'); ?>
                </div>
            </section>
        </div>
    </main>
    <!-- end of main -->


    <div class="bg-light hr-2"></div>
    <?php include(ROOT_PATH . '/app/includes/admin/footer.php'); ?>
    <?php include(ROOT_PATH . '/app/includes/admin/script.php'); ?>


    <script>
    $(document).ready(function() {

        getExistingData(0, 50);

        function getExistingData(start, limit) {
            $.ajax({
                url: '/bhcm.com/app/controllers/patients/crudPatient.php',
                method: 'POST',
                dataType: 'text',
                data: {
                    key: 'getExistingData',
                    start: start,
                    limit: limit
                },
                success: function(response) {
                    if (response != "reachedMax") {
                        $('tbody').append(response);
                        start += limit;
                        getExistingData(start, limit);
                    } else {
                        $("#PatientsTable").DataTable({
                            "columnDefs": [{
                                "targets": [5],
                                "orderable": false,
                            }, ],
                        });
                    }
                }
            });
        }

        $(document).on('click', '#getEdit', function(e) {
            e.preventDefault();
            var editPatientBtn = $(this).data('id');
            //alert(per_id);
            $('#content-data').html('');
            $.ajax({
                url: '/bhcm.com/app/controllers/patients/crudPatient.php',
                type: 'POST',
                data: 'editPatientBtn=' + editPatientBtn,
                dataType: 'html'
            }).done(function(data) {
                $('#content-data').html('');
                $('#content-data').html(data);
            }).fail(function() {
                $('#content-data').html('<p>Error</p>');
            });
        });

    });
    </script>


</body>

</html>
