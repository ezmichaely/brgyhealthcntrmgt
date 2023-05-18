<?php 
    include('../../../path.php');
    include_once(ROOT_PATH . '/app/database/dbconPro.php');
    include_once(ROOT_PATH . '/app/helpers/function.php');

    // FETCH STAFF
    if (isset($_POST['key']) && $_POST['key'] == 'getExistingDataStaff') {
        $table1 = 'accounts';
        $table2 = 'questions';
        $i = 0;
        $sql = "";
        $sql .= "SELECT * FROM accounts WHERE account_type = 1 AND account_status = 1";
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

                    $account_fullname = $account_firstname. ' ' .$account_lastname;
                    $response .= '
                    <tr>
                        <td>'.++$i.'</td>
                        <td>'.$account_username.'</td>
                        <td class="text-capitalize">'.$account_fullname.'</td>
                        <td>
                            <button type="button" id="getView" class="btn btn-info font-title fw-bold text-uppercase"
                                data-bs-toggle="modal" data-bs-target="#viewAccountModal" data-id="'.$account_id.'">
                                <i class="fa-solid fa-file-lines"></i>
                                <span class="ms-1">View</span>
                            </button>
                            
                            <button type="button" id="getDelete" data-id="'.$account_id.'"
                                data-bs-toggle="modal" data-bs-target="#deleteAccountModal" 
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

    // FETCH NURSE
    if (isset($_POST['key']) && $_POST['key'] == 'getExistingDataNurse') {
        $table1 = 'accounts';
        $table2 = 'questions';
        $i = 0;
        $sql = "";
        $sql .= "SELECT * FROM accounts WHERE account_type = 2 AND account_status = 1";
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

                    $account_fullname = $account_firstname. ' ' .$account_lastname;
                    $response .= '
                    <tr>
                        <td>'.++$i.'</td>
                        <td>'.$account_username.'</td>
                        <td class="text-capitalize">'.$account_fullname.'</td>
                        <td>
                            <button type="button" id="getView" class="btn btn-info font-title fw-bold text-uppercase"
                                data-bs-toggle="modal" data-bs-target="#viewAccountModal" data-id="'.$account_id.'">
                                <i class="fa-solid fa-file-lines"></i>
                                <span class="ms-1">View</span>
                            </button>
                            
                            <button type="button" id="getDelete" data-id="'.$account_id.'"
                                data-bs-toggle="modal" data-bs-target="#deleteAccountModal" 
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

    // FETCH ADMIN
    if (isset($_POST['key']) && $_POST['key'] == 'getExistingDataAdmin') {
        $table1 = 'accounts';
        $table2 = 'questions';
        $i = 0;
        $sql = "";
        $sql .= "SELECT * FROM accounts WHERE account_type = 0 AND account_status = 1";
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

                    $account_fullname = $account_firstname. ' ' .$account_lastname;
                    $response .= '
                    <tr>
                        <td>'.++$i.'</td>
                        <td>'.$account_username.'</td>
                        <td class="text-capitalize">'.$account_fullname.'</td>
                        <td>
                            <button type="button" id="getView" class="btn btn-info font-title fw-bold text-uppercase"
                                data-bs-toggle="modal" data-bs-target="#viewAccountModal" data-id="'.$account_id.'">
                                <i class="fa-solid fa-file-lines"></i>
                                <span class="ms-1">View</span>
                            </button>
                            
                            <button type="button" id="getDelete" data-id="'.$account_id.'"
                                data-bs-toggle="modal" data-bs-target="#deleteAccountModal" 
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

    // VIEW MODAL
    if(isset($_REQUEST['viewAccountBtn'])){
        $id = $_REQUEST['viewAccountBtn'];
        
        $sql = "SELECT accounts.account_id, accounts.account_type, accounts.account_status, 
                accounts.account_firstname, accounts.account_lastname, 
                accounts.account_username, accounts.account_password,
                accounts.question_id, accounts.account_answer, 
                questions.question_name FROM accounts 
                INNER JOIN questions
                WHERE accounts.account_id ='" .$id. "' 
                AND accounts.question_id = questions.question_id";
                
        $stmt = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($stmt);
    
        $account_id = $row['account_id'];
        $account_type = $row['account_type'];
        $account_status = $row['account_status'];
        $account_firstname = $row['account_firstname'];
        $account_lastname = $row['account_lastname'];
        $account_username = $row['account_username'];
        $account_password = $row['account_password'];
        $question_id = $row['question_id'];
        $question_name = $row['question_name'];
        $account_answer = md5($row['account_answer']);
        
        $account_answer = md5($account_answer);
        if ($account_type == 0) {
            $account_type = 'ADMIN';
        }else {
            if($account_type == 1) {
                $account_type = 'STAFF';
            }
            else if($account_type == 2) {
                $account_type = 'NURSE';
            }
        }

        if ($account_status == 1) {
            $account_status = 'VERIFIED';
        }else {
            if($account_status == 0) {
                $account_status = 'NOT VERIFIED';
            }
        }
        // dd($account_answer);

        // require this
        require(ROOT_PATH . '/app/includes/forms/accounts/viewAccountForm.php');
    }//end if 

    // DELETE MODAL
    if(isset($_REQUEST['deleteAccountBtn'])){
        $id = $_REQUEST['deleteAccountBtn'];
        
        $sql = "SELECT * FROM accounts WHERE account_id ='" .$id. "'";
        $stmt = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($stmt);
        $account_id = $row['account_id'];
        
        // require this
        require(ROOT_PATH . '/app/includes/forms/accounts/deleteAccountForm.php');
    } //end if 

    // DELETE ACCOUNT ACTION
    if(isset($_POST['action']) && $_POST['action'] == 'DeleteAccount') {
        $account_id = trimSlash($_POST['account_id']);
       
        $sql = "DELETE FROM accounts WHERE account_id = '" .$account_id. "';";
        // echo $sql;
        $run = mysqli_query($conn, $sql);
        if (!$run) {
            echo json_encode(['status' => 'error', 'errAll' => '<li>Error:' . mysqli_error($conn) . '</li>']);
        } else {
            echo json_encode(['status' => 'success', 'message' => "<li>Account has been deleted!</li>"]);
        } 
    }

    // ADD NEW ADMIN ACCOUNT
    if(isset($_POST['action']) && $_POST['action'] == 'AddAdmin') {
        $account_firstname = trimSlash($_POST['account_firstname']);
        $account_lastname = trimSlash($_POST['account_lastname']);
        $account_username = trimSlash($_POST['account_username']);
        $account_password = md5(trimSlash($_POST['account_password']));
        $question_id = trimSlash($_POST['question_id']);
        $account_answer = trimSlash($_POST['account_answer']);

        $account_type = 0;
        $account_status = 1;

        // get same username
        $sql = "SELECT account_username FROM accounts
                WHERE account_username = '".$account_username."'  LIMIT 1";    
                $stmt = mysqli_query($conn, $sql);
                $row = mysqli_fetch_array($stmt);

        if($row) {
           echo json_encode(['status' => 'error', 'errAll' => '<li>Username is already taken!</li>']);
        } else {
            $sql = "INSERT INTO accounts (account_type, account_status, account_firstname, account_lastname, 
                account_username, account_password, question_id, account_answer)
                VALUES ('$account_type','$account_status','$account_firstname','$account_lastname','$account_username',
                     '$account_password', '$question_id','$account_answer')";
            
            $run = mysqli_query($conn, $sql);
            if (!$run) {
                echo json_encode(['status' => 'error', 'errAll' => '<li>Error:' . mysqli_error($conn) . '</li>']);
            } else {
                echo json_encode(['status' => 'success', 'message' => '<li>New Admin account Added!</li>']);
            }  
        }
    }

    // EDIT ACCOUNT DETAILS
    if(isset($_POST['action']) && $_POST['action'] == 'EditAccount') {
        $account_id = trimSlash($_POST['account_id']);
        $account_firstname = trimSlash($_POST['account_firstname']);
        $account_lastname = trimSlash($_POST['account_lastname']);
        $account_username = trimSlash($_POST['account_username']);
        $account_password = md5(trimSlash($_POST['account_password']));
        $question_id = trimSlash($_POST['question_id']);
        $account_answer = trimSlash($_POST['account_answer']);

        // get same username
        $sql = "SELECT account_id, account_password FROM accounts
                WHERE account_id = '".$account_id."' 
                AND account_password = '".$account_password."' LIMIT 1";    
        $stmt = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($stmt);

        // dd($row);

        if($row) {
            $sql = "UPDATE accounts SET account_firstname = '$account_firstname', 
            account_lastname = '$account_lastname', account_username = '$account_username', 
            question_id = '$question_id', account_answer = '$account_answer'
            WHERE account_id = ".$account_id;
            $run = mysqli_query($conn, $sql);
            
            if (!$run) {
                echo json_encode(['status' => 'error', 'errAll' => '<li>Error:' . mysqli_error($conn) . '</li>']);
            } else {
                echo json_encode(['status' => 'success', 'message' => '<li>Account has been updated!</li>']);
            }  
        } else {
            echo json_encode(['status' => 'error', 'errAll' => '<li>Incorrect password!</li>']);
        }
    }
?>
