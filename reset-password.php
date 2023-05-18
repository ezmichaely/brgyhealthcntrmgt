<?php require('path.php');?>
<?php include(ROOT_PATH . '/app/database/dbconPro.php'); ?>

<?php 
    if(!isset($_GET['id']) && !isset($_GET['token'])) {
        $_SESSION['errorLogin'] = 'You have not requested a password reset! Request first!';
        header('location: ' . BASE_URL . '/index.php');
    } else {
        $idGET = $_GET['id'];
        $tokenGET = $_GET['token'];
    }
?>

<?php $title = 'Brgy Tinaogan Health Center Management System'; $page = 'home';?>
<?php include ROOT_PATH . '/app/includes/home/head.php'?>


<main class="homepage-main container-fluid index">
    <div class="full-page">
        <!-- card -->
        <div class="bg-white rounded-2 shadow mx-3 my-4">
            <div class="container-md border border-primary p-0 rounded-2">
                <div class="index-card d-flex justify-content-center align-items-center flex-column">

                    <?php include ROOT_PATH . '/app/includes/home/brand/brand-register.php';?>
                    <?php include ROOT_PATH . '/app/includes/home/forms/resetpassword.php'?>

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
    $("#alertForgotPasswordSuccess").remove();
}, 5000);
</script>

</body>

</html>
