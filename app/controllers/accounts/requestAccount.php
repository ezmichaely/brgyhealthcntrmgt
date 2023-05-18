<?php
    include('../../../path.php');
    include_once(ROOT_PATH . '/app/database/dbconPro.php');
    include_once(ROOT_PATH . '/app/helpers/function.php');

    // FETCH REQUEST ACCOUNT
    if (isset($_POST['key']) && $_POST['key'] == 'getExistingData') {
        $table1 = 'accounts';
        $table2 = 'questions';
        $i = 0;
        $sql = "";
        $sql .= "SELECT * FROM accounts WHERE (account_type = 1 OR account_type = 2) AND account_status = 0";
        $start = trimSlash($_POST['start']);
        $limit = trimSlash($_POST['limit']);
        
        $sql .= ' LIMIT ' .$start. ', ' .$limit;
        $stmt = mysqli_query($conn, $sql);
        
        if($stmt->num_rows > 0 ) {
            $response = '';

            while ($row = mysqli_fetch_array($stmt)){    
                    $account_id = $row['account_id'];
                    $account_type = $row['account_type'];
                    $account_status = $row['account_status'];
                    $account_firstname = $row['account_firstname'];
                    $account_lastname = $row['account_lastname'];
                    $account_username = $row['account_username'];
                    $account_password = $row['account_password'];

                    $question_id = $row['question_id'];
                    $account_answer = $row['account_answer'];

                    if($account_type == '1') {
                        $account_type = 'Staff';
                    } else if($account_type == '2') {
                        $account_type = 'Nurse';
                    }

                    $account_fullname = $account_firstname. ' ' .$account_lastname;
                    $response .= '
                    <tr>
                        <td>'.++$i.'</td>
                        <td>'.$account_type.'</td>
                        <td>'.$account_username.'</td>
                        <td class="text-capitalize">'.$account_fullname.'</td>
                        <td>
                            <button type="button" id="getAccept" class="btn btn-success font-title fw-bold text-uppercase"
                                data-bs-toggle="modal" data-bs-target="#acceptRequestModal" data-id="'.$account_id.'">
                                <i class="fa-solid fa-check"></i>
                                <span class="ms-1">ACCEPT</span>
                            </button>
                            
                            <button type="button" id="getDelete" data-id="'.$account_id.'"
                                data-bs-toggle="modal" data-bs-target="#deleteRequestModal" 
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

    // ACCEPT MODAL VIEW
    if(isset($_REQUEST['acceptRequestBtn'])){
        $id = $_REQUEST['acceptRequestBtn'];
        
        $sql = "SELECT * FROM accounts WHERE account_id ='" .$id. "'";
        $stmt = mysqli_query($conn, $sql);
        // $row = mysqli_fetch_array($stmt);

        while($row = mysqli_fetch_array($stmt)){
            $account_id = $row['account_id'];
        }//end while
        
        // require this
        require(ROOT_PATH . '/app/includes/forms/accounts/acceptRequestForm.php');
    }//end if 


    // ACCEPT REQUEST ACCOUNT
    if(isset($_POST['action']) && $_POST['action'] == 'AcceptRequest') {
        $account_id = trimSlash($_POST['account_id']);

        $sql = "UPDATE accounts SET account_status = 1 WHERE account_id = '" .$account_id. "';";
            
        // echo $sql;
        $run = mysqli_query($conn, $sql);
        if (!$run) {
            echo json_encode(['status' => 'error', 'errAll' => '<li>Error:' . mysqli_error($conn) . '</li>']);
        } else {
            echo json_encode(['status' => 'success', 'message' => "<li>Account request has been accepted!</li>"]);
        }
    }

    // DELETE MODAL VIEW
    if(isset($_REQUEST['deleteRequestBtn'])){
        $id = $_REQUEST['deleteRequestBtn'];

        $sql = "SELECT * FROM accounts WHERE account_id ='" .$id. "'";
        $stmt = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($stmt);
        $account_id = $row['account_id'];
     
        // require this
        require(ROOT_PATH . '/app/includes/forms/accounts/deleteRequestForm.php');
    } //end if 

    // DELETE REQUEST ACCOUNT
    if(isset($_POST['action']) && $_POST['action'] == 'DeleteRequest') {

        // dd($_POST);
        $account_id = trimSlash($_POST['account_id']);
        // echo $c_id;
       
        $sql = "DELETE FROM accounts WHERE account_id = '" .$account_id. "';";
        // echo $sql;
        $run = mysqli_query($conn, $sql);
        if (!$run) {
            echo json_encode(['status' => 'error', 'errAll' => '<li>Error:' . mysqli_error($conn) . '</li>']);
        } else {
            echo json_encode(['status' => 'success', 'message' => "<li>Account has been deleted!</li>"]);
        } 
    }

?>
