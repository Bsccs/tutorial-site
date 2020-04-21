<style type="text/css">
	.content{
		margin-top: 80px;
	}
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
 .card-footer{
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
<?php include'includes/header.php'?>

	<!-- main content opening -->
	<h1><center><u>PROFILE</u></center></h1>
<section class="content">
      			<div class="container">
           

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
                    <label for="name" class="col-sm-2 col-form-label">NAME</label>
                    <div class="col-sm-10">
                      <input type="text" name="name" class="form-control" id="name" placeholder="name"><span id="sp3" style="color:red"></span>
                    </div>
                </div>
                   <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">EXPERTISE</label>
                    <div class="col-sm-10">
                      <input type="text" name="exp" class="form-control" id="exp" placeholder="expertise"><span id="sp4" style="color:red"></span>
                    </div>
                </div>
                    <div class="form-group row">
                    	<label for="submit" class="col-sm-2 col-form-label">&nbsp;</label>
                    <div class="col-sm-10">
                  <input type="submit" name="button" onclick="return valid();" value="   ADD   " class="btn btn-info float-center"></input>
                  </form> 
                  </div>
 
                </div>
  

            </div>
      			</div>
        </div>
      </section>





	<!-- main content closing -->

<?php include'includes/footer.php'?>
<script>
    function valid()
  {
    var email=document.getElementById('email').value;
    var Password=document.getElementById('password').value;
    var name=document.getElementById('name').value;
    var exp=document.getElementById('exp').value;

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
        if(exp=="")
    {
      document.getElementById('sp4').innerHTML="expertise required";
 
      return false;
    }
  }
</script>