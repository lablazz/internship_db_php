<?php
    session_start();
    if (!isset($_SESSION['userdata']) || !isset($_SESSION['role']) || $_SESSION['role'] !== 'adm' ) {
        $_SESSION['err'] = 'กรุณาเข้าสู่ระบบ';
        header('location: ../index.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img/stLogo.png">
    <link rel="stylesheet" href="../css/std_dashStyle.css">
    <link rel="stylesheet" href="../main.css">
    <title>Student dashboard</title>
</head>
<body>
    <div class="welcome-card">
        <h1>Dashboard</h1>
        <p>ยินดีต้อนรับ <?= $_SESSION['userdata']['fname'] ?> <?= $_SESSION['userdata']['lname'] ?></p>
    </div>
</body>
</html>