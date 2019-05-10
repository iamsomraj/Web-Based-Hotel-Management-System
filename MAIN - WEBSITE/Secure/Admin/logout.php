<?php
session_start();
$_SESSION["isformfill"]=0;
$_SESSION["prebookcheck"] = 1;
header("location:admin-login.php");
?>