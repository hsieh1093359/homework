<html>
<head>
<meta charset="utf-8" />
<!-- <link rel="import" href="http://localhost/practice/register.php"/> -->
<title>login_page</title>
</head>
<body bgcolor="#EDD7AE">
<center><font size=60% color=black face ='微軟正黑體'><b>< 會員登入 ></b></font></center>

<br><form action = "Kenting.php" method = "post">

<p align = center>
<font size = '5' face = '微軟正黑體'>
    會員帳號 : <input type = "text" name = "m_account" placeholder = axxxxxxx required><br>
    會員密碼 : <input type = "password" name = "m_passwd" placeholder = ............ required><br>
</font>
<?php 
    // if("account" == "m_account" && "passwd" == "m_passwd"){
    //     header("Location:http://localhost/practice/Kenting.php");
    //     exit; 
    // }
    // else{
    //     header("Location:http://localhost/practice/register.php");
    // }
?>
<br><input type = "submit" value="登入">
</p>
</form>

</body>
</html>
