<?php
session_start();
$_SESSION['templevel']=2;
include "../site files/viewcontent.php";
//unset($_SESSION['templevel']);
?>