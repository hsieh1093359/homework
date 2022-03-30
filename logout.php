<?php
session_start();
session_destroy();
setcookie("m_account",$account,time()-3600);
header('Location: user_login.php');
?>