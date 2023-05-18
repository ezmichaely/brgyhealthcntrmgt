<?php require('../path.php');?>
<?php include(ROOT_PATH . '/app/database/dbconPro.php'); ?>
<?php include(ROOT_PATH . '/app/controllers/countquery.php'); ?>
<?php 
    include(ROOT_PATH . '/app/helpers/middleware.php');
    adminOnly();
?>

<?php $title = 'Dashboard';?>
<?php include(ROOT_PATH . '/app/includes/admin/head.php'); ?>

<body>
    <!-- main -->
    <main class="admin backend-main bg-primary overflow-hidden">
        <div class="d-flex justify-content-start align-items-start flex-row">
            <?php include(ROOT_PATH . '/app/includes/admin/aside.php'); ?>

            <section class="main-container" id="main-container">
                <?php include(ROOT_PATH . '/app/includes/admin/header.php'); ?>

                <!-- MAIN CODE HERE -->
                <div class="main-content container-fluid fluid-padding py-4 ">

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

                    <h4 class="text-dark fw-bold text-uppercase text-center m-0 p-0">
                        <?php echo $title ?>
                    </h4>

                    <div class="mt-2">
                        <?php include(ROOT_PATH . '/app/includes/admin/countDash.php'); ?>
                        <?php include(ROOT_PATH . '/app/includes/tables/AccountRequestTable.php'); ?>
                        <?php include(ROOT_PATH . '/app/includes/modals/AccountRequestModal.php'); ?>
                    </div>
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
                url: '/bhcm.com/app/controllers/accounts/requestAccount.php',
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
                        $('#RequestTable').DataTable({
                            'columnDefs': [{
                                'targets': [3],
                                'orderable': false,
                            }, ],
                        });
                    }
                }
            });
        }

        // accept btn action
        $(document).on('click', '#getAccept', function(e) {
            e.preventDefault();
            var acceptRequestBtn = $(this).data('id');
            //alert(per_id);
            $('#content-data').html('');
            $.ajax({
                url: '/bhcm.com/app/controllers/accounts/requestAccount.php',
                type: 'POST',
                data: 'acceptRequestBtn=' + acceptRequestBtn,
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
            var deleteRequestBtn = $(this).data('id');
            //alert(per_id);
            $('#deleteContent-data').html('');
            $.ajax({
                url: '/bhcm.com/app/controllers/accounts/requestAccount.php',
                type: 'POST',
                data: 'deleteRequestBtn=' + deleteRequestBtn,
                dataType: 'html'
            }).done(function(data) {
                $('#deleteContent-data').html('');
                $('#deleteContent-data').html(data);
            }).fail(function() {
                $('#deleteContent-data').html('<p>Error</p>');
            });
        });


        setTimeout(function() {
            $("#alertLoginSuccess").remove();
        }, 5000);
    });
    </script>
</body>

</html>
