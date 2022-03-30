
<html>
<head>
<title>admin</title>
</head>
<body bgcolor="#C8D8EE">
<center><font size=60% color=#1BABF8 face ='微軟正黑體'><b>Welcome to admin!</b></font></center>
<hr>

<?php
session_start();
    if(isset($_SESSION["admin"]) && $_SESSION["login"] = "success"){
        echo "<a href = 'logout.php'>登出</a>";
    }else{
        header('Location: failed.php');
    }
?>