<?php
//destroy session and redirect ot index.php
session_start();
session_destroy();
header("Location:login.php");
?>
