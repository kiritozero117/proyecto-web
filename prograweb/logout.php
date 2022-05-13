<?php
session_start();
session_destroy();
$newURL="index.php";
//echo 'You have been logged out. <a href="login.php">Go back</a>';
echo'<script type="text/javascript">
        alert("Cerrando cesión  ");
        window.location.href="home.php";
        </script>';
//header('Location: '.$newURL);
?>