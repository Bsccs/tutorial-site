<html>

<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <meta name="description" content="Login - Register Template">
    <meta name="author" content="Lorenzo Angelino aka MrLolok">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login-reg.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        body {
            background-color: #303641;
        }
    </style>
</head>

<body>
    <div id="container-register">
        <div id="title">
            <i class="material-icons lock">lock</i> Register
        </div>

        <form>
            <div class="input">
                <div class="input-addon">
                    <i class="material-icons">email</i>
                </div>
                <input id="email" placeholder="name@gmail.com" type="email" name="email" required class="validate" autocomplete="off">
                <span id="sp1" style="color:red"></span>
            </div>

            <div class="clearfix"></div>

            <div class="input">
                <div class="input-addon">
                    <i class="material-icons">face</i>
                </div>
                <input id="fullname" placeholder="fullname" name="name" type="text" required class="validate" autocomplete="off">
                </div>
                <span id="sp2" style="color:red"></span>
            

            <div class="clearfix"></div>

            <div class="input">
                <div class="input-addon">
                    <i class="material-icons">vpn_key</i>
                </div>
                <input id="password" placeholder="Password" name="password"type="password" required class="validate" autocomplete="off">
            </div>
            <span id="sp3" style="color:red"></span>

            <div class="remember-me">
                <input type="checkbox">
                <span style="color: #DDD">I accept Terms of Service</span>
            </div>

            <input type="submit" value="Register" />
        </form>

        <div class="register">
            Do you already have an account?
            <a href="login.php"><button id="register-link">Log In here</button></a>
        </div>
    </div>
</body>

</html>

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

<?php

include 'connection.php';


if(isset($_POST['button']))
{
    $name=$_POST['firstname'];

    $email=$_POST['email'];

    $Password=$_POST['password'];
    mysqli_query($connection,"INSERT INTO `registration_table`(`Email`, `Address`, `Phone`, `Gender`, `Qualification`, `photo`, `district`, `Username`, `Password`, `name`) 
VALUES ('$email','$Address','$Phone','$Gender','$Qualification','$photo','$district','$Username','$Password','$name')");

    }
        
?>


        
