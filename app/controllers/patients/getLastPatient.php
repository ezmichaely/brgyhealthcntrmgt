<?php
    include('../../../path.php');
    include_once(ROOT_PATH . '/app/database/dbconPro.php');
    include_once(ROOT_PATH . '/app/helpers/function.php');
    
    $table1 = 'patients';
    $table2 = 'consultations';

    //get last ID
	$LastPatientID = '';
    $sqlcheckLastPatientID = 'SELECT patient_id FROM ' .$table1. ' ORDER BY patient_id DESC LIMIT 1';

    $checkLastPatientID = mysqli_query($conn, $sqlcheckLastPatientID);
    $LastPatientID = mysqli_fetch_array($checkLastPatientID);

    
    $date = date('Y');
    $PAdate = 'PA-'.$date;

    if(empty($LastPatientID)) {
        $LastPatientID = $PAdate.'0000001';
    }
    else {
        $fetchLastPatientID = $LastPatientID['patient_id'];
        $id = str_replace($PAdate, '', $fetchLastPatientID);
        $idnew = str_pad($id + 1, 7, 0, STR_PAD_LEFT);
        $LastPatientID = $PAdate.$idnew;
    }
    echo json_encode(['status' => 'success', 'patient_id' => $LastPatientID]);
?>
