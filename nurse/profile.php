<?php require('../path.php');?>
<?php include(ROOT_PATH . '/app/database/dbconPro.php'); ?>

<?php 
    include(ROOT_PATH . '/app/helpers/middleware.php');
    nurseOnly();
    //dd($_SESSION);
?>

<?php include(ROOT_PATH . '/app/controllers/accounts/infoAccount.php'); ?>

<?php $title = 'Profile'; $page = 'Nurse';?>
<?php include(ROOT_PATH . '/app/includes/staff/head.php') ?>

<body>
    <?php include('../app/includes/staff/header.php') ?>
    <main class="frontend-main container-fluid fluid-padding bg-gray-100">
        <div class="mt-4">
            <div class="modal-dialog modal-lg border border-primary shadow rounded-3">
                <div class="modal-content border-0">
                    <?php include(ROOT_PATH . '/app/includes/forms/accounts/ProfileForm.php'); ?>
                </div>
            </div>
        </div>
    </main>


    <?php include('../app/includes/admin/footer.php') ?>
    <?php include('../app/includes/admin/script.php') ?>
</body>

</html>
