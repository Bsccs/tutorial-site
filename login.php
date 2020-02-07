
<html>

<head>
    <meta charset="UTF-8">
    <title>LOGIN-PAGE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
       <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
       <link rel="stylesheet" href="css/login-reg.css">
    <style>
        body {
            background-color: #303641;
             }
    </style>
</head>

<body>
    
	<form method="post" enctype="multipart/form-data" >
    <div id="container-login">
        <div id="title">
            <i class="fas fa-user-lock"></i> Login
        </div>

        
            <div class="input">
                <div class="input-addon">
                    <i class="fas fa-envelope"></i>
</i>
                </div>
                <input id="email" placeholder="name@gmail.com" type="text" name="email" required class="validate">
            </div>
            <span id="sp1" style="color:red"></span>

            <div class="clearfix"></div>

            <div class="input">
                <div class="input-addon">
                    <i class="fas fa-unlock"></i>
                </div>
                <input id="password" placeholder="Enter Password" type="password" name="password" required class="validate"><span id="sp2" style="color:red"></span>
            </div>
            <span id="sp2" style="color:red"></span><br>

            <input type="submit" value="Log In" name="button" onclick="return valid();" id="submit"><br>  
           <br>
           </form>
        <div class="forgot-password">
            <a href="#">Forgot your password?</a>
        </div>
        <div class="register">
            Don't have an account yet?
            <a href="register.php"><button id="register-link">Register here</button></a>
        </div>
    </div>
    

</body>

</html>
<script type="text/javascript">
	
	function valid()
	{
		var email=document.getElementById('email').value;
		var Password=document.getElementById('password').value;

		if(email==""|| email.indexOf('@')==-1 || email.indexOf('.')==-1)
		{
			document.getElementById('sp1').innerHTML="email required";
			//alert('email required');
			return false;
		}
		if(Password=="")
		{
			document.getElementById('sp2').innerHTML="password required";
			//alert('name required');
			return false;
		}
	}
</script>


<?php
include 'connection.php';
session_start();
if(isset($_SESSION['user_id']))
{
	header('location:admin_dashboard.php');
}

if(isset($_POST['button']))
{
	$Username=$_POST['email'];
	$Password=$_POST['password'];
	$result=mysqli_query($connection,"SELECT * 
	FROM `login` WHERE  username ='".$Username."'AND password ='".$Password."'");
	if(mysqli_num_rows($result)==1)
	{
		$row_data=mysqli_fetch_assoc($result);

		$_SESSION['user_id']=$row_data['login_id'];


        header('location:admin_dashboard.php');
    }
    else
	{
        echo" <script> alert('You Have Entered Incorrect Password!');</script>";
        exit();
    }

}
?>