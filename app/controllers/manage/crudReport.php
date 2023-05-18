<?php 
    include('../../../path.php');
    include_once(ROOT_PATH . '/app/database/dbconPro.php');
    include_once(ROOT_PATH . '/app/helpers/function.php');


    // FETCH REPORT
    if (isset($_POST['key']) && $_POST['key'] == 'getExistingData') {
        $i = 0;
        $sql = "";
        $sql .= "SELECT * FROM `report`";
        $start = trimSlash($_POST['start']);
        $limit = trimSlash($_POST['limit']);
        
        $sql .= ' LIMIT ' .$start. ', ' .$limit;
        $stmt = mysqli_query($conn, $sql);
        
        if($stmt->num_rows > 0 ) {
            $response = '';

            while ($row = mysqli_fetch_array($stmt)){  
                    $report_id = $row['report_id'];
                    $report_type = $row['report_type'];
                    $response .= '
                    <tr>
                        <td>'.++$i.'</td>
                        <td>'.$report_type.'</td>
                        <td>
                            <button type="button" id="getEdit" class="btn btn-warning font-title fw-bold text-uppercase"
                                data-bs-toggle="modal" data-bs-target="#editReportModal" data-id="'.$report_id.'">
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


    // ADD REPORT
    if(isset($_POST['action']) && $_POST['action'] == 'AddReport') {
        // dd($_POST);
        $report_type = trimSlash($_POST['report_type']);
        
        // get same patient
        $sql = "INSERT INTO `report` (report_type) VALUES ('$report_type')";

        $run = mysqli_query($conn, $sql);
        if (!$run) {
            echo json_encode(['status' => 'error', 'errAll' => '<li>Error:' . mysqli_error($conn) . '</li>']);
        } else {
            echo json_encode(['status' => 'success', 'message' => '<li>New Report Added!</li>']);
        }  
        
    }

    // EDIT REPORT
    if(isset($_REQUEST['editReportBtn'])){
        $id = $_REQUEST['editReportBtn'];
        
        $sql = "SELECT * FROM report WHERE report_id ='" .$id. "'";
        $stmt = mysqli_query($conn, $sql);
        // $row = mysqli_fetch_array($stmt);

        while($row = mysqli_fetch_array($stmt)){
            $report_id = $row['report_id'];
            $report_type = $row['report_type'];
        }//end while
        
        // require this
        require(ROOT_PATH . '/app/includes/forms/manage/editReportForm.php');
    }//end if 


    // EDIT ACTION REPORT
    if(isset($_POST['action']) && $_POST['action'] == 'EditReport') {
        $report_id = trimSlash($_POST['report_id']);
        $report_type = trimSlash($_POST['report_type']);

        $sql = "UPDATE report SET report_type = '$report_type'
            WHERE report_id = '" .$report_id. "';";
        // echo $sql;
        $run = mysqli_query($conn, $sql);
        if (!$run) {
            echo json_encode(['status' => 'error', 'errAll' => '<li>Error:' . mysqli_error($conn) . '</li>']);
        } else {
            echo json_encode(['status' => 'success', 'message' => "<li>Report has been Updated!</li>"]);
        }
    }


?>
