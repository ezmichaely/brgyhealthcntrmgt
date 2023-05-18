<?php 
    include('../../../path.php');
    include_once(ROOT_PATH . '/app/database/dbconPro.php');
    include_once(ROOT_PATH . '/app/helpers/function.php');


    // LOGIN
    if(isset($_POST['action']) && $_POST['action'] == 'Login') {
        $account_username = trimSlash($_POST['account_username']);
        $account_password = md5(trimSlash($_POST['account_password']));

        // get same username
        $sqlUser = "";
        $sqlUser .= "SELECT account_username FROM accounts
                WHERE account_username = '".$account_username."' LIMIT 1";  

        $stmtUser = mysqli_query($conn, $sqlUser);
        $rowUser = mysqli_fetch_array($stmtUser);

        // there is a username
        if($rowUser) {
            // dd($stmt);
            $sqlPass = "";
            $sqlPass .= "SELECT * FROM accounts
                WHERE account_username = '".$account_username."'
                AND account_password = '".$account_password."' LIMIT 1";

            $stmtPass = mysqli_query($conn, $sqlPass);
            $rowPass = mysqli_fetch_array($stmtPass);
            // dd($rowPass);
            
            // password correct
            if ($rowPass) {
                $id = $rowPass['account_id'];
                $type = $rowPass['account_type'];
                $status = $rowPass['account_status'];
                $username = $rowPass['account_username'];
                $firstname = $rowPass['account_firstname'];
                
                if($status == 0) {
                    echo json_encode(['status' => 'error', 'errAll' => '<li>Account is not yet verified!</li>']);

                } else if($status == 1) {

                    $_SESSION['loggedin'] = true;
                    $_SESSION['id'] = $id;
                    $_SESSION['username'] = $username;
                    $_SESSION['messageOne'] = "Welcome <span class='text-uppercase fw-bold'>".$firstname."</span> !";
                    $_SESSION['messageTwo'] = "You are logged in successfully!";
                    
                    if ($type == 0) {
                        $_SESSION['admin'] = 'admin';
                        echo json_encode(['status' => 'success', 'id' => $id, 'type' => 'admin']);   
                        exit();
                    } else if ($type == 1) {
                        $_SESSION['staff'] = 'staff';
                        echo json_encode(['status' => 'success',  'id' => $id, 'type' => 'staff' ]);  
                        exit(); 
                    } else if ($type == 2) {
                        $_SESSION['nurse'] = 'nurse';
                        echo json_encode(['status' => 'success',  'id' => $id, 'type' => 'nurse' ]);  
                        exit(); 
                    } 
                }
            }
            else { // incorrect password
                echo json_encode(['status' => 'error', 'errAll' => '<li>Password is incorrect!</li>']);
            }
        }   
        else { // no user
            echo json_encode(['status' => 'error', 'errAll' => "<li>Username doesn't exists!</li>"]);
        }
    }

    // REGISTER
    if(isset($_POST['action']) && $_POST['action'] == 'Register') {
        $account_type = trimSlash($_POST['account_type']);
        $account_firstname = trimSlash($_POST['account_firstname']);
        $account_lastname = trimSlash($_POST['account_lastname']);
        $account_username = trimSlash($_POST['account_username']);
        $account_password = md5(trimSlash($_POST['account_password']));
        $question_id = trimSlash($_POST['question_id']);
        $account_answer = trimSlash($_POST['account_answer']);

        $account_status = 0;

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
                $_SESSION['messageOne'] = 'Account registered successfully!';
                $_SESSION['messageTwo'] = 'Please wait until your account is verified!';

                echo json_encode(['status' => 'success']);   
                exit;
            }  
        }
    }

    // FORGOT PASSWORD
    if(isset($_POST['action']) && $_POST['action'] == 'ForgotPassword') {
        $account_type = trimSlash($_POST['account_type']);
        $account_firstname = trimSlash($_POST['account_firstname']);
        $account_lastname = trimSlash($_POST['account_lastname']);
        $account_username = trimSlash($_POST['account_username']);
        $question_id = trimSlash($_POST['question_id']);
        $account_answer = trimSlash($_POST['account_answer']);

        // dd($_POST);
        // get same username
        $sqlUser = "";
        $sqlUser .= "SELECT account_username FROM accounts
                WHERE account_username = '".$account_username."' LIMIT 1";  

        $stmtUser = mysqli_query($conn, $sqlUser);
        $rowUser = mysqli_fetch_array($stmtUser);

        

        // there is a username
        if($rowUser) {
            $sqlType = "";
            $sqlType .= "SELECT account_username FROM accounts
                WHERE account_username = '".$account_username."' 
                AND account_type = '".$account_type."'LIMIT 1";  
            $stmtType = mysqli_query($conn, $sqlType);
            $rowType = mysqli_fetch_array($stmtType);

            if($rowType) {

                $sqlFirst = "";
                $sqlFirst .= "SELECT * FROM accounts
                    WHERE account_username = '".$account_username."'
                    AND account_firstname = '".$account_firstname."' LIMIT 1";

                $stmtFirst = mysqli_query($conn, $sqlFirst);
                $rowFirst = mysqli_fetch_array($stmtFirst);
                // dd($rowFirst);
                
                // Firstname correct
                if ($rowFirst) {
                    $sqlLast = "";
                    $sqlLast .= "SELECT * FROM accounts
                        WHERE account_username = '".$account_username."'
                        AND account_firstname = '".$account_firstname."'
                        AND account_lastname = '".$account_lastname."' LIMIT 1";
                    $stmtLast = mysqli_query($conn, $sqlLast);
                    $rowLast = mysqli_fetch_array($stmtLast);
                    
                    // Lastname correct
                    if ($rowLast) {
                        $sqlQuest = "";
                        $sqlQuest .= "SELECT * FROM accounts
                            WHERE account_username = '".$account_username."'
                            AND account_firstname = '".$account_firstname."'
                            AND account_lastname = '".$account_lastname."'
                            AND question_id = '".$question_id."' LIMIT 1";
                        $stmtQuest = mysqli_query($conn, $sqlQuest);
                        $rowQuest = mysqli_fetch_array($stmtQuest);

                        // question correct
                        if ($rowQuest) {
                            $sqlAnswer = "";
                            $sqlAnswer .= "SELECT * FROM accounts
                                WHERE account_username = '".$account_username."'
                                AND account_firstname = '".$account_firstname."'
                                AND account_lastname = '".$account_lastname."'
                                AND question_id = '".$question_id."'
                                AND account_answer = '".$account_answer."' LIMIT 1";
                            $stmtAnswer = mysqli_query($conn, $sqlAnswer);
                            $rowAnswer = mysqli_fetch_array($stmtAnswer);
                            
                            // answer
                            if ($rowAnswer) {
                                $id = $rowAnswer['account_id'];
                                $token = generateRandomString();
                                // $_SESSION['token'] = $token;
                                $_SESSION['messageOne'] = 'Account retrieved successfully!';
                                $_SESSION['messageTwo'] = 'Please reset your password!';

                                $sql = "UPDATE accounts SET account_token = '$token' WHERE account_id = ".$id;
                                $run = mysqli_query($conn, $sql);

                                if(!$run) {
                                    echo json_encode(['status' => 'error', 'errAll' => '<li>Error:' . mysqli_error($conn) . '</li>']);
                                } else {
                                    echo json_encode(['status' => 'success', 'id' => $id, 'token' => $token]);
                                }
                                
                            }
                            else { // incorrect question
                                echo json_encode(['status' => 'error', 'errAll' => '<li>Answer is incorrect!</li>']);
                            }
                        }
                        else { // incorrect question
                            echo json_encode(['status' => 'error', 'errAll' => '<li>Question is incorrect!</li>']);
                        } 
                    }
                    else { // incorrect lastname
                        echo json_encode(['status' => 'error', 'errAll' => '<li>Lastname is incorrect!</li>']);
                    }
                }
                else { // incorrect firstname
                    echo json_encode(['status' => 'error', 'errAll' => '<li>Firstname is incorrect!</li>']);
                }
            }
            
            else { // incorrect account type
                echo json_encode(['status' => 'error', 'errAll' => '<li>Account type is incorrect!</li>']);
            }
        }   
        
        else { // no user
            echo json_encode(['status' => 'error', 'errAll' => "<li>Username doesn't exists!</li>"]);
        }
    }

    // RESET PASSWORD
    if(isset($_POST['action']) && $_POST['action'] == 'ResetPassword') {
        $id = trimSlash($_POST['account_id']);
        $token = trimSlash($_POST['account_token']);

        $password = md5(trimSlash($_POST['account_password']));
    
        // get same token
        $sql = "SELECT account_id, account_token FROM accounts
                WHERE account_id = '".$id."'
                AND account_token = '".$token."' LIMIT 1";    
        $stmt = mysqli_query($conn, $sql);
        if($stmt) {
            $row = mysqli_fetch_array($stmt);
            $fetchedtoken = $row['account_token'];
            // dd($sql);
            if( $fetchedtoken == $token) {
                $sql = "UPDATE accounts SET account_password = '$password' WHERE account_id = ".$id;
                $run = mysqli_query($conn, $sql);
                
                if (!$run) {
                    echo json_encode(['status' => 'error', 'errPassword' => '<li>Error:' . mysqli_error($conn) . '</li>']);
                } else {
                    $_SESSION['messageOne'] = 'Password changed successfully!';
                    $_SESSION['messageTwo'] = 'Please dont forget your password again!';
                    echo json_encode(['status' => 'success']);
                }  
            } else {
                $_SESSION['errorMessageOne'] = 'You have entered a wrong linked for password recovery!';
                $_SESSION['errorMessageTwo'] = 'Please request again!';
                echo json_encode(['status' => 'error']);
            }
        } else {
            $_SESSION['errorMessageOne'] = 'You have entered a wrong linked for password recovery!';
            $_SESSION['errorMessageTwo'] = 'Please request again!';
            echo json_encode(['status' => 'error']);
        }
    }
?>
