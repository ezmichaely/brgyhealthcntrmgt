<?php 
    include('../../../path.php');
    include_once(ROOT_PATH . '/app/database/dbconPro.php');
    include_once(ROOT_PATH . '/app/helpers/function.php');

    // FETCH IMMUNIZATAION
    if (isset($_POST['key']) && $_POST['key'] == 'getExistingDataImmunization') {
        $table1 = 'patients';
        $table2 = 'immunization';
        // dd($_GET);
        $sql = '';
        $sql .= "SELECT * FROM immunization";

        $piid = trimSlash($_POST['piid']);
        $start = trimSlash($_POST['start']);
        $limit = trimSlash($_POST['limit']);

        $sql .= ' LIMIT ' .$start. ', ' .$limit;
        $stmt = mysqli_query($conn, $sql);
        
        if($stmt->num_rows > 0 ) {
            $response = '';
            while ($row = mysqli_fetch_array($stmt)){
                $immu_id = $row['immunization_id'];
                $patient_id = $row['patient_id'];
                $immu_date = $row['immunization_date'];
                $immu_temp = $row['immunization_temperature'];
                $immu_rr = $row['immunization_rr'];
                $immu_hr = $row['immunization_hr'];
                $immu_bp = $row['immunization_bp'];
                $immu_weight = $row['immunization_weight'];
                $immu_height = $row['immunization_height'];
                $immu_vaccinetype = $row['immunization_vaccinetype'];
                $immu_vaccinename = $row['immunization_vaccinename'];
                
                $response .= '
                <tr>
                    <td>'.$immu_date.'</td>
                    <td>'.$immu_weight.'</td>
                    <td>'.$immu_height.'</td>
                    <td>'.$immu_vaccinetype.'</td>
                    <td>'.$immu_vaccinename.'</td>
                    <td>
                        <button type="button" id="getEditImmunization" data-id="'.$immu_id.'" 
                            data-bs-toggle="modal" data-bs-target="#editImmunizationModal"
                            class="btn btn-warning font-title fw-bold text-uppercase" >
                                <i class="fa-solid fa-edit"></i>
                                <span class="ms-1">EDIT</span>
                        </button>

                        <button type="button" id="getDeleteImmunization" data-id="'.$immu_id.'"
                            data-bs-toggle="modal" data-bs-target="#deleteImmunizationModal" 
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


    // ADD IMMUNIZATAION
    if(isset($_POST['action']) && $_POST['action'] == 'AddImmunization') {
        // dd($_POST);
        $p_id = trimSlash($_POST['patient_id']);
        $immu_date = trimSlash($_POST['immunization_date']);
        $immu_temp = trimSlash($_POST['immunization_temperature']);
        $immu_rr = trimSlash($_POST['immunization_rr']);
        $immu_hr = trimSlash($_POST['immunization_hr']);
        $immu_bp = trimSlash($_POST['immunization_bp']);
        $immu_weight = trimSlash($_POST['immunization_weight']);
        $immu_height = trimSlash($_POST['immunization_height']);
        $immu_vaccinename = trimSlash($_POST['immunization_vaccinename']);
        $immu_vaccinetype = trimSlash($_POST['immunization_vaccinetype']);


        // get same patient
        $sql = "INSERT INTO immunization (patient_id, immunization_date, immunization_temperature,
                immunization_rr, immunization_hr, immunization_bp, immunization_weight,
                immunization_height, immunization_vaccinetype, immunization_vaccinename)
            VALUES ('$p_id','$immu_date','$immu_temp','$immu_rr', '$immu_hr',
                '$immu_bp','$immu_weight', '$immu_height', '$immu_vaccinetype', '$immu_vaccinename')";

        $run = mysqli_query($conn, $sql);
        if (!$run) {
            echo json_encode(['status' => 'error', 'errAll' => '<li>Error:' . mysqli_error($conn) . '</li>']);
        } else {
            echo json_encode(['status' => 'success', 'message' => '<li>Immunization Record Added!</li>']);
        }  
        
    }

    // EDIT IMMUNIZATAION
    if(isset($_REQUEST['editImmunizationBtn'])){
        $id = $_REQUEST['editImmunizationBtn'];
        
        $sql = "SELECT * FROM immunization WHERE immunization_id ='" .$id. "'";
        $stmt = mysqli_query($conn, $sql);
        // $row = mysqli_fetch_array($stmt);

        while($row = mysqli_fetch_array($stmt)){
            $immu_id = $row['immunization_id'];
            $p_id = $row['patient_id'];
            $immu_date = $row['immunization_date'];
            $immu_temp = $row['immunization_temperature'];
            $immu_rr = $row['immunization_rr'];
            $immu_hr = $row['immunization_hr'];
            $immu_bp = $row['immunization_bp'];
            $immu_weight = $row['immunization_weight'];
            $immu_height = $row['immunization_height'];
            $immu_vaccinetype = $row['immunization_vaccinetype'];
            $immu_vaccinename = $row['immunization_vaccinename'];

        }//end while
        
        // require this
        require(ROOT_PATH . '/app/includes/forms/report/editImmunizationForm.php');
    }//end if 

    // EDIT ACTION IMMUNIZATAION
    if(isset($_POST['action']) && $_POST['action'] == 'EditImmunization') {
        // dd($_POST);
        $immu_id = trimSlash($_POST['immunization_id']);
        $p_id = trimSlash($_POST['patient_id']);
        $immu_date = trimSlash($_POST['immunization_date']);
        $immu_temp = trimSlash($_POST['immunization_temperature']);
        $immu_rr = trimSlash($_POST['immunization_rr']);
        $immu_hr = trimSlash($_POST['immunization_hr']);
        $immu_bp = trimSlash($_POST['immunization_bp']);
        $immu_weight = trimSlash($_POST['immunization_weight']);
        $immu_height = trimSlash($_POST['immunization_height']);
        $immu_vaccinetype = trimSlash($_POST['immunization_vaccinetype']);
        $immu_vaccinename = trimSlash($_POST['immunization_vaccinename']);

        $sql = "UPDATE immunization SET patient_id = '$p_id', immunization_date = '$immu_date', 
            immunization_temperature = '$immu_temp', immunization_rr = '$immu_rr', 
            immunization_hr = '$immu_hr', immunization_bp = '$immu_bp',
            immunization_weight = '$immu_weight', immunization_height = '$immu_height',
            immunization_vaccinetype = '$immu_vaccinetype', immunization_vaccinename = '$immu_vaccinename'
            WHERE immunization_id = ".$immu_id.";";
        // echo $sql;
        $run = mysqli_query($conn, $sql);
        if (!$run) {
            echo json_encode(['status' => 'error', 'errAll' => '<li>Error:' . mysqli_error($conn) . '</li>']);
        } else {
            echo json_encode(['status' => 'success', 'message' => "<li>Immunization Record has been Updated!</li>"]);
        }  
    }

    // DELETE IMMUNIZATAION
    if(isset($_REQUEST['deleteImmunizationBtn'])){
        $id = $_REQUEST['deleteImmunizationBtn'];
        
        $sql = "SELECT * FROM immunization WHERE immunization_id ='" .$id. "'";
        $stmt = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($stmt);
        $immu_id = $row['immunization_id'];
     
        // require this
        require(ROOT_PATH . '/app/includes/forms/report/deleteImmunizationForm.php');
    } //end if 

    
    // DELETE ACTION IMMUNIZATAION
    if(isset($_POST['action']) && $_POST['action'] == 'DeleteImmunization') {
        $immu_id = trimSlash($_POST['immunization_id']);
        // echo $immu_id;
        $sql = "DELETE FROM immunization WHERE immunization_id = '" .$immu_id. "';";
        // echo $sql;
        $run = mysqli_query($conn, $sql);
        if (!$run) {
            echo json_encode(['status' => 'error', 'errAll' => '<li>Error:' . mysqli_error($conn) . '</li>']);
        } else {
            echo json_encode(['status' => 'success', 'message' => "<li>Immunization record has been deleted!</li>"]);
        } 
    }
?>
