<?php
session_start();
session_destroy();
$newURL="index.php";
echo 'You have been logged out. <a href="login.php">Go back</a>';
//header('Location: '.$newURL);
?>