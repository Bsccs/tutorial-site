<?php
session_start();
include_once('CLASS/function.php');
require 'PLUGINS/PHPMailer/PHPMailerAutoload.php';
$otp = rand(1000,9999);
if(isset($_POST['recover-submit']))
{
	$email=$_POST['email'];
	$password=$_POST['password'];
	$_SESSION['user_info'] =array('email' =>$email,'password'=>$password );
	$_SESSION['u_id']=$otp;
echo "<script>alert('ENTER THE OTP.');</script>";
   $mail = new PHPMailer;
 
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';                       // Specify main and backup server
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'hackerzdom@gmail.com';                   // SMTP username
$mail->Password = 'hackerzdom@123#';               // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable encryption, 'ssl' also accepted
$mail->Port = 465;       
/*$mail->SMTPDebug = 2;*/                             //Set the SMTP port number - 587 for authenticated TLS
$mail->setFrom('hackerzdom@gmail.com', 'HACKERZDOM');     //Set who the message is to be sent from

$mail->addAddress($email); 
           
//$mail->addCC('example@xyz.com', 'name');
//$mail->addBCC('example@xyz.com', 'name');
$mail->WordWrap = 50;                                  
        
$mail->isHTML(true);                                   
 
$mail->Subject = "otp from hackerzdom";
$mail->Body    = "<html>
<head>
<meta charset='utf-8'>
<title>HACKERZDOM</title>
</head>

<body>

<table width='200' border='1'>
  <tr>
    <th scope='row'>Mail From</th>
    <td>TUTORIAL SITE</td>
  </tr>
 
  <tr>
    <th scope='row'>YOUR OTP IS</th>
    <td>$otp</td>
  </tr>
</table>

</body>
</html>
";
  $mail->AltBody = 'msg';
 
  //Read an HTML message body from an external file, convert referenced images to embedded,
  //convert HTML into a basic plain-text alternative body
  //$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
 
  if(!$mail->send()) 
  {
     echo 'Message could not be sent.';
     echo 'Mailer Error: ' . $mail->ErrorInfo;
     exit;
  }
echo "<script>window.location.href='otp3.php'</script>";

}
?>







<?php include'includes/login-header.php'?>

    <div class="row">
				<div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3">
					<div class="alert-placeholder">
	
					</div>
					<div class="panel panel-success">
						<div class="panel-body">
							<div class="row">
								<div class="col-lg-12">
									<div class="text-center"><h2><b>Recover Password</b></h2></div>
									<form id="register-form"  method="post" role="form" autocomplete="off">
										<div class="form-group">
											<label for="email">Email Address</label>
											<input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="" autocomplete="off" /><span id="sp1" style="color:red"></span>
										</div>
										<div class="form-group">
											<label for="password">New password</label>
											<input type="password" name="password" id="password" tabindex="1" class="form-control" placeholder="enter new password" value="" autocomplete="off" /><span id="sp2" style="color:red"></span>
										</div>
										<div class="form-group">
											<div class="row">

												<div class="col-lg-6 col-sm-6 col-xs-6">
													<a href="login.php"><input type="cancel" name="cancel-submit" id="cencel-submit" tabindex="2" class="form-control btn btn-danger" value="Cancel" /></a>
												</div>
												<div class="col-lg-6 col-sm-6 col-xs-6">
													<input type="submit"onclick="return recover();" name="recover-submit" id="recover-submit" tabindex="2" class="form-control btn btn-success" value="Send otp " />
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
	function recover()
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
			document.getElementById('sp2').innerHTML="password required";
			//alert('name required');
			return false;
		}



	}

</script>
<script type="text/javascript">

if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
</html>