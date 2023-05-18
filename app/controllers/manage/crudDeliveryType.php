<?php 
    include('../../../path.php');
    include_once(ROOT_PATH . '/app/database/dbconPro.php');
    include_once(ROOT_PATH . '/app/helpers/function.php');

    // FETCH DELIVERY TYPE
    if (isset($_POST['key']) && $_POST['key'] == 'getExistingData') {
        $i = 0;
        $sql = "";
        $sql .= "SELECT * FROM `delivery_type`";
        
        $start = trimSlash($_POST['start']);
        $limit = trimSlash($_POST['limit']);
        
        $sql .= ' LIMIT ' .$start. ', ' .$limit;
        $stmt = mysqli_query($conn, $sql);
        
        if($stmt->num_rows > 0 ) {
            $response = '';

            while ($row = mysqli_fetch_array($stmt)){  
                $dtype_id = $row['dtype_id'];
                    $dtype_name = $row['dtype_name'];
                    $response .= '
                    <tr>
                        <td>'.++$i.'</td>
                        <td>'.$dtype_name.'</td>
                        <td>
                            <button type="button" id="getEdit" class="btn btn-warning font-title fw-bold text-uppercase"
                                data-bs-toggle="modal" data-bs-target="#editDeliveryTypeModal" data-id="'.$dtype_id.'">
                                    <i class="fa-solid fa-edit"></i>
                                    <span class="ms-1">Edit</span>
                            </button>
                        </td>
                    </tr>
                ';
            } exit($response);
        } else {
            exit('reachedMax');
        }
    }


    // ADD DELIVERY TYPE
    if(isset($_POST['action']) && $_POST['action'] == 'AddDeliveryType') {
        // dd($_POST);
        $dtype_name = trimSlash($_POST['dtype_name']);
        
        // get same patient
        $sql = "INSERT INTO `delivery_type` (dtype_name) VALUES ('$dtype_name')";

        $run = mysqli_query($conn, $sql);
        if (!$run) {
            echo json_encode(['status' => 'error', 'errAll' => '<li>Error:' . mysqli_error($conn) . '</li>']);
        } else {
            echo json_encode(['status' => 'success', 'message' => '<li>New Delivery Type Added!</li>']);
        }  
        
    }

    // EDIT DELIVERY TYPE
    if(isset($_REQUEST['editDeliveryTypeBtn'])){
        $id = $_REQUEST['editDeliveryTypeBtn'];
        
        $sql = "SELECT * FROM `delivery_type` WHERE dtype_id ='" .$id. "'";
        $stmt = mysqli_query($conn, $sql);
        // $row = mysqli_fetch_array($stmt);

        while($row = mysqli_fetch_array($stmt)){
            $dtype_id = $row['dtype_id'];
            $dtype_name = $row['dtype_name'];
        }//end while
        
        // require this
        require(ROOT_PATH . '/app/includes/forms/manage/editDeliveryTypeForm.php');
    }//end if 

    // EDIT ACTION DELIVERY TYPE 
    if(isset($_POST['action']) && $_POST['action'] == 'EditDeliveryType') {
        $dtype_id = trimSlash($_POST['dtype_id']);
        $dtype_name = trimSlash($_POST['dtype_name']);

        $sql = "UPDATE delivery_type SET dtype_name = '$dtype_name'
            WHERE dtype_id = '" .$dtype_id. "';";
        // echo $sql;
        $run = mysqli_query($conn, $sql);
        if (!$run) {
            echo json_encode(['status' => 'error', 'errAll' => '<li>Error:' . mysqli_error($conn) . '</li>']);
        } else {
            echo json_encode(['status' => 'success', 'message' => "<li>Delivery Type has been Updated!</li>"]);
        }
    }
?>
