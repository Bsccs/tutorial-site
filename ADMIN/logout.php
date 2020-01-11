<?php
session_start();
session_destroy();  //to destroy all the session
header('location:index.php');
?>