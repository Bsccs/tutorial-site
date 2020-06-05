
<style type="text/css">
.navbar-dark{
  background-color: black;

}

.navbar {
  flex-wrap: wrap;
  }

</style>

<!-- navbar color:navbar-dark,responsive:lg -->
<nav class="main-header navbar navbar-expand-sm navbar-dark navbar-light">
    <div class="container">
    	<!-- responsive menu icon opening --> 
        <a href="index.php" class="navbar-brand">HACKERZDOM</a>      
      	<button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" 
      		aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
      	</button>
      	<div class="collapse navbar-collapse order-3" id="navbarCollapse">
      		<!-- responsive menu icon closing-->
        	<!-- Left side content -->
        	<ul class="navbar-nav">
        		<!-- admin -->
          		<li class="nav-item"><a href="index.php" class="nav-link"><i class="fas fa-home"></i> HOME</a></li>
          		<!-- login details -->   		 
          		<li class="nav-item"><a href="login_details.php" class="nav-link"><i class="fas fa-server"></i> LOGINS</a></li>
          		<!-- inspector -->
          		<li class="nav-item dropdown"><a id="dropdownSubMenu1" href="#" data-toggle="dropdown" 
          			aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fas fa-spell-check"></i> INSPECTOR</a>
            		<ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                   <li><a href="insp_details.php" class="dropdown-item"><i class="fas fa-eye"></i> DETAILS
                   <li><a href="inspector_feedback.php" class="dropdown-item"><i class="fas fa-envelope-open-text"></i>  FEEDBACK</a></li>
              			<li><a href="add_login.php" class="dropdown-item"><i class="far fa-plus-square"></i> ADD INSPECTOR</a></li>
              			<li><a href="approval_details.php" class="dropdown-item"><i class="fas fa-thumbs-up"></i> APPROVED CONTENT</a></li>
            		</ul>
          		</li>
          		<!-- student -->
           		<li class="nav-item dropdown"><a id="dropdownSubMenu1" href="#" data-toggle="dropdown" 
           			aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fas fa-user-graduate"></i> STUDENT</a>
            		<ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
              			<li><a href="std_reg.php" class="dropdown-item"><i class="fas fa-eye"></i> DETAILS</a></li>
              			<li><a href="stud_request.php" class="dropdown-item"><i class="fas fa-question-circle"></i> REQUEST</a></li>
                    <li><a href="student_feedback.php" class="dropdown-item"><i class="fas fa-envelope-open-text"></i> FEEDBACK</a></li>
                   <!--  <li><a href="keyword.php" class="dropdown-item"><i class="fas fa-search"></i> KEYWORD</a></li> -->
            		</ul>
          		</li>
          		<!-- CONTENT -->
            	<li class="nav-item dropdown">
            		<a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fas fa-chalkboard-teacher"></i> CONTENT DEVELOPER</a>
            		<ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                    <li><a href="develop_details.php" class="dropdown-item"><i class="fas fa-thumbs-up"></i> APPROVAL</a></li>
                    <!-- <li><a href="payment.php" class="dropdown-item"> PAYMENT-DETAILS</a></li> -->
                    <li><a href="topic.php" class="dropdown-item"><i class="fas fa-book-reader"></i> TOPICS</a></li>

            		</ul>
          		</li>

            </ul>
      		<!-- Right navbar links -->
      		<ul class="order-1 order-md-4 navbar-nav navbar-expand ml-auto">
      			<!-- logout -->
            <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-users-cog"></i> <?php echo $_SESSION['email']; ?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <!-- <a class="dropdown-item" href="#">profile</a> -->
         <!--  <div class="dropdown-divider"></div> -->
          <a class="dropdown-item" href="../index.php"><i class="fas fa-glasses"></i> VISIT SITE</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="logout.php"><i class="fas fa-sign-out-alt"></i> LOGOUT</a>
        </div>
      </li>

      		</ul>

    	</div>
  	</div>
</nav>
