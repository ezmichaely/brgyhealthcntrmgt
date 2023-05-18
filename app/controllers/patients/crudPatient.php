<?php 
    include('../../../path.php');
    include_once(ROOT_PATH . '/app/database/dbconPro.php');
    include_once(ROOT_PATH . '/app/helpers/function.php');

    // FETCH PATIENTS
    if (isset($_POST['key']) && $_POST['key'] == 'getExistingData') {
        $table1 = 'patients';
        $table2 = 'consultations';

        $sqlPatients = '';
        $sqlPatients .= 'SELECT patients.patient_id, patients.patient_category, 
                patients.patient_firstname, patients.patient_middlename, patients.patient_lastname, patients.patient_suffix,
                patients.patient_age, patients.patient_contactno, patients.patient_guardianspouse, patients.patient_guardianspouseno,
                SUM(IF(consultations.patient_id IS NULL, 0, 1)) AS consulCount, 
                category.category_id, category.category_type FROM ' .$table1.
				' LEFT JOIN ' .$table2. ' ON patients.patient_id = consultations.patient_id 
                LEFT JOIN `category` ON patients.patient_category = category.category_id';


        $start = trimSlash($_POST['start']);
        $limit = trimSlash($_POST['limit']);

        $sqlPatients .= ' GROUP BY patient_id ';
        $sqlPatients .= ' LIMIT ' .$start. ', ' .$limit;
        $stmtPatients = mysqli_query($conn, $sqlPatients);
        
        if($stmtPatients->num_rows > 0 ) {
            $response = '';
            while ($rowPatients = mysqli_fetch_array($stmtPatients)){

                    $patient_id = $rowPatients['patient_id'];
                    $category_type = $rowPatients['category_type'];
                    $patient_firstname = $rowPatients['patient_firstname'];
                    $patient_middlename = $rowPatients['patient_middlename'];
                    $patient_lastname = $rowPatients['patient_lastname'];
                    $patient_suffix = $rowPatients['patient_suffix'];
                    $patient_age = $rowPatients['patient_age'];
                    $patient_contactno = $rowPatients['patient_contactno'];
                    $patient_guardianpouse = $rowPatients['patient_guardianspouse'];
                    $patient_guardianpouseno = $rowPatients['patient_guardianspouseno'];
                    $consulCount = $rowPatients['consulCount'];
                    $patient_fullname = $patient_firstname. ' ' .$patient_middlename. ' ' .$patient_lastname. ' ' .$patient_suffix;
                    

                    if($patient_contactno == "0") {
                        $patient_contactno = "";
                    }
                    $response .= '
                    <tr>
                        <td id="patient_'.$patient_id.'">'.$patient_id.'</td>
                        <td>'.$category_type.'</td>
                        <td class="text-capitalize">'.$patient_fullname.'</td>
                        <td>'.$patient_age.'</td>
                        <td>'.$consulCount.'</td>
                        <td>
                            <button type="button" id="getEdit" class="btn btn-warning font-title fw-bold text-uppercase"
                                data-bs-toggle="modal" data-bs-target="#editPatientModal" data-id="'.$patient_id.'">
                                <i class="fa-solid fa-edit"></i>
                                <span class="ms-1">EDIT</span>
                            </button>
                            
                            <button type="button" class="btn btn-info">
                                <i class="fa-solid fa-file-lines"></i>
                                <span class="ms-1">
                                    <a href="patients-info.php?id='.$patient_id.'" target="_blank" class="text-dark">View</a>
                                </span>
                            </button>
                        </td>
                    </tr>
                ';
            } exit($response);
        } else {
            exit('reachedMax');
        }
    }

    // ADD PATIENTS
    if(isset($_POST['action']) && $_POST['action'] == 'AddPatient') {
        $table1 = 'patients';
        $table2 = 'consultations';

        //get last ID
        $LastPatientID = '';
        $sqlcheckLastPatientID = 'SELECT patient_id FROM ' .$table1. ' ORDER BY patient_id DESC LIMIT 1';

        $checkLastPatientID = mysqli_query($conn, $sqlcheckLastPatientID);
        $LastPatientID = mysqli_fetch_array($checkLastPatientID);

        
        $date = date('Y');
        $PAdate = 'PA-'.$date;

        if(empty($LastPatientID)) {
            $LastPatientID = $PAdate.'0000001';
        }
        else {
            $fetchLastPatientID = $LastPatientID['patient_id'];
            $id = str_replace($PAdate, '', $fetchLastPatientID);
            $idnew = str_pad($id + 1, 7, 0, STR_PAD_LEFT);
            $LastPatientID = $PAdate.$idnew;
        }

        if(empty($_POST['patient_middlename'])) {
            $patient_middlename = "";
        } else {
            $patient_middlename = trimSlash($_POST['patient_middlename']);
        }

        if(empty($_POST['patient_suffix'])) {
            $patient_suffix = "";
        } else {
            $patient_suffix = trimSlash($_POST['patient_suffix']);
        }

        if(empty($_POST['patient_contactno'])) {
            $patient_contactno = "";
        } else {
            $patient_contactno = trimSlash($_POST['patient_contactno']);
        }

        $patient_id = $LastPatientID;
        $patient_category = trimSlash($_POST['patient_category']);
        $patient_firstname = trimSlash($_POST['patient_firstname']);
        $patient_lastname = trimSlash($_POST['patient_lastname']);
        $patient_age = trimSlash($_POST['patient_age']);
        $patient_dob = trimSlash($_POST['patient_dob']);
        $patient_weight = trimSlash($_POST['patient_weight']);
        $patient_height = trimSlash($_POST['patient_height']);
        $patient_gender = trimSlash($_POST['patient_gender']);
        $patient_address = trimSlash($_POST['patient_address']);
        $patient_pob = trimSlash($_POST['patient_pob']);
        $patient_nationality = trimSlash($_POST['patient_nationality']);
        $patient_civilstatus = trimSlash($_POST['patient_civilstatus']);
        $patient_guardianspouse = trimSlash($_POST['patient_guardianspouse']);
        $patient_guardianspouseno = trimSlash($_POST['patient_guardianspouseno']);

        // dd($_POST); 
        // get same patient
        $sql = "SELECT patient_firstname, patient_middlename, patient_lastname, patient_suffix FROM patients
                WHERE patient_firstname = '".$patient_firstname."'
                AND patient_middlename = '".$patient_middlename."'
                AND patient_lastname = '".$patient_lastname."'
                AND patient_suffix = '".$patient_suffix."' LIMIT 1";     
        $stmt = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($stmt);

        // dd($row);
        if($row) {
           echo json_encode(['status' => 'error', 'errAll' => '<li>Patient is already registered!</li>']);
        } else {
            $sql = "INSERT INTO patients (patient_id, patient_category, patient_firstname, patient_middlename, 
                patient_lastname, patient_suffix, patient_age, patient_dob, patient_gender, 
                patient_contactno, patient_weight, patient_height, patient_address, 
                patient_pob, patient_nationality, patient_civilstatus, patient_guardianspouse, 
                patient_guardianspouseno)
                VALUES ('$patient_id', '$patient_category', '$patient_firstname', '$patient_middlename',
                        '$patient_lastname', '$patient_suffix', '$patient_age', '$patient_dob','$patient_gender',
                        '$patient_contactno', '$patient_weight','$patient_height', '$patient_address',
                        '$patient_pob','$patient_nationality', '$patient_civilstatus',
                        '$patient_guardianspouse', '$patient_guardianspouseno')";

            $run = mysqli_query($conn, $sql);

            // dd($run); 
            if (!$run) {
                echo json_encode(['status' => 'error', 'errAll' => '<li>Error:' . mysqli_error($conn) . '</li>']);
            } else {
                echo json_encode(['status' => 'success', 'message' => '<li>New Patient Added!</li>']);
            }  
        }
    }

    // EDIT PATIENTS
    if(isset($_REQUEST['editPatientBtn'])){
        $id = $_REQUEST['editPatientBtn'];
        
        $sqlcat = "SELECT * FROM `category` ORDER BY category_type ASC";
        $stmtcat = mysqli_query($conn, $sqlcat);

        $sqlcivilstatus = "SELECT * FROM `civilstatus` ORDER BY civilstatus_name ASC";
        $stmtcivilstatus = mysqli_query($conn, $sqlcivilstatus);

        $sqlpatients = "SELECT * FROM patients 
            INNER JOIN `category` 
            INNER JOIN `civilstatus` 
            WHERE `patient_id` ='" .$id. "' 
            AND `category_id` = `patient_category`
            AND `civilstatus_id` = `patient_civilstatus`";
            $stmtpatients = mysqli_query($conn, $sqlpatients);
            // dd($sqlpatients);
        // $rowpatients = mysqli_fetch_array($stmtpatients);
        // dd($rowpatients);

        
        while($rowpatients = mysqli_fetch_array($stmtpatients)){
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
            
        }//end while
        
        // require this
        require(ROOT_PATH . '/app/includes/forms/patients/editPatientForm.php');
    }//end if 


    // EDIT ACTION PATIENTS
    if(isset($_POST['action']) && $_POST['action'] == 'EditPatient') {
        $patient_id = trimSlash($_POST['patient_id']);
        $patient_category = trimSlash($_POST['patient_category']);
        $patient_firstname = trimSlash($_POST['patient_firstname']);
        $patient_middlename = trimSlash($_POST['patient_middlename']);
        $patient_lastname = trimSlash($_POST['patient_lastname']);
        $patient_suffix = trimSlash($_POST['patient_suffix']);
        $patient_age = trimSlash($_POST['patient_age']);
        $patient_gender = trimSlash($_POST['patient_gender']);
        $patient_dob = trimSlash($_POST['patient_dob']);
        $patient_pob = trimSlash($_POST['patient_pob']);
        $patient_weight = trimSlash($_POST['patient_weight']);
        $patient_height = trimSlash($_POST['patient_height']);
        $patient_contactno = trimSlash($_POST['patient_contactno']);
        $patient_address = trimSlash($_POST['patient_address']);
        $patient_nationality = trimSlash($_POST['patient_nationality']);
        $patient_guardianspouse = trimSlash($_POST['patient_guardianspouse']);
        $patient_guardianspouseno = trimSlash($_POST['patient_guardianspouseno']);
        $patient_civilstatus = trimSlash($_POST['patient_civilstatus']);

        // echo json_encode(['status' => 'success', 'message' => '<li>Error:' . dd($_POST) . '</li>']);
        
        $sql = "UPDATE patients SET patient_category = '$patient_category',
            patient_firstname = '$patient_firstname', patient_middlename = '$patient_middlename',
            patient_lastname = '$patient_lastname', patient_suffix = '$patient_suffix',
            patient_age = '$patient_age', patient_dob = '$patient_dob', patient_pob = '$patient_pob', 
            patient_weight = '$patient_weight', patient_height = '$patient_height', 
            patient_contactno = '$patient_contactno', patient_address = '$patient_address',
            patient_nationality = '$patient_nationality', patient_guardianspouse = '$patient_guardianspouse',
            patient_guardianspouseno = '$patient_guardianspouseno', patient_civilstatus = '$patient_civilstatus'
            WHERE patient_id = '" .$patient_id. "';";
        // echo $sql;
        $run = mysqli_query($conn, $sql);
        if (!$run) {
            echo json_encode(['status' => 'error', 'errAll' => '<li>Error:' . mysqli_error($conn) . '</li>']);
        } else {
            echo json_encode(['status' => 'success', 'message' => "<li>Patient's Record has been Updated!</li>"]);
        }
    }
?>
