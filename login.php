<style>
body{
	margin-top: 80px;
}
</style>
<?php
session_start();
require_once'connect.php';
// include Function  file
include_once('CLASS/function.php');
// Object creation
$usercredentials=new DB_con();
if(isset($_POST['button']))
{
// Posted Values
$uemail=mysqli_real_escape_string($connection,$_POST['email']);
$pasword=$_POST['password'];
//Function Calling
$ret=$usercredentials->signin($uemail,$pasword);


if(mysqli_num_rows($ret) > 0)
{
	$row=mysqli_fetch_assoc($ret);

	if($row['role'] == "admin"){

         $_SESSION['login_id'] = $row['login_id'];
         $_SESSION['role'] = $row['role'];
         
         
         header("location:ADMIN/index.php");

      } else if($row['role'] == "con_developer")
      {
             $_SESSION['login_id'] = $row['login_id'];
             $_SESSION['role'] = $row['role'];
             $_SESSION['name1'] = $row['name1'];
             $_SESSION['id']=$row['developer_id'];
         
         header("location:site files/INDEX.php");
 
      }

      else if($row['role'] == "inspector")
      {
             $_SESSION['login_id'] = $row['login_id'];
             $_SESSION['role'] = $row['role'];
             $_SESSION['name2'] = $row['name2'];
         
         header("location:INSPECTOR/INDEX.php");

 
      }
         else if($row['role'] == "student")
      {
             $_SESSION['login_id'] = $row['login_id'];
             $_SESSION['role'] = $row['role'];
			 $_SESSION['name']= $row['name'];
			 $_SESSION['id']= $row['student_id'];
			 mysqli_query($connection,"UPDATE `student_details` SET `last_login` = now()");
			 //in db last login should be in time stamp.
         header("location: index2.php");					

 
      }

}
else
{
echo "<script>alert('Invalid details. Please try again');</script>";
echo "<script>window.location.href='login.php'</script>";
}
}
?>

 <style>

h1 {
  color: black;
  text-align: center;
  margin: 0 0 5% 0;
  padding: 0.2em;
  margin: 0 0 2% 0;

}

</style>

<?php include'includes/login-header.php'?>
<h1><i class="fas fa-user-secret"></i> <U>LOGIN</U></h1>

	<div class="row">
		<div class="col-lg-6 col-lg-offset-3">						
		</div>
	</div>
    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-6">
								<a href="login.php" class="active" id="login-form-link"><i class="fas fa-key"></i> Login</a>
							</div>
							<div class="col-xs-6">
								<a href="register.php" id=""><i class="fas fa-registered"></i> Register</a>
							</div>

						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="login-form"  method="post" role="form" style="display: block;">
									<div class="form-group">
										<input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email" required><span id="sp1" style="color:red"></span>
									</div>
									<div class="form-group">
										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password" required><span id="sp8" style="color:red"></span>
									</div>
									<div class="form-group text-center">
										<input type="checkbox" tabindex="3" class="" name="remember" id="remember">
										<label for="remember"> Remember Me</label>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="button" onclick="return login_page();"  id="button" tabindex="4" class="form-control btn btn-login" value="Log In ">
											</div>
										</div>
									</div>
									</form>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-12">
												<div class="text-center">
													<a href="recover.php" tabindex="5" class="forgot-password">Forgot Password?</a>
												</div><br>
												<div class="text-center">
													<a href="INDEX.php" tabindex="5" class="BACK"><i class="fas fa-backward"></i> GO BACK</a>
												</div>
											</div>
										</div>
									</div>
								
								
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
		
<!-- container closing -->
</div>
</body>
</html>

<script type="text/javascript">
	function login_page()
	{
		var email=document.getElementById('email').value;
		var Password=document.getElementById('password').value;

		if(email==""|| email.indexOf('@')==-1 || email.indexOf('.')==-1)
		{
			document.getElementById('sp1').innerHTML="mail@gmail.com required";
			return false;
		}
				if(Password=="")
		{
			document.getElementById('sp8').innerHTML="password required";
			//alert('name required');
			return false;
		}



	}

</script>