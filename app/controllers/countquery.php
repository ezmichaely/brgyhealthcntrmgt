<?php 
    $queryPatients = "SELECT COUNT(*) FROM patients";
    $queryConsultations = "SELECT COUNT(*) FROM consultations";
    $queryStaff = "SELECT COUNT(*) FROM accounts WHERE account_type = 1";
    $queryNurse = "SELECT COUNT(*) FROM accounts WHERE account_type = 2";
    $queryAccounts = "SELECT COUNT(*) FROM accounts";

    $resultPatients = mysqli_query($conn, $queryPatients);
    $rowPatients = mysqli_fetch_array($resultPatients);

    $resultConsultations = mysqli_query($conn, $queryConsultations);
    $rowConsultations = mysqli_fetch_array($resultConsultations);

    $resultStaff = mysqli_query($conn, $queryStaff);
    $rowStaff = mysqli_fetch_array($resultStaff);

    $resultNurse = mysqli_query($conn, $queryNurse);
    $rowNurse = mysqli_fetch_array($resultNurse);

    $resultAccounts = mysqli_query($conn, $queryAccounts);
    $rowAccounts = mysqli_fetch_array($resultAccounts);

    $totalPatients = $rowPatients[0];
    $totalConsultations = $rowConsultations[0];
    $totalStaff = $rowStaff[0];
    $totalNurse = $rowNurse[0];
    $totalAccounts = $rowAccounts[0];
?>
