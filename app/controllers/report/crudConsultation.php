<?php 
    include('../../../path.php');
    include_once(ROOT_PATH . '/app/database/dbconPro.php');
    include_once(ROOT_PATH . '/app/helpers/function.php');


    // FETCH CONSULTATIONS
    if (isset($_POST['key']) && $_POST['key'] == 'getExistingDataConsultation') {
        $table1 = 'patients';
        $table2 = 'consultations';
        // dd($_GET);
        $sql = '';
        $sql .= "SELECT * FROM consultations";

        $pcid = trimSlash($_POST['pcid']);
        $start = trimSlash($_POST['start']);
        $limit = trimSlash($_POST['limit']);

        $sql .= ' LIMIT ' .$start. ', ' .$limit;
        $stmt = mysqli_query($conn, $sql);
        
        if($stmt->num_rows > 0 ) {
            $response = '';
            while ($row = mysqli_fetch_array($stmt)){
                $consul_id = $row['consultation_id'];
                    $patient_id = $row['patient_id'];
                    $consul_date = $row['consultation_date'];
                    $consul_temp = $row['consultation_temperature'];
                    $consul_rr = $row['consultation_rr'];
                    $consul_hr = $row['consultation_hr'];
                    $consul_bp = $row['consultation_bp'];
                    $consul_symp = $row['consultation_symptoms'];
                    $consul_find = $row['consultation_findings'];
                    $consul_med = $row['consultation_medications'];
                    
                    $response .= '
                    <tr>
                        <td>'.$consul_date.'</td>
                        <td>'.$consul_symp.'</td>
                        <td>'.$consul_find.'</td>
                        <td>'.$consul_med.'</td>
                        <td>
                            <button type="button" id="getEditConsultation" data-id="'.$consul_id.'" 
                                data-bs-toggle="modal" data-bs-target="#editConsultationModal"
                                class="btn btn-warning font-title fw-bold text-uppercase" >
                                    <i class="fa-solid fa-edit"></i>
                                    <span class="ms-1">EDIT</span>
                            </button>

                            <button type="button" id="getDeleteConsultation" data-id="'.$consul_id.'"
                                data-bs-toggle="modal" data-bs-target="#deleteConsultationModal" 
                                class="btn btn-danger font-title fw-bold text-uppercase">
                                    <i class="fas fa-trash"></i>
                                    <span class="ms-1">DELETE</span>
                            </button>
                        </td>
                    </tr>
                ';
            } exit($response);
        } else {
            exit('reachedMax');
        }
    }


    // ADD CONSULTATIONS
    if(isset($_POST['action']) && $_POST['action'] == 'AddConsultation') {
        // dd($_POST);
        $p_id = trimSlash($_POST['patient_id']);
        $c_date = trimSlash($_POST['consultation_date']);
        $c_temp = trimSlash($_POST['consultation_temperature']);
        $c_rr = trimSlash($_POST['consultation_rr']);
        $c_hr = trimSlash($_POST['consultation_hr']);
        $c_bp = trimSlash($_POST['consultation_bp']);
        $c_symp = trimSlash($_POST['consultation_symptoms']);
        $c_find = trimSlash($_POST['consultation_findings']);
        $c_med = trimSlash($_POST['consultation_medications']);

        // get same patient
        $sql = "INSERT INTO consultations (patient_id, consultation_date, consultation_temperature,
                consultation_rr, consultation_hr, consultation_bp, consultation_symptoms,
                consultation_findings, consultation_medications)
            VALUES ('$p_id','$c_date','$c_temp','$c_rr', '$c_hr', '$c_bp','$c_symp', '$c_find', '$c_med')";

        $run = mysqli_query($conn, $sql);
        if (!$run) {
            echo json_encode(['status' => 'error', 'errAll' => '<li>Error:' . mysqli_error($conn) . '</li>']);
        } else {
            echo json_encode(['status' => 'success', 'message' => '<li>Consultation Record Added!</li>']);
        }  
        
    }

    // EDIT CONSULTATION
    if(isset($_REQUEST['editConsultationBtn'])){
        $id = $_REQUEST['editConsultationBtn'];
        
        $sql = "SELECT * FROM consultations WHERE consultation_id ='" .$id. "'";
        $stmt = mysqli_query($conn, $sql);
        // $row = mysqli_fetch_array($stmt);

        while($row = mysqli_fetch_array($stmt)){
            $c_id = $row['consultation_id'];
            $p_id = $row['patient_id'];
            $c_date = $row['consultation_date'];
            $c_temp = $row['consultation_temperature'];
            $c_rr = $row['consultation_rr'];
            $c_hr = $row['consultation_hr'];
            $c_bp = $row['consultation_bp'];
            $c_symp = $row['consultation_symptoms'];
            $c_find = $row['consultation_findings'];
            $c_med = $row['consultation_medications'];
        }//end while
        
        // require this
        require(ROOT_PATH . '/app/includes/forms/report/editConsultationForm.php');
    }//end if 

    // EDIT ACTION CONSULTATION
    if(isset($_POST['action']) && $_POST['action'] == 'EditConsultation') {

        // dd($_POST);
        $c_id = trimSlash($_POST['consultation_id']);
        $p_id = trimSlash($_POST['patient_id']);
        $c_date = trimSlash($_POST['consultation_date']);
        $c_temp = trimSlash($_POST['consultation_temperature']);
        $c_rr = trimSlash($_POST['consultation_rr']);
        $c_hr = trimSlash($_POST['consultation_hr']);
        $c_bp = trimSlash($_POST['consultation_bp']);
        $c_symp = trimSlash($_POST['consultation_symptoms']);
        $c_find = trimSlash($_POST['consultation_findings']);
        $c_med = trimSlash($_POST['consultation_medications']);

        $sql = "UPDATE consultations SET patient_id = '$p_id', consultation_date = '$c_date', 
            consultation_temperature = '$c_temp', consultation_rr = '$c_rr', 
            consultation_hr = '$c_hr', consultation_bp = '$c_bp',
            consultation_symptoms = '$c_symp', consultation_findings = '$c_find',
            consultation_medications = '$c_med'
            WHERE consultation_id = ".$c_id.";";
        // echo $sql;
        $run = mysqli_query($conn, $sql);
        if (!$run) {
            echo json_encode(['status' => 'error', 'errAll' => '<li>Error:' . mysqli_error($conn) . '</li>']);
        } else {
            echo json_encode(['status' => 'success', 'message' => "<li>Consultation Record has been Updated!</li>"]);
        }  
    }

    // DELETE CONSULTATION
    if(isset($_REQUEST['deleteConsultationBtn'])){
        $id = $_REQUEST['deleteConsultationBtn'];
        
        $sql = "SELECT * FROM consultations WHERE consultation_id ='" .$id. "'";
        $stmt = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($stmt);
        $c_id = $row['consultation_id'];
     
        // require this
        require(ROOT_PATH . '/app/includes/forms/report/deleteConsultationForm.php');
    } //end if 

    // DELETE ACTION CONSULTATION
    if(isset($_POST['action']) && $_POST['action'] == 'DeleteConsultation') {
        $c_id = trimSlash($_POST['consultation_id']);
        // echo $c_id;

        
        $sql = "DELETE FROM consultations WHERE consultation_id = '" .$c_id. "';";
        // echo $sql;
        $run = mysqli_query($conn, $sql);
        if (!$run) {
            echo json_encode(['status' => 'error', 'errAll' => '<li>Error:' . mysqli_error($conn) . '</li>']);
        } else {
            echo json_encode(['status' => 'success', 'message' => "<li>Consultation record has been deleted!</li>"]);
        } 
    }
?>
