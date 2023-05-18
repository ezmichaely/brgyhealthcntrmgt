<?php require('../path.php');?>
<?php include(ROOT_PATH . '/app/database/dbconPro.php'); ?>
<?php include(ROOT_PATH . '/app/helpers/function.php'); ?>
<?php include(ROOT_PATH . '/app/controllers/patients/infoPatient.php'); ?>
<?php 
    include(ROOT_PATH . '/app/helpers/middleware.php');
    staffOnly();
    //dd($_SESSION);
?>


<?php $title = "Patient's Records";  $page = 'Staff';?>
<?php include(ROOT_PATH . '/app/includes/staff/head.php') ?>


<body>
    <?php include(ROOT_PATH . '/app/includes/staff/header.php') ?>
    <!-- main -->
    <main class="frontend-main container-fluid fluid-padding bg-gray-300 py-4">
        <div class="bg-success p-2 rounded-3">
            <h2 class=" font-title fw-bold text-white text-center text-uppercase ">
                PATIENT'S records</h2>
        </div>

        <div class="mt-4">
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
    </main>
    <!-- end of main -->

    <div class="bg-light hr-2"></div>

    <?php include(ROOT_PATH . '/app/includes/staff/footer.php') ?>
    <?php include(ROOT_PATH . '/app/includes/staff/script.php') ?>

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
