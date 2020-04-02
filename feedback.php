<?php include'includes/header.php'?>

<body>
	<div class="body-wrap">
		<!-- navbar -->

   		<?php include'NAVBAR.php'?> 
   		 
   		<!-- navbar closing -->
  	 		<div class="container">

				<!-- main content -->
				<h1><i class="far fa-envelope"></i> <U>FEEDBACK</U></h1>
				<?php require 'PLUGINS/PHPMailer/PHPMailerAutoload.php';
				
if(isset($_POST["SubmitBtn"])){
				$mail = new PHPMailer;
				$from=$_POST["email"];
				$msg=$_POST["msg"];
 
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';                       // Specify main and backup server
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'hackerzdom@gmail.com';                   // SMTP username
$mail->Password = 'hackerzdom@123#';               // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable encryption, 'ssl' also accepted
$mail->Port = 465;       
/*$mail->SMTPDebug = 2;*/                             //Set the SMTP port number - 587 for authenticated TLS
$mail->setFrom($from, 'feedback');     //Set who the message is to be sent from

$mail->addAddress('hackerzdom@gmail.com'); 
           
//$mail->addCC('example@xyz.com', 'name');
//$mail->addBCC('example@xyz.com', 'name');
$mail->WordWrap = 50;                                  
        
$mail->isHTML(true);                                   
 
$mail->Subject = "FEEDBACK FROM: -- $from";
$mail->Body    = "<html>
<head>
<meta charset='utf-8'>
<title>FEEDBACK</title>
</head>

<body>

<table width='200' border='1'>
  <tr>
    <th scope='row'>MAIL FROM:</th>
    <td>$from</td>
  </tr>
 
  <tr>
    <th scope='row'>FEEDBACK:</th>
    <td>$msg</td>
  </tr>
</table>

</body>
</html>
";
  $mail->AltBody = 'msg';
 

  if(!$mail->send()) 
  {
     echo 'Message could not be sent.';
     echo 'Mailer Error: ' . $mail->ErrorInfo;
     exit;
  }
  echo'<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>message send:</strong> thank you for your valuable feedback.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
/*echo "<script>window.location.href='feedback.php'</script>";*/

}


?>
<style>
.card-body{
    width:auto;
    height:auto;
    border:2px solid #000;
    font-family:verdana,arial,helvetica,sans-serif;
    font-size:15px;
    overflow:auto;
    flex-wrap: auto;
    background-color: #f5f3f3;
 }
 
</style>



</script>
 <div class="card-body">
<form id="emailForm" name="emailForm" method="post" action="" >
<table width="100%" border="0" align="center" cellpadding="4" cellspacing="1">

<tr>
  
</tr>
<tr>
  <td>E-mail :</td>
  <td><input class="form-control" name="email" type="text" id="email"><span id="sp1" style="color:red"></span></td>
</tr>
<tr>
  <td>Message :</td>
  <td>
  <textarea class="form-control" name="msg" cols="45" rows="10" id="msg"></textarea>
  </td>
</tr>

<tr>
  <td>&nbsp;</td>
  <td>
  	<input name="SubmitBtn"  class="btn btn-danger" onclick="return feedback();" type="submit" id="SubmitBtn" value="Submit"></td>
</tr>

</table>
</form>
</div>



				<!-- main content closing -->
			</div>
	</div>
	<!-- validation -->
	<script type="text/javascript">
function feedback()
	{
		var email=document.getElementById('email').value;

		if(email==""|| email.indexOf('@')==-1 || email.indexOf('.')==-1)
		{
			document.getElementById('sp1').innerHTML="mail@gmail.com required";
			return false;
		}

	}
</script>

<!-- to prevent resubmission -->
<script type="text/javascript">

if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>

<?php include'includes/footer.php'?>