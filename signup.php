<?php require('path.php');?>
<?php include_once(ROOT_PATH . '/app/database/dbconPro.php'); ?>

<?php 
    $sql = "SELECT * FROM questions";
    $stmt = mysqli_query($conn, $sql);
?>

<?php $title = 'Brgy Tinaogan Health Center Management System'; $page = 'home';?>
<?php include ROOT_PATH . '/app/includes/home/head.php'?>


<body>
    <main class="homepage-main index overflow-hidden container-fluid">
        <section class="full-page">

            <!-- card -->
            <div class="bg-white rounded-2 shadow my-3 d-block">
                <div class="border border-primary p-0 rounded-2">
                    <div class="index-card d-flex justify-content-center align-items-center flex-column">
                        <?php include ROOT_PATH . '/app/includes/home/brand/brand-register.php';?>
                        <?php include ROOT_PATH . '/app/includes/home/forms/registerform.php'?>
                    </div>
                </div>
            </div>
            <!-- end of card -->

        </section>
    </main>

    <?php include ROOT_PATH . '/app/includes/home/footer.php'?>
    <?php include ROOT_PATH . '/app/includes/home/script.php'?>
</body>

</html>
