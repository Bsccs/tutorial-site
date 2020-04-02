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
$email=$_POST['email'];
$name=$_POST['username'];
$password=$_POST['password'];
$expertise=$_POST['expertise'];
  $document=$_FILES["document"]["name"];
$file_details=pathinfo($document);
   $file_ext=$file_details['extension'];
   $file_name=str_replace(" ", "_", strtolower($name)).rand().'.'.$file_ext;
move_uploaded_file($_FILES["document"]["tmp_name"], "doc/".$file_name);

$_SESSION['user_info'] = array('email' =>$email ,'password'=>$password,'username'=>$name,'document'=>$file_name,'expertise'=>$expertise);

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
echo "<script>window.location.href='otp2.php'</script>";

}


?>



<?php include'includes/login-header.php'?>
<h1><i class="fas fa-chalkboard-teacher"></i> <U>CONTENT DEVELOPER REGISTRATION</U></h1>
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
								<form id="register-form" method="post" enctype="multipart/form-data"role="form" autocomplete="off" >
									<div class="form-group">
										<input type="email" name="email" id="email" tabindex="1" class="form-control"  placeholder="Email" value="" required ><span id="sp1" style="color:red"></span>
									</div>
									<div class="form-group">
										<input type="text" name="username" id="username" tabindex="1" class="form-control"  placeholder="fullname" value="" required ><span id="sp2" style="color:red"></span>
									</div>

									<div class="form-group">
										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password" required><span id="sp8" style="color:red"></span>
									</div>
									<div class="form-group">
										<input type="password" name="expertise" id="expertise" tabindex="2" class="form-control" placeholder="expertise" required><span id="sp10" style="color:red"></span>
									</div>
									<label>Qualification document:</label>
									<div class="form-group">
									<input type="file" name="document" id="document" class="form-control" ><span id="sp9" style="color:red"></span>
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
													<p><a href="register.php"tabindex="5" class="BACK"><i class="fas fa-undo"></i> REGISTER AS STUDENT</a></p>
												</div>
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
		
		var Password=document.getElementById('password').value;

		var documents=document.getElementById('document').value;

		var expertise=document.getElementById('expertise').value;


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

		
		if(Password=="")
		{
			document.getElementById('sp8').innerHTML="password required";
			//alert('name required');
			return false;
		}

		if(expertise=="")
		{
			document.getElementById('sp10').innerHTML="expertise required";
			//alert('name required');
			return false;
		}


		if(documents=="")
		{
			document.getElementById('sp9').innerHTML="document required";
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
