<?php require('../path.php'); ?>
<?php include(ROOT_PATH . '/app/database/dbconPro.php'); ?>
<?php 
    include(ROOT_PATH . '/app/helpers/middleware.php');
    staffOnly();
?>

<?php $title = 'Home'; $page = 'Staff'; ?>
<?php include(ROOT_PATH .'/app/includes/staff/head.php') ?>

<body>
    <?php include(ROOT_PATH .'/app/includes/staff/header.php') ?>

    <main class="frontend-main container-fluid fluid-padding bg-gray-100">

        <?php if(isset($_SESSION['messageOne']) || isset($_SESSION['messageTwo'])) : ?>
        <!-- <center class=""> -->
        <ul id="alertLoginSuccess" role="alert"
            class="w-100 text-start login alert alert-success fw-bold fs-7 py-2 px-4 mt-2 text-center">
            <li id="succMsg" class="login list-unstyled"><?php echo $_SESSION['messageOne']; ?></li>
            <li id="succMsg" class="login list-unstyled"><?php echo $_SESSION['messageTwo']; ?></li>
        </ul>
        <!-- </center> -->
        <?php endif; ?>
        <?php unset($_SESSION['messageOne'], $_SESSION['messageTwo']); ?>

        <div class="bg-success p-2 rounded-3 mt-4">
            <h2 class="font-title fw-bold text-white text-center ">PATIENTS</h2>
        </div>

        <!-- MAIN CODE HERE -->
        <div class=" py-4">
            <button type="button" class="btn btn-success font-title fw-bold text-uppercase" data-bs-toggle="modal"
                data-bs-target="#addPatientModal">
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
            <?php include(ROOT_PATH . '/app/includes/modals/PatientModal.php'); ?>
        </div>


    </main>
    <!-- end of main -->


    <div class="bg-light hr-2"></div>
    <?php include(ROOT_PATH . '/app/includes/staff/footer.php'); ?>
    <?php include(ROOT_PATH . '/app/includes/staff/script.php'); ?>


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

        setTimeout(function() {
            $("#alertLoginSuccess").remove();
        }, 5000);
    });
    </script>
</body>

</html>
