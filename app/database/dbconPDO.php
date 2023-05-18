<?php
    $server = 'localhost';
    $dbname = 'bhcm.com';
    $user = 'root';
    $pass = '';
    
    try {
        $conn = new PDO('mysql:host=' . $server . '; dbname=' . $dbname, $user, $pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo 'Connected!';
        return $conn;

    } catch (PDOException $e) {
        echo 'There is a problem in the connection:' . $e->getMessage();
    }
?>
