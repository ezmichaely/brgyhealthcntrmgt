<?php require('../path.php');?>
<?php include(ROOT_PATH . '/app/database/dbconPro.php'); ?>
<?php 
    include(ROOT_PATH . '/app/helpers/middleware.php');
    adminOnly();
?>

<?php $title = 'Manage - Patient Category';?>
<?php include(ROOT_PATH . '/app/includes/admin/head.php'); ?>

<body>
    <!-- main -->
    <main class="admin backend-main bg-primary overflow-x-hidden">
        <div class="d-flex justify-content-start align-items-start flex-row">
            <?php include(ROOT_PATH . '/app/includes/admin/aside.php');?>

            <section class="main-container" id="main-container">
                <?php include(ROOT_PATH . '/app/includes/admin/header.php');?>

                <!-- MAIN CODE HERE -->
                <div class="main-content container-fluid fluid-padding py-4">


                    <h4 class="text-dark fw-bold text-uppercase text-center m-0 p-0">
                        <?php echo $title ?>
                    </h4>

                    <div class="mt-2">
                        <div class="add-button ">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-success font-title fw-bold text-uppercase"
                                data-bs-toggle="modal" data-bs-target="#addCategoryModal">
                                <i class="fas fa-plus"></i>
                                <span>ADD NEW CATEGORY</span>
                            </button>
                        </div>

                        <div class="data-table w-100 mt-3 overflow-auto">
                            <table id="CategoryTable" class="display table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Type</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <?php include(ROOT_PATH . '/app/includes/modals/CategoryModal.php'); ?>
            </section>
        </div>
    </main>
    <!-- end of main -->

    <div class="bg-light hr-2"></div>

    <?php include(ROOT_PATH . '/app/includes/admin/footer.php');?>
    <?php include(ROOT_PATH . '/app/includes/admin/script.php');?>

    <script>
    $(document).ready(function() {
        getExistingData(0, 50);

        function getExistingData(start, limit) {
            $.ajax({
                url: '/bhcm.com/app/controllers/manage/crudCategory.php',
                method: 'POST',
                dataType: 'text',
                data: {
                    key: 'getExistingData',
                    start: start,
                    limit: limit
                },
                success: function(response) {
                    if (response != 'reachedMax') {
                        $('tbody').append(response);
                        start += limit;
                        getExistingData(start, limit);
                    } else {
                        $('#CategoryTable').DataTable({
                            'columnDefs': [{
                                'targets': [2],
                                'orderable': false,
                            }, ],
                        });
                    }
                }
            });
        }

        // view btn action
        $(document).on('click', '#getEdit', function(e) {
            e.preventDefault();
            var editCategoryBtn = $(this).data('id');
            //alert(per_id);
            $('#content-data').html('');
            $.ajax({
                url: '/bhcm.com/app/controllers/manage/crudCategory.php',
                type: 'POST',
                data: 'editCategoryBtn=' + editCategoryBtn,
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
