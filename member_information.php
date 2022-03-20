<html>
<head>
<title>member_information</title>
</head>

<body bgcolor="#EDD7AE">
<center>
    <font size=60% color=black face ='微軟正黑體'><b>< 註冊資訊 ></b></font></center>

<form action = "login.php" method = "post">
<?php
$account = $_POST["account"];
$passwd = $_POST["passwd"];
$Email = $_POST["Email"];
$phone = $_POST["phone"];

echo "會員帳號：".$account."<br>";
echo "會員密碼：".$passwd."<br>";
echo "會員帳號：".$Email."<br>";
echo "會員帳號：".$phone."<br>";
?>
    <br><input type = "submit" value="登入頁面">
</form>
</body>
</html>