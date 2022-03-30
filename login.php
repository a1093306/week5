<?php
    session_start();
?>

<?php
    if(isset($_COOKIE["UID"])){
        $cookieID=$_COOKIE["UID"];
        echo "歡迎".$cookieID."再度光臨";
    }else{
        echo "歡迎初次來本系統";

    }
?>

<html>
    <head>
        <title>會員登入</title>
    </head>

    <body>
        <?php
            echo "<body bgcolor='#B9ACEA'>";
        ?>
        <font face="標楷體">
            <center><h1>會員登入</h1></center>
        </font>
        <br/>
        <center><form action="" method="post" style="width:80%;">
            <font  face="標楷體" size='5'>
            帳號:&nbsp&nbsp<input type="text" name="uname" ><br/><br/>
            密碼:&nbsp&nbsp<input type="password" name="upass" ><br/><br/>
            <input type="submit" value="登入">
            </font>
        </form></center>

        <?php
            $aID="admin";
            $aPWD="5201314";
            $uID="user";
            $uPWD="1093306";

            //date_default_timezone_set('Asia/Taipei');
            //echo date("m-d-y h:i:s",time());
            //header("Refresh:1");
            if(isset($_POST["uname"])){
                if($_POST["uname"]!=null){
                    $uname=$_POST["uname"];
                    $upass=$_POST["upass"];
                    #if(($aID==$uname && $aPWD==$upass)||($uID==$uname && $uPWD==$upass)){
                    $_SESSION["login"]="Yes";
                    setcookie("UID",$uname,time()+17280);
                    if($aID==$uname && $aPWD==$upass){
                        header('Location:admin.php');
                    }else if($uID==$uname && $uPWD==$upass){
                        header('Location:register.php');
                    }else if(($aID!=$uname && $aPWD==$upass)||($aID==$uname && $aPWD!=$upass)||($uID!=$uname && $uPWD==$upass)||($uID==$uname && $uPWD!=$upass)){
                        $_SESSION["login"]="No";
                        header('Location:loginFailed.php');
                    }else{

                        echo "帳號或密碼輸入錯誤";   
                    }
                }else{
                    echo "您尚未輸入帳號或密碼!";
                }
            }else{
                echo "歡迎登入，請輸入帳號密碼";
            }
            //如果出現header already sent
            //ob_flush();
        ?>

    </body>
</html>