<?php
    session_start();
    if (!isset($_SESSION['userdata']) || !isset($_SESSION['role']) || $_SESSION['role'] !== 'adm' ) {
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

    <link rel="stylesheet" href="../css/adm_dashStyle.css">
    <link rel="stylesheet" href="../../../main.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <title>Admin dashboard</title>
</head>
<body>
    <?php include_once('../header/header.php') ?>
    
    <div class="welcome-card">
        <h1>Dashboard</h1>
        <p>ยินดีต้อนรับ <?= $_SESSION['userdata']['fname'] ?> <?= $_SESSION['userdata']['lname'] ?></p>
    </div>
    
</body>
</html>