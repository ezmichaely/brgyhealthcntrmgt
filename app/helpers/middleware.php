<?php 
    function staffOnly() {
        if(empty($_SESSION['id'])) {
            $_SESSION['errorLogin'] = 'Please log in first!';
            header('location: ' . BASE_URL . '/index.php');
            exit(0);
        } else {
            if(!empty($_SESSION['admin'])) {
                header('location: ' . BASE_URL . '/admin/index.php');
                exit(0);
            }
            if(!empty($_SESSION['nurse'])) {
                header('location: ' . BASE_URL . '/nurse/index.php');
                exit(0);
            }
        }
    }

    function adminOnly() {
        if(empty($_SESSION['id'])) {
            $_SESSION['errorLogin'] = 'Please log in first!';
            header('location: ' . BASE_URL . '/index.php');
            exit(0);
        } else {
            if(!empty($_SESSION['staff'])) {
                header('location: ' . BASE_URL . '/staff/index.php');
                exit(0);
            }
            if(!empty($_SESSION['nurse'])) {
                header('location: ' . BASE_URL . '/nurse/index.php');
                exit(0);
            }
        }
    }

    function nurseOnly() {
        if(empty($_SESSION['id'])) {
            $_SESSION['errorLogin'] = 'Please log in first!';
            header('location: ' . BASE_URL . '/index.php');
            exit(0);
        } else {
            if(!empty($_SESSION['staff'])) {
                header('location: ' . BASE_URL . '/staff/index.php');
                exit(0);
            }
            if(!empty($_SESSION['admin'])) {
                header('location: ' . BASE_URL . '/admin/index.php');
                exit(0);
            }
        }
    }

    function loggedIN() {
        if(empty($_SESSION['id'])) {
            if(!empty($_SESSION['staff'])) {
                header('location: ' . BASE_URL . '/staff/index.php');
                exit(0);
            }
            if(!empty($_SESSION['nurse'])) {
                header('location: ' . BASE_URL . '/nurse/index.php');
                exit(0);
            }
            if(!empty($_SESSION['admin'])) {
                header('location: ' . BASE_URL . '/admin/index.php');
                exit(0);
            }
        } 
    }
?>
