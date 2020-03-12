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
        <a href="dashboard.php" class="navbar-brand"></a>      
      	<button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" 
      		aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
      	</button>
      	<div class="collapse navbar-collapse order-3" id="navbarCollapse">
      		<!-- responsive menu icon closing-->
        	<!-- Left side content -->
        	<ul class="navbar-nav">
        		<!-- admin -->
          		<li class="nav-item"><a href="index.php" class="nav-link">ADMIN</a></li>
          		<!-- login details -->   		 
          		<li class="nav-item"><a href="login_details.php" class="nav-link">LOGINS</a></li>
          		<!-- feedback details -->
          		<li class="nav-item dropdown"><a id="dropdownSubMenu1" href="#" data-toggle="dropdown" 
                aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">FEEDBACK</a>
                <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                    <li><a href="inspector_feedback.php" class="dropdown-item">inspector</a></li>
                    <li><a href="student_feedback.php" class="dropdown-item">student</a></li>
                </ul>
              </li>
          		<!-- inspector -->
          		<li class="nav-item dropdown"><a id="dropdownSubMenu1" href="#" data-toggle="dropdown" 
          			aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">INSPECTOR</a>
            		<ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
              			<li><a href="add_login.php" class="dropdown-item">add-inspector</a></li>
              			<li><a href="approval_details.php" class="dropdown-item">approval</a></li>
            		</ul>
          		</li>
          		<!-- student -->
           		<li class="nav-item dropdown"><a id="dropdownSubMenu1" href="#" data-toggle="dropdown" 
           			aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">STUDENT</a>
            		<ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
              			<li><a href="std_reg.php" class="dropdown-item">details</a></li>
              			<li><a href="stud_request.php" class="dropdown-item">request</a></li>
            		</ul>
          		</li>
          		<!-- CONTENT -->
            	<li class="nav-item dropdown">
            		<a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">CONTENT</a>
            		<ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
              			<li><a href="#" class="dropdown-item">from teachers</a></li>
              			<li><a href="#" class="dropdown-item">to inspector</a></li>
            		</ul>
          		</li>
          		<!-- visit site -->
          		<li class="nav-item">
            		<a href="http://hackerzdom.com/" class="nav-link">VISIT SITE</a>
          		</li>
            </ul>
      		<!-- Right navbar links -->
      		<ul class="order-1 order-md-4 navbar-nav navbar-expand ml-auto">
      			<!-- logout -->
        		<li class="nav-item">
        			<a href="logout.php" class="nav-link"><i class="fas fa-sign-out-alt">   LOGOUT</i></a> 
        		</li>
      		</ul>
    	</div>
  	</div>
</nav>
