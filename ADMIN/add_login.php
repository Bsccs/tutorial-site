<!-- php -->
<?php
	include_once('CLASS/ADMIN.php');
  $add_login=new ADMIN();
	if(isset($_POST['button']))
		{
  			$Username=$_POST['email'];
  			$Password=$_POST['password'];
  			$type=$_POST['type'];
        $ret=$add_login->add_login($Username,$Password,$type);
  			echo "<script>alert('details added successfully');</script>";
			echo"<script>window.history.back();</script>";
		}
?>
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
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                      <input type="email" name="email" class="form-control" id="email" placeholder="Email"><span id="sp1" style="color:red"></span>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                      <input type="password" name="password" class="form-control" id="password" placeholder="Password"><span id="sp2" style="color:red"></span>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="type" class="col-sm-2 col-form-label">type</label>
                    <div class="col-sm-10">
                      <select class="custom-select" name="type">
                          <option value="admin">admin</option>
                          <option value="teacher">teacher</option>
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
  }
</script>

<style>
          .card-info{
            margin-top: 100px;

        }
</style>