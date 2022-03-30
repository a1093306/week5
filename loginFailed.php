<?php

    session_start();

    if(isset($_SESSION['login'])){
        if($_SESSION['login']=="No"){
            echo "非法進入系統</br>";
            echo "<a href='login.php'>回登入首頁</a>";
            exit();
        }
    }

?>