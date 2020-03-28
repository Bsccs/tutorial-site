<?php  include_once('../site files/classes/admin.php');
include "../connect.php";
  $add_login=new admin($connection);
?>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
<div class="container">
  <a class="navbar-brand" href="#">HACKERZDOM</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../index2.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Buy</a>
      </li>

    </ul>
    <ul class="nav navbar-nav float-md-right">
    	      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           <?php echo $_SESSION['name']; ?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="profile.php">PROFILE</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="../logout.php">LOGOUT</a>
          
        </div>
      </li>
</ul>
  </div>
</div>
</nav>




<!-- jQuery first, then Popper.js, then Bootstrap JS -->