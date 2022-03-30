<html>
    <head>
        <title>會員身分</title>
    </head>

    <body>
        <?php
            echo "<body bgcolor='#B9ACEA'>";
        ?>
        <font face="標楷體">
            <center><h1>會員身分</h1></center>
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

            if(isset($_POST["uname"])){
                if($_POST["uname"]!=null){
                    $uname=$_POST["uname"];
                    $upass=$_POST["upass"];
                    if($aID==$uname && $aPWD==$upass){
                        $_SESSION["login"]="Yes";
                        setcookie("UID",$uname,time()+17280);
                        header('Location:admin.php');
                    }else if($uID==$uname && $uPWD==$upass){
                        $_SESSION["login"]="Yes";
                        setcookie("UID",$uname,time()+17280);
                        header('Location:register.php');
                    }else{
                        $_SESSION["login"]="No";
                        setcookie("UID",$uname,time()+17280);
                        header('Location:loginFailed.php');   
                    }
                }
            }
        ?>

    <body>
</html>