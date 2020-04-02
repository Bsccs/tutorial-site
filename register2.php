 <style>

h1 {
  color: black;
  text-align: center;
  margin: 0 0 5% 0;
  padding: 0.2em;
  margin: 0 0 2% 0;

}

</style>
<?php
session_start();
// include Function  file
include_once('CLASS/function.php');

require 'PLUGINS/PHPMailer/PHPMailerAutoload.php';

$otp = rand();

// Object creation

if(isset($_POST['register-submit']))
{
// Posted Values
$uemail=$_POST['email'];
$uname=$_POST['username'];
$gender=$_POST['gender'];
$country=$_POST['country'];
$state=$_POST['state'];
$phone=$_POST['phone'];
$age=$_POST['age'];
$password=$_POST['password'];

$_SESSION['user_info'] = array('email' =>$uemail , 'username'=>$uname ,'gender'=>$gender ,'country'=>$country, 'state'=>$state,'phone'=>$phone,'age'=>$age,'password'=>$password );

	$_SESSION['u_id']=$otp;

// Message for successfull insertion
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

$mail->addAddress($uemail); 
           
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
echo "<script>window.location.href='otp.php'</script>";

}


?>



<?php include'includes/login-header.php'?>
<h1><i class="fas fa-user-graduate"></i> <U>CONTENT DEVELOPER REGISTRATION</U></h1>
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
								<a href="login.php"><i class="fas fa-key"></i> Login</a>
							</div>
							<div class="col-xs-6">
								<a href="register2.php" class="active" id=""><i class="fas fa-registered"></i> Register</a>
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="register-form" method="post" role="form" autocomplete="off" >
									<div class="form-group">
										<input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email" value="" required ><span id="sp1" style="color:red"></span>
									</div>
									<div class="form-group">
										<input type="text" name="username" id="username" tabindex="1" class="form-control" onblur="checkusername(this.value)" placeholder="fullname" value="" required ><span id="sp2" style="color:red"></span>
									</div>

									<div class="form-group">
										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password" required><span id="sp8" style="color:red"></span>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" onclick="return reg_valid();" value="Register Now">
											</div>
										</div>
									</div>
								</form>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-12">
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

function reg_valid()
	{
		
		var email=document.getElementById('email').value;

		var name=document.getElementById('username').value;

		var gender=document.getElementById('gender').value;

		var country=document.getElementById('country').value;

		var state=document.getElementById('state').value;
		
		var phone=document.getElementById('phone').value;
		
		var age=document.getElementById('age').value;	
		
		var Password=document.getElementById('password').value;


		if(email==""|| email.indexOf('@')==-1 || email.indexOf('.')==-1)
		{
			document.getElementById('sp1').innerHTML="mail@gmail.com required";
			return false;
		}

		if(name=="")
		{
			document.getElementById('sp2').innerHTML="fullname required";
			return false;
		}

		if(gender=="")
		{
			document.getElementById('sp3').innerHTML="Gender required";
			return false;
		}

		if(country=="")
		{
			document.getElementById('sp4').innerHTML="country required";
			//alert('name required');
			return false;
		}

		if(state=="")
		{
			document.getElementById('sp5').innerHTML="state required";
			//alert('name required');
			return false;
		}


		if(phone=="" || isNaN(phone) || phone.length>10)
		{
			document.getElementById('sp6').innerHTML="mobile number required";
			return false;
		}

		if(age=="")
		{
			document.getElementById('sp7').innerHTML="age required";
			//alert('name required');
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
 <script>
function checkusername(va) {
  $.ajax({
  type: "POST",
  url: "check_availability.php",
  data:'username='+va,
  success: function(data){
  $("#usernameavailblty").html(data);
  }
  });

}
</script>
