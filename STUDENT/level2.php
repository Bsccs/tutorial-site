<?php
session_start();
$_SESSION['templevel']=1;
include "../site files/viewcontent.php";
unset($_SESSION['templevel']);
?>