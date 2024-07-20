<?php
    session_start();
    if (!isset($_SESSION['userdata']) || !isset($_SESSION['role']) || $_SESSION['role'] !== 'std' ) {
        $_SESSION['err'] = 'กรุณาเข้าสู่ระบบ';
        header('location: ../../index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../img/stLogo.png">

    <link rel="stylesheet" href="../css/std_dashStyle.css">
    <link rel="stylesheet" href="../../../main.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <title>Student dashboard</title>
</head>
<body>
    <?php include_once('../../header/header.php') ?>

    <div class="main-container">
        <div class="std-welcome-card">
            <p>ยินดีต้อนรับ <?php echo $_SESSION['userdata']['fname'] ?> <?php echo $_SESSION['userdata']['lname'] ?> </p>
            <p>ID : <?php echo $_SESSION['userdata']['username'] ?></p>
        </div>
    </div>
    
</body>
</html>