<?php require('../path.php');?>
<?php include(ROOT_PATH . '/app/database/dbconPro.php'); ?>

<?php 
    include(ROOT_PATH . '/app/helpers/middleware.php');
    adminOnly();
?>

<?php include(ROOT_PATH . '/app/controllers/accounts/infoAccount.php'); ?>

<?php $title = 'Profile';?>
<?php include(ROOT_PATH . '/app/includes/admin/head.php'); ?>

<body>
    <main class="admin backend-main bg-primary overflow-x-hidden">
        <div class="d-flex justify-content-start align-items-start flex-row">
            <?php include(ROOT_PATH . '/app/includes/admin/aside.php'); ?>

            <section class="main-container" id="main-container">
                <?php include(ROOT_PATH . '/app/includes/admin/header.php'); ?>

                <!-- MAIN CODE HERE -->
                <div class="main-content container-fluid fluid-padding py-4">
                    <!-- action -->
                    <div class="">
                        <div class="modal-dialog modal-lg border border-primary shadow rounded-3">
                            <div class="modal-content border-0">
                                <?php include(ROOT_PATH . '/app/includes/forms/accounts/ProfileForm.php'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>


    <div class="bg-light hr-2"></div>
    <?php include(ROOT_PATH . '/app/includes/admin/footer.php'); ?>
    <?php include(ROOT_PATH . '/app/includes/admin/script.php'); ?>
    <script>
    // setTimeout(function() {
    //     let alert = document.querySelector(".alert");
    //     alert.remove();
    // }, 5000);
    </script>
</body>

</html>
