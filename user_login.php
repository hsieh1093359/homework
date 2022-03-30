<?php
session_start();

if(isset($_COOKIE["m_account"])){
    $cookieId = $_COOKIE["m_account"];
    $cookiePsw = $_COOKIE["m_passwd"];
    echo "歡迎".$cookieId."回來。";
}else{
    echo "恭喜發現本網站！";
}
?>

<html>
<head>
<meta charset="utf-8" />

<title>user_login</title>
</head>
<body bgcolor="#EDD7AE">
<center><font size=60% color=black face ='微軟正黑體'><b>< 會員登入 ></b></font></center>

<br><form action = "" method = "post">

<p align = center>
<font size = '5' face = '微軟正黑體'>
    會員帳號 : <input type = "text" name = "m_account" placeholder = axxxxxxx required><br>
    會員密碼 : <input type = "password" name = "m_passwd" placeholder = ............ required><br>
</font>

<br><input type = "submit" value="登入">
</p>
</form>

<?php

header("Refresh:300");

$u_account = "user";
$u_password = "1021149";
$ad_account = "admin";
$ad_password = "password";

if(isset($_POST["m_account"])){
        $account = $_POST["m_account"];
        $password = $_POST["m_passwd"];
        
    if($u_account == $account && $u_password == $password){
        //echo "登入成功!";
            $_SESSION["login"] = "success";
            $_SESSION["user"] = "yes";
            setcookie("m_account",$u_account,time()+3600);
            setcookie("m_passwd",$u_password,time()+3600);
            header('Location: select_user.php');
    }
    else if($ad_account == $account && $ad_password == $password){
            $_SESSION["login"] = "success";
            $_SESSION["admin"] = "yes";
            setcookie("m_account",$ad_account,time()+3600);
            setcookie("m_passwd",$ad_password,time()+3600);
            header('Location: select_user.php');
    }
    else{
            echo "帳號密碼輸入錯誤！";
    }
}
else{
    echo "歡迎使用，請輸入帳號密碼。";
}
?>

</body>
</html>
