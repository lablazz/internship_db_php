<?php
    if( !isset($_SESSION['userdata']) || !isset($_SESSION['role']) ) {
        $_SESSION['err'] = 'ข้อมูลผิดพลาดในการเรียกใช้ข้อมูลผู้ใช้';
        header('location: ../../index.php');
    };
?>

<div class="header-components">
    <div class="header-logo">
        <p>Statistic CMU DataBase</p>
    </div>
    <div class="header-nav-menu">
        <ul>
            <li><a href=<?php
                if ($_SESSION['role'] == 'std') {
                    echo 'student_dashboard.php';
                }
                elseif ($_SESSION['role'] == 'adm') {
                    echo 'admin_dashboard.php';
                }
                // elseif ($_SESSION['role'] == 'tea') {
                //     echo 'teacher_dashboard.php';
                // }
            ?>>หน้าแรก</a></li>

            <li><a href=<?php
                if ($_SESSION['role'] == 'std') {
                    echo '../html/student_co_search.php';
                }
                elseif ($_SESSION['role'] == 'adm') {
                    echo '../html/admin_co_search.php';
                }
                elseif ($_SESSION['role'] == 'adm') {
                    echo '../html/teacher_co_search.php';
                }
            ?>>ค้นหาหน่วยงาน</a></li>

            <?php
                if(isset($_SESSION['role']) && ($_SESSION['role'] == 'tea' || $_SESSION['role'] == 'adm')) {
                    echo '<li><a href="">ค้นหานักศึกษา</a></li>';
                }
            ?>

            <li><a href='../../../index.php'>ออกจากระบบ</a></li>
        </ul>
    </div>
</div>