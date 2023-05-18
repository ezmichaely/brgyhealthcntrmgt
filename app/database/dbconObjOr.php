<?php
    include('dbVar.php');
    
    // OBJECT ORIENTED <--
    $conn = new MySQLi($dbServername, $dbUsername, $dbPassword, $dbName);
    if( $conn->connect_error) {
        die('Database connection error: ' . $conn->connect_error);
    } else {
        // echo 'Database connection successful!';
    }

    include('dd.php');
?>
