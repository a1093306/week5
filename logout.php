<?php
    session_start();
    session_destroy();
    //setcookie("UID",$uname,time()-36);
    header('Location:login.php');

?>