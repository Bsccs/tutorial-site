<?php

include 'connection.php';

require 'PHPMailer/PHPMailerAutoload.php';

$otp = rand();

if(isset($_POST['Register']))
{
    $name=$_POST['name'];

    $email=$_POST['email'];

    $Password=$_POST['password'];

    mysqli_query($connection,"INSERT INTO `reg`(`email`, `name`, `password`) VALUES ('$email','$name','$Password')");

    $mail = new PHPMailer;
 
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';                       // Specify main and backup server
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'hackerzdom@gmail.com';                   // SMTP username
$mail->Password = 'hackerzdom123#';               // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable encryption, 'ssl' also accepted
$mail->Port = 465;       
/*$mail->SMTPDebug = 2;*/                             //Set the SMTP port number - 587 for authenticated TLS
$mail->setFrom('hackerzdom@gmail.com', 'otp - hackerzdom');     //Set who the message is to be sent from

$mail->addAddress($email); 
           
//$mail->addCC('example@xyz.com', 'name');
//$mail->addBCC('example@xyz.com', 'name');
$mail->WordWrap = 50;                                  
        
$mail->isHTML(true);                                   
 
$mail->Subject = 'otp - hackerzdom';
$mail->Body    = "<html>
<head>
<meta charset='utf-8'>
<title>Safe Land</title>
</head>

<body>

<table width='200' border='1'>
  <tr>
    <th scope='row'>Mail From</th>
    <td>HACKERZDOM</td>
  </tr>
  <tr>
    <th scope='row'>OTP</th>
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

  else
  {
    echo "<script>alert('Message has been sent');</script>";

    
  }
 
 }
        
?>


<html>



<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <style>
        .reg_form{

            margin-top: 320px;


        }
    </style>
</head>

<body>
        <div class="container">
            <div class="reg_form">
        <div class="row">
            <div class="col-sm-3"></div>
          <div class="col-sm-6">
            <input id="email" placeholder="name@gmail.com" type="email" name="email" required class="validate form-control" autocomplete="off">
                <span id="sp1" style="color:red"></span>
            <input id="fullname" placeholder="fullname" name="name" type="text" required class="validate form-control autocomplete="off"> 
                <span id="sp2" style="color:red"></span>
                        
                <input id="password" placeholder="Password" name="password"type="password" required class="validate form-control" autocomplete="off">
                <span id="sp3" style="color:red"></span>

                <span style="color: #DDD">I accept Terms of Service</span>
            

            <input type="submit" value="Register"name="Register" />
        </form>

             Do you already have an account?
            <a href="login.php"><button id="register-link">Log In here</button></a>
        
    </div>
</div>
<div class="col-sm-3"></div>
</div>
</div>
</div>
</body>


</html>
<!-- <script src="js/jquery.min.js"></script> -->

<script src="plugins/jquery/jquery.min.js"></script>

<script src="js/bootstrap.min.js"></script>

<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- <script src="js/bootstrap.bundle.min.js"></script> -->

<!-- Bootstrap 4 -->


<script type="text/javascript">
    
    function valid()
    {
        var email=document.getElementById('email').value;

        var name=document.getElementById('name').value;

        var Password=document.getElementById('password').value;

        if(name=="")
        {
            document.getElementById('sp1').innerHTML="------>name required";
            //alert('name required');
            return false;
        }
        if(email==""|| email.indexOf('@')==-1 || email.indexOf('.')==-1)
        {
            document.getElementById('sp2').innerHTML="----->email required";
            //alert('email required');
            return false;
        }
        if(Password=="")
        {
            document.getElementById('sp10').innerHTML="------>password required";
            //alert('name required');
            return false;
        }
    }
</script>







        
