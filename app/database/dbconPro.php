<?php
    session_start();
    include('dbVar.php');
    // PROCEDURAL <--
    $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    // echo "Database Connection is Successful!";

    include('dd.php');
?>
