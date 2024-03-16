<?php session_start(); ?>

<?php
    if (isset($_SESSION['userdata'])) {
        unset($_SESSION['userdata']);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/indexStyle.css">
    <link rel="shortcut icon" href="./img/stLogo.png">
    <link rel="stylesheet" href="main.css">
    <title>Statistic database</title>
</head>
<body>
    <div class="login-conatainer">
        <form action="action/login.php" method="post" class="frost-glass" autocomplete="off">
            <img src="./img/stLogo.png">
            <input type="text" name="username" id="username" placeholder="username">
            <input type="password" name="password" id="password" placeholder="password">
            
                <?php
                if (isset($_SESSION['err'])) {
                    echo '<div class="err-msg">';
                    echo $_SESSION['err'];
                    unset($_SESSION['err']);
                    echo '</div>';
                }
                ?>
            <button type="submit" name="submit">เข้าสู่ระบบ</button>
        </form>
    </div>
</body>
</html>