<!-- php -->
<?php session_start();
	include_once('../site files/classes/admin.php');
include "connect.php";
  $add_login=new admin($connection);
	if(isset($_POST['button']))
		{
  			$email=$_POST['email'];
  			$Password=$_POST['password'];
        $name=$_POST['name'];
  			$type=$_POST['type'];

        $ret=$add_login->add_inspector($email,$Password,$type,$name);
  			echo "<script>alert('details added successfully');</script>";
			echo"<script>window.history.back();</script>";
		}
?>
<style>
          .card-info{
            margin-top: 50px;

        }
</style>
<!-- html part -->
<?php include 'includes/header.php'?>

<h1 class="m-0 text-light">INSERT DETAILS</h1>
</div></div></div></div>  				    			
  		 
    	   <!-- Main content opening -->
    	   	<section class="content">
      			<div class="container">
            <div class="card card-info">
              <div class="card-header">
                <a href="login_details.php"><button type="submit" class="btn btn-default float-right">CANCEL</button></a>              
              </div>
              <form class="form-horizontal-sm" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">EMAIL</label>
                    <div class="col-sm-10">
                      <input type="email" name="email" class="form-control" id="email" placeholder="Email"><span id="sp1" style="color:red"></span>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="password" class="col-sm-2 col-form-label">PASSWORD</label>
                    <div class="col-sm-10">
                      <input type="password" name="password" class="form-control" id="password" placeholder="Password"><span id="sp2" style="color:red"></span>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="password" class="col-sm-2 col-form-label">NAME</label>
                    <div class="col-sm-10">
                      <input type="text" name="name" class="form-control" id="name" placeholder="name"><span id="sp3" style="color:red"></span>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="type" class="col-sm-2 col-form-label">ROLE</label>
                    <div class="col-sm-10">
                      <select class="custom-select" name="type">
<!--                           <option value="admin">admin</option>
                          <option value="teacher">teacher</option> -->
                          <option value="inspector">inspector</option>
                        </select>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <input type="submit" name="button" onclick="return valid();" value="   ADD   " class="btn btn-info float-right"></input>
                  </form>   
              </div>
            </div>
      			</div>
        </div>
      </section>


    	   <!-- main content closing -->

    <?php include'includes/footer.php' ?>

<script>
    function valid()
  {
    var email=document.getElementById('email').value;
    var Password=document.getElementById('password').value;
    var name=document.getElementById('name').value;

    if(email==""|| email.indexOf('@')==-1 || email.indexOf('.')==-1)
    {
      document.getElementById('sp1').innerHTML="mail@gmail.com required";
      return false;
    }
    if(Password=="")
    {
      document.getElementById('sp2').innerHTML="password required";
 
      return false;
    }
    if(name=="")
    {
      document.getElementById('sp3').innerHTML="name required";
 
      return false;
    }
  }
</script>

