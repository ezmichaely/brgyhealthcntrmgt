<?php 
    // dd($_SESSION);
    if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == true) {
        $id = $_SESSION['id'];        
        $sqlAccount = "SELECT * FROM accounts WHERE account_id=".$id;
        $stmtAccount = mysqli_query($conn, $sqlAccount);
        $rowAcount = mysqli_fetch_array($stmtAccount);
        if($rowAcount) {
            $id = $rowAcount['account_id'];
            $type = $rowAcount['account_type'];
            $status = $rowAcount['account_status'];
            $fname = $rowAcount['account_firstname'];
            $lname = $rowAcount['account_lastname'];
            $username = $rowAcount['account_username'];
            $password = $rowAcount['account_password'];
            $question_id = $rowAcount['question_id'];
            $answer = $rowAcount['account_answer'];

            if($type == 0) {
                $type = 'ADMIN';
            } else if($type == 1) {
                $type = 'STAFF';
            } else if($type == 2) {
                $type = 'NURSE';
            }

            if($status == 0) {
                $status = 'NOT VERIFIED';
            } else if($status == 1) {
                $status = 'VERIFIED';
            }
        }
        
        //get 1 question
        $sqlQuestion = "SELECT * FROM questions WHERE question_id=".$question_id;
        $stmtQuestion = mysqli_query($conn, $sqlQuestion);
        $rowQuestion = mysqli_fetch_array($stmtQuestion);
        if($rowQuestion) {
            $question_name = $rowQuestion['question_name'];
        }

        //get all questions
        $sqlQuestions = "SELECT * FROM questions";
        $stmtQuestions = mysqli_query($conn, $sqlQuestions);
        $rowQuestions = mysqli_fetch_array($stmtQuestions);
    }
?>
