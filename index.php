<?php require('path.php');?>
<?php include(ROOT_PATH . '/app/database/dbconPro.php'); ?>

<?php 
    include(ROOT_PATH . '/app/helpers/middleware.php');
    loggedIN();
?>

<?php  $title = 'Brgy Tinaogan Health Center Management System'; $page = 'home';?>
<?php include ROOT_PATH . '/app/includes/home/head.php'?>

<body>

    <main class="homepage-main container-fluid index">
        <div class="full-page">
            <!-- card -->
            <div class="bg-white rounded-2 shadow mx-3 my-4">
                <div class=" container-md border border-primary p-0 rounded-2">
                    <div class="index-card d-flex justify-content-center align-items-center flex-row">
                        <?php include ROOT_PATH . '/app/includes/home/brand/brand-index.php'?>
                        <?php include ROOT_PATH . '/app/includes/home/forms/loginform.php'?>
                    </div>
                </div>
            </div>
            <!-- end of card -->
        </div>
    </main>


    <?php include ROOT_PATH . '/app/includes/home/footer.php'?>
    <?php include ROOT_PATH . '/app/includes/home/script.php'?>
    <script>
    setTimeout(function() {
        $("#alertRegisterSuccess").remove();
        $("#alertLoggedInError").remove();
    }, 10000);
    </script>
</body>

</html>
