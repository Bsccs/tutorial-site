

<style>
.navbar 
{
  margin-top: 10px;
  box-shadow: 5px 4px 5px #000;
  border-radius: 10px;
  
}
</style>
<?php  include_once('site files/classes/admin.php');
include "connect.php";
  $add_login=new admin($connection);
?>
<div class="container">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">HACKERZDOM</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
<!--       <li class="nav-item active">
        <a class="nav-link" href="#">FEEDBACK<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">ABOUT US</a>
      </li> -->
     </ul>
    <ul class="nav navbar-nav float-md-right">
    	      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?php echo $_SESSION['name']; ?>
         
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="logout.php">PROFILE</a>
           <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="logout.php">LOGOUT</a>
        </div>

      </li>
	</ul>
  </div>
</nav>
</div>



