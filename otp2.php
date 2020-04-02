<?php session_start();
 include'includes/login-header.php';
 include_once('CLASS/function.php');
 $userdata=new  DB_con();

$otp = $_SESSION['u_id'];

if(isset($_POST['submit']))
{
	$verify_otp = $_POST['otp'];


	if($otp == $verify_otp)
	{
		$sql=$userdata->contentdev_signin($_SESSION['user_info']['email'],$_SESSION['user_info']['password'],$_SESSION['user_info']['username'],$_SESSION['user_info']['document'],$_SESSION['user_info']['expertise']);

			echo "<script>alert('Verification success');</script>";
			echo "<script>window.location.href='login.php'</script>";
			session_destroy();


	}
	else
	{
		echo "<script>alert('Invalid otp. Please try again');</script>";

	}
}


 ?>

<div class="row">
				<div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3">
					<div class="alert-placeholder">
	
					</div>
					<div class="panel panel-success">
						<div class="panel-body">
							<div class="row">
								<div class="col-lg-12">
									<div class="text-center"><h2><b>HACKERZDOM</b></h2></div>
									<form id="register-form"  method="post" role="form" autocomplete="off">
										<div class="form-group">
											<label for="email">ENTER OTP</label>
											<input type="text" name="otp" id="otp" tabindex="1" class="form-control" placeholder="enter OTP" value="" autocomplete="off" />
										</div>
										<div class="form-group">
											<div class="row">

												<div class="col-lg-6 col-sm-6 col-xs-6">
													<a href="register2.php"><input type="cancel"  name="varifyt" id="recover-submit" tabindex="2" class="form-control btn btn-danger" value="Cancel" /></a>
												</div>
												<div class="col-lg-6 col-sm-6 col-xs-6">
													<a href="login.php"><input type="submit" name="submit" id="submit" tabindex="2" class="form-control btn btn-success" value="VERIFY" /></a>
												</div>

												
											</div>
										</div>
										<input type="hidden" class="hide" name="token" id="token" value="">
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	
<!-- container closing -->
</div>
</body>
<script type="text/javascript">

if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
</html>