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
echo "<script>window.location.href='feedback.php'</script>";

}


?>

<form id="emailForm" name="emailForm" method="post" action="" >
<table width="100%" border="0" align="center" cellpadding="4" cellspacing="1">
	
<tr>
  <td colspan="2"><strong>FEEDBACK FORM</strong></td>
</tr>
<tr>
  <td>E-mail :</td>
  <td><input name="email" type="text" id="email"></td>
</tr>
<tr>
  <td>Message :</td>
  <td>
  <textarea name="msg" cols="45" rows="5" id="msg"></textarea>
  </td>
</tr>
<tr>
  <td>&nbsp;</td>
  <td><input name="SubmitBtn" type="submit" id="SubmitBtn" value="Submit"></td>
</tr>
</table>
</form>

				<!-- main content closing -->
			</div>
	</div>


<?php include'includes/footer.php'?>