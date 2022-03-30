<?php
session_start();
if($_SESSION["login"]=="success"){
    echo "歡迎使用！<br>";
    echo "<a href = 'register.php'>user 帳號進入</a><br>";
    echo "<a href = 'admin.php'>admin 帳號進入</a>";
}
?>
