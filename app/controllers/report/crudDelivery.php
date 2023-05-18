<?php 
    include('../../../path.php');
    include_once(ROOT_PATH . '/app/database/dbconPro.php');
    include_once(ROOT_PATH . '/app/helpers/function.php');


    // FETCH DELIVERY
    if (isset($_POST['key']) && $_POST['key'] == 'getExistingDataDelivery') {
        $sql = '';
        $sql .= "SELECT * FROM delivery
                INNER JOIN `delivery_type`
                ON `delivery_type` = `dtype_id`";
        $pdid = trimSlash($_POST['pdid']);
        $start = trimSlash($_POST['start']);
        $limit = trimSlash($_POST['limit']);

        $sql .= ' LIMIT ' .$start. ', ' .$limit;
        $stmt = mysqli_query($conn, $sql);
        // $row = mysqli_fetch_array($stmt);

        // dd($row);
        
        if($stmt->num_rows > 0 ) {
            $response = '';
            while ($row = mysqli_fetch_array($stmt)){
                // dd($row);
                $delivery_id = $row['delivery_id'];
                $patient_id = $row['patient_id'];
                $delivery_date = $row['delivery_date'];
                $delivery_temp = $row['delivery_temperature'];
                $delivery_rr = $row['delivery_rr'];
                $delivery_hr = $row['delivery_hr'];
                $delivery_bp = $row['delivery_bp'];
                $delivery_age = $row['delivery_age'];
                $delivery_babiesno = $row['delivery_babiesno'];
                $delivery_gender = $row['delivery_gender'];
                $delivery_type = $row['delivery_type'];
                $dtype_id = $row['dtype_id'];
                $dtype_name = $row['dtype_name'];
                
                $response .= '
                <tr>
                    <td>'.$delivery_date.'</td>
                    <td>'.$delivery_age.'</td>
                    <td>'.$delivery_babiesno.'</td>
                    <td>'.$delivery_gender.'</td>
                    <td>'.$dtype_name.'</td>
                    <td>
                        <button type="button" id="getEditDelivery" data-id="'.$delivery_id.'" 
                            data-bs-toggle="modal" data-bs-target="#editDeliveryModal"
                            class="btn btn-warning font-title fw-bold text-uppercase" >
                                <i class="fa-solid fa-edit"></i>
                                <span class="ms-1">EDIT</span>
                        </button>

                        <button type="button" id="getDeleteDelivery" data-id="'.$delivery_id.'"
                            data-bs-toggle="modal" data-bs-target="#deleteDeliveryModal" 
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


    // ADD DELIVERY
    if(isset($_POST['action']) && $_POST['action'] == 'AddDelivery') {
        // $delivery_id = $row['delivery_id'];
        $patient_id = trimSlash($_POST['patient_id']);
        $delivery_date = trimSlash($_POST['delivery_date']);
        $delivery_temp = trimSlash($_POST['delivery_temperature']);
        $delivery_rr = trimSlash($_POST['delivery_rr']);
        $delivery_hr = trimSlash($_POST['delivery_hr']);
        $delivery_bp = trimSlash($_POST['delivery_bp']);
        $delivery_age = trimSlash($_POST['delivery_age']);
        $delivery_babiesno = trimSlash($_POST['delivery_babiesno']);
        $delivery_gender = trimSlash($_POST['delivery_gender']);
        $delivery_type = trimSlash($_POST['delivery_type']);

        // get same patient
        $sql = "INSERT INTO delivery (patient_id, delivery_date, delivery_temperature,
                delivery_rr, delivery_hr, delivery_bp, delivery_age,
                delivery_babiesno, delivery_gender, delivery_type)
            VALUES ('$patient_id','$delivery_date','$delivery_temp','$delivery_rr',
                '$delivery_hr', '$delivery_bp','$delivery_age', '$delivery_babiesno',
                '$delivery_gender', $delivery_type)";

        $run = mysqli_query($conn, $sql);
        if (!$run) {
            echo json_encode(['status' => 'error', 'errAll' => '<li>Error:' . mysqli_error($conn) . '</li>']);
        } else {
            echo json_encode(['status' => 'success', 'message' => '<li>Delivery Record Added!</li>']);
        }  
        
    }

    // EDIT Delivery
    if(isset($_REQUEST['editDeliveryBtn'])){
        $id = $_REQUEST['editDeliveryBtn'];
        
        // $sql = "SELECT * FROM deliverys WHERE delivery_id ='" .$id. "'";
        $sql = "SELECT * FROM delivery
                INNER JOIN `delivery_type`
                ON `delivery_type` = `dtype_id`
                WHERE delivery_id ='" .$id. "'";
        $stmt = mysqli_query($conn, $sql);
        // $row = mysqli_fetch_array($stmt);

        while($row = mysqli_fetch_array($stmt)){
            $delivery_id = $row['delivery_id'];
            $patient_id = $row['patient_id'];
            $delivery_date = $row['delivery_date'];
            $delivery_temp = $row['delivery_temperature'];
            $delivery_rr = $row['delivery_rr'];
            $delivery_hr = $row['delivery_hr'];
            $delivery_bp = $row['delivery_bp'];
            $delivery_age = $row['delivery_age'];
            $delivery_babiesno = $row['delivery_babiesno'];
            $delivery_gender = $row['delivery_gender'];
            $delivery_type = $row['delivery_type'];
            $dtype_id = $row['dtype_id'];
            $dtype_name = $row['dtype_name'];
        }//end while
        
        // require this
        require(ROOT_PATH . '/app/includes/forms/report/editDeliveryForm.php');
    }//end if 

    // EDIT ACTION Delivery
    if(isset($_POST['action']) && $_POST['action'] == 'EditDelivery') {
        $delivery_id = trimSlash($_POST['delivery_id']);
        $patient_id = trimSlash($_POST['patient_id']);
        $delivery_date = trimSlash($_POST['delivery_date']);
        $delivery_temp = trimSlash($_POST['delivery_temperature']);
        $delivery_rr = trimSlash($_POST['delivery_rr']);
        $delivery_hr = trimSlash($_POST['delivery_hr']);
        $delivery_bp = trimSlash($_POST['delivery_bp']);
        $delivery_age = trimSlash($_POST['delivery_age']);
        $delivery_babiesno = trimSlash($_POST['delivery_babiesno']);
        $delivery_gender = trimSlash($_POST['delivery_gender']);
        $delivery_type = trimSlash($_POST['delivery_type']);

        $sql = "UPDATE delivery SET patient_id = '$patient_id', delivery_date = '$delivery_date', 
            delivery_temperature = '$delivery_temp', delivery_rr = '$delivery_rr', 
            delivery_hr = '$delivery_hr', delivery_bp = '$delivery_bp',
            delivery_age = '$delivery_age', delivery_babiesno = '$delivery_babiesno',
            delivery_gender = '$delivery_gender', delivery_type  = '$delivery_type'
            WHERE delivery_id = ".$delivery_id.";";
        // echo $sql;
        $run = mysqli_query($conn, $sql);
        if (!$run) {
            echo json_encode(['status' => 'error', 'errAll' => '<li>Error:' . mysqli_error($conn) . '</li>']);
        } else {
            echo json_encode(['status' => 'success', 'message' => "<li>Delivery Record has been Updated!</li>"]);
        }  
    }

    // DELETE Delivery
    if(isset($_REQUEST['deleteDeliveryBtn'])){
        $id = $_REQUEST['deleteDeliveryBtn'];
        
        $sql = "SELECT * FROM delivery WHERE delivery_id ='" .$id. "'";
        $stmt = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($stmt);
        $delivery_id = $row['delivery_id'];
     
        // require this
        require(ROOT_PATH . '/app/includes/forms/report/deleteDeliveryForm.php');
    } //end if 

    // DELETE ACTION Delivery
    if(isset($_POST['action']) && $_POST['action'] == 'DeleteDelivery') {
        $delivery_id = trimSlash($_POST['delivery_id']);
        // echo $delivery_id;

        
        $sql = "DELETE FROM delivery WHERE delivery_id = '" .$delivery_id. "';";
        // echo $sql;
        $run = mysqli_query($conn, $sql);
        if (!$run) {
            echo json_encode(['status' => 'error', 'errAll' => '<li>Error:' . mysqli_error($conn) . '</li>']);
        } else {
            echo json_encode(['status' => 'success', 'message' => "<li>Delivery record has been deleted!</li>"]);
        } 
    }
?>
