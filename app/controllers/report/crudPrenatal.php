<?php 
    include('../../../path.php');
    include_once(ROOT_PATH . '/app/database/dbconPro.php');
    include_once(ROOT_PATH . '/app/helpers/function.php');


    // FETCH Prenatal
    if (isset($_POST['key']) && $_POST['key'] == 'getExistingDataPrenatal') {
        $sql = '';
        $sql .= "SELECT * FROM prenatal";

        $ppid = trimSlash($_POST['ppid']);
        $start = trimSlash($_POST['start']);
        $limit = trimSlash($_POST['limit']);

        $sql .= ' LIMIT ' .$start. ', ' .$limit;
        $stmt = mysqli_query($conn, $sql);
        
        if($stmt->num_rows > 0 ) {
            $response = '';
            while ($row = mysqli_fetch_array($stmt)){
                $prenatal_id = $row['prenatal_id'];
                $patient_id = $row['patient_id'];
                $prenatal_date = $row['prenatal_date'];
                $prenatal_temp = $row['prenatal_temperature'];
                $prenatal_rr = $row['prenatal_rr'];
                $prenatal_hr = $row['prenatal_hr'];
                $prenatal_bp = $row['prenatal_bp'];
                $prenatal_sugarlevel = $row['prenatal_sugarlevel'];
                $prenatal_hemoglobin = $row['prenatal_hemoglobin'];
                $prenatal_weight = $row['prenatal_weight'];
                $prenatal_height = $row['prenatal_height'];
                $prenatal_dosename = $row['prenatal_dosename'];
                $prenatal_doselevel = $row['prenatal_doselevel'];
                $prenatal_med = $row['prenatal_medications'];

                $response .= '
                    <tr>
                        <td>'.$prenatal_date.'</td>
                        <td>'.$prenatal_dosename.'</td>
                        <td>'.$prenatal_doselevel.'</td>
                        <td>'.$prenatal_med.'</td>
                        <td>
                            <button type="button" id="getEditPrenatal" data-id="'.$prenatal_id.'" 
                                data-bs-toggle="modal" data-bs-target="#editPrenatalModal"
                                class="btn btn-warning font-title fw-bold text-uppercase" >
                                    <i class="fa-solid fa-edit"></i>
                                    <span class="ms-1">EDIT</span>
                            </button>

                            <button type="button" id="getDeletePrenatal" data-id="'.$prenatal_id.'"
                                data-bs-toggle="modal" data-bs-target="#deletePrenatalModal" 
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


    // ADD Prenatal
    if(isset($_POST['action']) && $_POST['action'] == 'AddPrenatal') {
        // dd($_POST);
        $patient_id = trimSlash($_POST['patient_id']);
        $prenatal_date = trimSlash($_POST['prenatal_date']);
        $prenatal_temp = trimSlash($_POST['prenatal_temperature']);
        $prenatal_rr = trimSlash($_POST['prenatal_rr']);
        $prenatal_hr = trimSlash($_POST['prenatal_hr']);
        $prenatal_bp = trimSlash($_POST['prenatal_bp']);
        $prenatal_sugarlevel = trimSlash($_POST['prenatal_sugarlevel']);
        $prenatal_hemoglobin = trimSlash($_POST['prenatal_hemoglobin']);
        $prenatal_weight = trimSlash($_POST['prenatal_weight']);
        $prenatal_height = trimSlash($_POST['prenatal_height']);
        $prenatal_dosename = trimSlash($_POST['prenatal_dosename']);
        $prenatal_doselevel = trimSlash($_POST['prenatal_doselevel']);
        $prenatal_med = trimSlash($_POST['prenatal_medications']);

        // get same patient
        $sql = "INSERT INTO prenatal (patient_id, prenatal_date, prenatal_temperature,
                prenatal_rr, prenatal_hr, prenatal_bp, prenatal_sugarlevel, prenatal_hemoglobin,
                prenatal_weight, prenatal_height, prenatal_dosename, prenatal_doselevel,
                prenatal_medications)
            VALUES ('$patient_id','$prenatal_date','$prenatal_temp','$prenatal_rr', '$prenatal_hr',
                '$prenatal_bp','$prenatal_sugarlevel', '$prenatal_hemoglobin', '$prenatal_weight',
                '$prenatal_height', '$prenatal_dosename', '$prenatal_doselevel', '$prenatal_med')";

        $run = mysqli_query($conn, $sql);
        if (!$run) {
            echo json_encode(['status' => 'error', 'errAll' => '<li>Error:' . mysqli_error($conn) . '</li>']);
        } else {
            echo json_encode(['status' => 'success', 'message' => '<li>Prenatal Record Added!</li>']);
        }  
        
    }

    // EDIT CONSULTATION
    if(isset($_REQUEST['editPrenatalBtn'])){
        $id = $_REQUEST['editPrenatalBtn'];
        
        $sql = "SELECT * FROM prenatal WHERE prenatal_id ='" .$id. "'";
        $stmt = mysqli_query($conn, $sql);
        // $row = mysqli_fetch_array($stmt);

        while($row = mysqli_fetch_array($stmt)){
            $prenatal_id = $row['prenatal_id'];
            $patient_id = $row['patient_id'];
            $prenatal_date = $row['prenatal_date'];
            $prenatal_temp = $row['prenatal_temperature'];
            $prenatal_rr = $row['prenatal_rr'];
            $prenatal_hr = $row['prenatal_hr'];
            $prenatal_bp = $row['prenatal_bp'];
            $prenatal_sugarlevel = $row['prenatal_sugarlevel'];
            $prenatal_hemoglobin = $row['prenatal_hemoglobin'];
            $prenatal_weight = $row['prenatal_weight'];
            $prenatal_height = $row['prenatal_height'];
            $prenatal_dosename = $row['prenatal_dosename'];
            $prenatal_doselevel = $row['prenatal_doselevel'];
            $prenatal_med = $row['prenatal_medications'];
        }//end while
        
        // require this
        require(ROOT_PATH . '/app/includes/forms/report/editPrenatalForm.php');
    }//end if 

    // EDIT ACTION Prenatal
    if(isset($_POST['action']) && $_POST['action'] == 'EditPrenatal') {

        // dd($_POST);
        $prenatal_id = trimSlash($_POST['prenatal_id']);
        $patient_id = trimSlash($_POST['patient_id']);
        $prenatal_date = trimSlash($_POST['prenatal_date']);
        $prenatal_temp = trimSlash($_POST['prenatal_temperature']);
        $prenatal_rr = trimSlash($_POST['prenatal_rr']);
        $prenatal_hr = trimSlash($_POST['prenatal_hr']);
        $prenatal_bp = trimSlash($_POST['prenatal_bp']);
        $prenatal_sugarlevel = trimSlash($_POST['prenatal_sugarlevel']);
        $prenatal_hemoglobin = trimSlash($_POST['prenatal_hemoglobin']);
        $prenatal_weight = trimSlash($_POST['prenatal_weight']);
        $prenatal_height = trimSlash($_POST['prenatal_height']);
        $prenatal_dosename = trimSlash($_POST['prenatal_dosename']);
        $prenatal_doselevel = trimSlash($_POST['prenatal_doselevel']);
        $prenatal_med = trimSlash($_POST['prenatal_medications']);
        
        $sql = "UPDATE prenatal SET patient_id = '$patient_id', prenatal_date = '$prenatal_date', 
            prenatal_temperature = '$prenatal_temp', prenatal_rr = '$prenatal_rr', 
            prenatal_hr = '$prenatal_hr', prenatal_bp = '$prenatal_bp',
            prenatal_sugarlevel = '$prenatal_sugarlevel', prenatal_hemoglobin = '$prenatal_hemoglobin',
            prenatal_weight = '$prenatal_weight', prenatal_height = '$prenatal_height', 
            prenatal_dosename = '$prenatal_dosename', prenatal_doselevel = '$prenatal_doselevel',
            prenatal_medications = '$prenatal_med'
            WHERE prenatal_id = ".$prenatal_id.";";
        // echo $sql;
        $run = mysqli_query($conn, $sql);
        if (!$run) {
            echo json_encode(['status' => 'error', 'errAll' => '<li>Error:' . mysqli_error($conn) . '</li>']);
        } else {
            echo json_encode(['status' => 'success', 'message' => "<li>Prenatal Record has been Updated!</li>"]);
        }  
    }

    // DELETE Prenatal
    if(isset($_REQUEST['deletePrenatalBtn'])){
        $id = $_REQUEST['deletePrenatalBtn'];
        
        $sql = "SELECT * FROM prenatal WHERE prenatal_id ='" .$id. "'";
        $stmt = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($stmt);
        $prenatal_id = $row['prenatal_id'];
     
        // require this
        require(ROOT_PATH . '/app/includes/forms/report/deletePrenatalForm.php');
    } //end if 

    // DELETE ACTION Prenatal
    if(isset($_POST['action']) && $_POST['action'] == 'DeletePrenatal') {
        $prenatal_id = trimSlash($_POST['prenatal_id']);
        // echo $prenatal_id;
        
        $sql = "DELETE FROM prenatal WHERE prenatal_id = '" .$prenatal_id. "';";
        // echo $sql;
        $run = mysqli_query($conn, $sql);
        if (!$run) {
            echo json_encode(['status' => 'error', 'errAll' => '<li>Error:' . mysqli_error($conn) . '</li>']);
        } else {
            echo json_encode(['status' => 'success', 'message' => "<li>Prenatal record has been deleted!</li>"]);
        } 
    }
?>
