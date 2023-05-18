<?php require('../path.php');?>
<?php include(ROOT_PATH . '/app/database/dbconPro.php'); ?>

<?php 
    include(ROOT_PATH . '/app/helpers/middleware.php');
    adminOnly();
?>

<?php $title = 'Account - Nurse';?>
<?php include(ROOT_PATH . '/app/includes/admin/head.php'); ?>

<body>
    <!-- main -->
    <main class="admin backend-main bg-primary overflow-hidden">
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
                        <div class="data-table w-100 overflow-auto">
                            <table id='NurseTable' class='display table table-striped table-bordered'>
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>username</th>
                                        <th>name</th>
                                        <th>action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <?php include(ROOT_PATH . '/app/includes/modals/AccountModal.php'); ?>
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
                url: '/bhcm.com/app/controllers/accounts/crudAccount.php',
                method: 'POST',
                dataType: 'text',
                data: {
                    key: 'getExistingDataNurse',
                    start: start,
                    limit: limit
                },
                success: function(response) {
                    if (response != 'reachedMax') {
                        $('tbody').append(response);
                        start += limit;
                        getExistingData(start, limit);
                    } else {
                        $('#NurseTable').DataTable({
                            'columnDefs': [{
                                'targets': [3],
                                'orderable': false,
                            }, ],
                        });
                    }
                }
            });
        }

        // view btn action
        $(document).on('click', '#getView', function(e) {
            e.preventDefault();
            var viewAccountBtn = $(this).data('id');
            //alert(per_id);
            $('#content-data').html('');
            $.ajax({
                url: '/bhcm.com/app/controllers/accounts/crudAccount.php',
                type: 'POST',
                data: 'viewAccountBtn=' + viewAccountBtn,
                dataType: 'html'
            }).done(function(data) {
                $('#content-data').html('');
                $('#content-data').html(data);
            }).fail(function() {
                $('#content-data').html('<p>Error</p>');
            });
        });

        // delete btn action
        $(document).on('click', '#getDelete', function(e) {
            e.preventDefault();
            var deleteAccountBtn = $(this).data('id');
            $('#deleteContent-data').html('');
            $.ajax({
                url: '/bhcm.com/app/controllers/accounts/crudAccount.php',
                type: 'POST',
                data: 'deleteAccountBtn=' + deleteAccountBtn,
                dataType: 'html'
            }).done(function(data) {
                $('#deleteContent-data').html('');
                $('#deleteContent-data').html(data);
            }).fail(function() {
                $('#deleteContent-data').html('<p>Error</p>');
            });
        });

    });
    </script>
</body>

</html>
