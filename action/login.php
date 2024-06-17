<?php 

    session_start();
    require_once('./connect.php');

    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        if (empty($username) || empty($password)) {
            $_SESSION['err'] = "กรุณากรอก username หรือ password";
        } else {
            $query = "SELECT * FROM users WHERE username = ?";
            $check_indb = $conn->prepare($query);
            $check_indb->bind_param('s', $username);
            $check_indb->execute();
            $result = $check_indb->get_result();
            $rows = $result->fetch_assoc();
            if ($rows['password'] == $password) {
                $_SESSION['role'] = $rows['role'];
                $_SESSION['userdata'] = $rows;
                
                if ($rows['role'] == 'std') {
                    header('location: ../page/student_dashboard.php');
                }
                elseif ($rows['role'] == 'adm') {
                    header('location: ../page/admin_dashboard.php');
                }
                else {
                    header('location: ../index.php');
                }
            } else {
                $_SESSION['err'] = 'ไม่พบบัญชีผู้ใช้';
                header("location: ../index.php");
            }
        }
    }
    // header("location: ../index.php");
?>