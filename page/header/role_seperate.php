<?php

    session_start();

    if (isset($_SESSION['role'])) {
        if ($_SESSION['role'] == 'adm') {
            header('location: ../admin_dashboard.php');
        }
        elseif ($_SESSION['role'] == 'std') {
            header('location: ../student_dashboard.php');
        }
        // elseif ($_SESSION['role'] == 'tea') {
        //     header('location: ../teacher_dashboard.php');
        // }
        else {
            header('location: ../../index.php');
        }
    }
    else {
        header('location: ../../index.php');
    }

?>