<?php
    //如果出現header already sent
    //ob_start;
    session_start();

    if(isset($_SESSION['login'])){
        if($_SESSION['login']=="Yes"){
            echo "<a href='logout.php'>登出系統</a></br>";
            echo "Welcom to Admin!";
        }else{
            echo "非法進入系統</br>";
            echo "<a href='login.php'>回登入首頁</a>";
            exit();
        }
    }else{
        echo "非法進入系統</br>";
        echo "<a href='login.php'>回登入首頁</a>";
        exit();
    }

?>