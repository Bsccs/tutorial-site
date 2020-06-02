<?php
//phpinfo();
include "../site files/session.php";
$tempconid=$_SESSION['tempconid'];
unset($_SESSION['tempconid']);
var_dump($_SESSION);
?>