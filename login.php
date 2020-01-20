

<html>

<head>
    <meta charset="UTF-8">
    <title>LOGIN-PAGE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/login-reg.css">
    <link rel="stylesheet" href="css/icon.css" >
    <style>
        body {
            background-color: #303641;
             }
    </style>
</head>

<body>
	<form method="post">
    <div id="container-login">
        <div id="title">
            <i class="material-icons lock">lock</i> Login
        </div>

        <form>
            <div class="input">
                <div class="input-addon">
                    <i class="material-icons">email</i>
                </div>
                <input id="username" placeholder="Enter Email" type="text" name="usename" required class="validate" autocomplete="off">
            </div>

            <div class="clearfix"></div>

            <div class="input">
                <div class="input-addon">
                    <i class="material-icons">vpn_key</i>
                </div>
                <input id="password" placeholder="Password" type="password" name="password" required class="validate" autocomplete="off">
            </div>

            <div class="remember-me">
                <input type="checkbox">
                <span style="color: #DDD">Remember Me</span>
            </div>

            <input type="submit" value="Log In" name="button" value="regist"/>
        </form>

        <div class="forgot-password">
            <a href="#">Forgot your password?</a>
        </div>
        <div class="register">
            Don't have an account yet?
            <a href="#"><button id="register-link">Register here</button></a>
        </div>
    </div>
</body>

</html>


<?php
include 'connection.php';
session_start();
if(isset($_SESSION['user_id']))
{
	header('location:index2.php');
}

if(isset($_POST['button']))
{
	$Username=$_POST['usename'];
	$Password=$_POST['password'];
	$result=mysqli_query($connection,"SELECT * 
	FROM `registration_table` WHERE  Username ='".$Username."'AND Password ='".$Password."'");
	if(mysqli_num_rows($result)==1)
	{
		$row_data=mysqli_fetch_assoc($result);

		$_SESSION['user_id']=$row_data['login_id'];


        header('location:index2.php');
    }
    else
	{
        echo" <script> alert('You Have Entered Incorrect Password!');</script>";
        exit();
    }

}
?>