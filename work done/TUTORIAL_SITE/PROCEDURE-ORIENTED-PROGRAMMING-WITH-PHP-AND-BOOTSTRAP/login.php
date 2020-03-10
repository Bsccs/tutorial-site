<?php
  

include 'connection.php';
session_start();
if(isset($_SESSION['user_id']))
{
	header('location:index.php');
}

if(isset($_POST['button']))
{
	$email=$_POST['email'];
	$Password=$_POST['password'];

	$result=mysqli_query($connection,"SELECT * 
	FROM `login` WHERE  email ='".$email."'AND password ='".$Password."'");

	$count = mysqli_num_rows($result);
 	
		if($count == 1) {
          $row = mysqli_fetch_assoc($result);

          if($row['role'] == "admin"){

         $_SESSION['user_id'] = $row['login_id'];
         $_SESSION['user_type'] = $row['role'];
         
         header("location:ADMIN/dashboard.php");

      } else if($row['role'] == "teacher")
      {
             $_SESSION['user_id'] = $row['login_id'];
             $_SESSION['user_type'] = $row['role'];
         
         header("location:CONTENT-DEVELOPER/dashboard.php");
 
      }

      else if($row['role'] == "inspector")
      {
             $_SESSION['user_id'] = $row['login_id'];
             $_SESSION['user_type'] = $row['role'];
         
         header("location: inspector.php");

 
      }
         else if($row['role'] == "student")
      {
             $_SESSION['user_id'] = $row['login_id'];
             $_SESSION['user_type'] = $row['role'];
         
         header("location: student.php");

 
      }
  }
        else 
      {/*
        $_SESSION['login_error'] = "invalid username and password";
        header("location: login.php");*/
          echo "<script>alert('username and password are incorrect')</script>";
        echo "<script>window.location='login.php'</script>";

       

       /* echo "<script>alert('username and password are incorrect')</script>";
        echo "<script>window.location='login.php'</script>";*/
      }
   }





/*



	if(mysqli_num_rows($result)==1)
	{
		$row_data=mysqli_fetch_assoc($result);

		$_SESSION['user_id']=$row_data['login_id'];


        header('location:dashboard.php');
    }
    else
	{
        echo" <script> alert('You Have Entered Incorrect Password!');</script>";
        exit();
    }

}*/
?>


<?php include("includes/header.php") ?>
<?php include("includes/nav.php") ?>
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
								<a href="login.php" class="active" id="login-form-link">Login</a>
							</div>
							<div class="col-xs-6">
								<a href="register.php" id="">Register</a>
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
												<input type="submit" name="button" onclick="return login_page();"  id="button" tabindex="4" class="form-control btn btn-login" value="Log In">
											</div>
										</div>
									</div>
									</form>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-12">
												<div class="text-center">
													<a href="recover.php" tabindex="5" class="forgot-password">Forgot Password?</a>
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
		
<?php include("includes/footer.php") ?>

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