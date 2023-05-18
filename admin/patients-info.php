<?php require('../path.php');?>
<?php include(ROOT_PATH . '/app/database/dbconPro.php'); ?>
<?php include(ROOT_PATH . '/app/helpers/function.php'); ?>
<?php include(ROOT_PATH . '/app/controllers/patients/infoPatient.php'); ?>

<?php 
    include(ROOT_PATH . '/app/helpers/middleware.php');
    adminOnly();

    // dd($rowpatients);
?>


<?php $title = "Patient's Records";?>
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
                    <?php include(ROOT_PATH . '/app/includes/patient-info/patient-info.php'); ?>

                    <?php 
                        if ($patient_category == "1") {
                            include(ROOT_PATH . '/app/includes/tables/consultationTable.php');
                        }
                        
                        else if($patient_category == "2") {
                            include(ROOT_PATH . '/app/includes/tables/consultationTable.php');
                            include(ROOT_PATH . '/app/includes/tables/prenatalTable.php');
                            include(ROOT_PATH . '/app/includes/tables/deliveryTable.php');
                        }

                        else if($patient_category == "3") {
                            include(ROOT_PATH . '/app/includes/tables/consultationTable.php');
                        }

                        else if($patient_category == "4") {
                            include(ROOT_PATH . '/app/includes/tables/consultationTable.php');
                            include(ROOT_PATH . '/app/includes/tables/immunizationTable.php');
                        }
                    ?>
                </div>
            </section>
        </div>
    </main>
    <!-- end of main -->

    <div class="bg-light hr-2"></div>

    <?php include(ROOT_PATH . '/app/includes/admin/footer.php'); ?>
    <?php include(ROOT_PATH . '/app/includes/admin/script.php'); ?>

    <?php 
        if ($patient_category == "1") {
            include(ROOT_PATH . '/app/includes/patient-info/script-Consultation.php');
        }
        
        else if($patient_category == "2") {
            include(ROOT_PATH . '/app/includes/patient-info/script-Consultation.php');
            include(ROOT_PATH . '/app/includes/patient-info/script-Prenatal.php');
            include(ROOT_PATH . '/app/includes/patient-info/script-Delivery.php');
        }

        else if($patient_category == "3") {
            include(ROOT_PATH . '/app/includes/patient-info/script-Consultation.php');
        }

        else if($patient_category == "4") {
            include(ROOT_PATH . '/app/includes/patient-info/script-Consultation.php');
            include(ROOT_PATH . '/app/includes/patient-info/script-Immunization.php');
        }
    ?>
</body>

</html>
