<?php
session_start();
    if(isset($_SESSION["user"])&& $_SESSION["login"] = "success"){
        echo "<a href = 'logout.php'>登出</a>";
    }else{
        header('Location: failed.php');
    }
?>

<html>
<head>
<title>register_page</title>
</head>
<body bgcolor="#EDD7AE">
<center><font size=60% color=black face ='微軟正黑體'><b>< 會員註冊 ></b></font></center>

<br><form action = "member_information.php" method = "post">

<p align = center>
<font size = '5' face = '微軟正黑體'>
    帳號 : <input type = "text" name = "account" placeholder = axxxxxxx required><br>
    密碼 : <input type = "password" name = "passwd" placeholder = ............ required><br>
    Email : <input type = "email" name = "Email" placeholder = abc@mail.nuk.edu.tw required><br>
    電話 : <input type = "text" name = "phone" placeholder = 09xxxxxxxx required><br>

    <br><input type = "submit" value="會員註冊">
</font></p>
</form>
</body>
</html>
