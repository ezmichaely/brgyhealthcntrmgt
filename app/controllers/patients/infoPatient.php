<?php 
    if(isset($_GET['id'])) {
        $id = trimSlash($_GET['id']);

       $sqlpatients = "SELECT * FROM patients 
            INNER JOIN `category` 
            INNER JOIN `civilstatus` 
            WHERE `patient_id` ='" .$id. "' 
            AND `category_id` = `patient_category`
            AND `civilstatus_id` = `patient_civilstatus`";

        $stmtpatients = mysqli_query($conn, $sqlpatients);
        $rowpatients = mysqli_fetch_array($stmtpatients);
        // dd($result);
        $patient_id = $rowpatients['patient_id'];
        $patient_category = $rowpatients['patient_category'];
        $patient_firstname = $rowpatients['patient_firstname'];
        $patient_middlename = $rowpatients['patient_middlename'];
        $patient_lastname = $rowpatients['patient_lastname'];
        $patient_suffix = $rowpatients['patient_suffix'];
        $patient_age = $rowpatients['patient_age'];
        $patient_gender = $rowpatients['patient_gender'];
        $patient_dob = $rowpatients['patient_dob'];
        $patient_pob = $rowpatients['patient_pob'];
        $patient_weight = $rowpatients['patient_weight'];
        $patient_height = $rowpatients['patient_height'];
        $patient_contactno = $rowpatients['patient_contactno'];
        $patient_address = $rowpatients['patient_address'];
        $patient_nationality = $rowpatients['patient_nationality'];
        $patient_guardianspouse = $rowpatients['patient_guardianspouse'];
        $patient_guardianspouseno = $rowpatients['patient_guardianspouseno'];
        $patient_civilstatus = $rowpatients['patient_civilstatus'];
        
        $pcategory_id = $rowpatients['category_id'];
        $pcategory_type = $rowpatients['category_type'];
        $pcivilstatus_id = $rowpatients['civilstatus_id'];
        $pcivilstatus_name = $rowpatients['civilstatus_name'];

        if($patient_contactno == "0") {
            $patient_contactno = "";
        }

        $patient_fullname = $patient_firstname . ' ' . $patient_middlename . ' ' . $patient_lastname . ' ' . $patient_suffix;
        $patient_dob = date("F j, Y");
    }
?>
