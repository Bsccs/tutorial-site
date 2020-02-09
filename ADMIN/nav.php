<!-- navbar color:navbar-dark,responsive:lg -->
<nav class="main-header navbar navbar-expand-lg navbar-dark navbar-light">
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
          		<li class="nav-item"><a href="dashboard.php" class="nav-link">ADMIN</a></li>
          		<!-- profile -->
          		<li class="nav-item"><a href="#" class="nav-link">PROFILE</a></li>   
          		<!-- login details     -->   		 
          		<li class="nav-item"><a href="login_details.php" class="nav-link">LOGIN-DETAILS</a></li>
          		<!-- inspector -->
          		<li class="nav-item dropdown"><a id="dropdownSubMenu1" href="#" data-toggle="dropdown" 
          			aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">INSPECTOR</a>
            		<ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
              			<li><a href="#" class="dropdown-item">Some action </a></li>
              			<li><a href="#" class="dropdown-item">Some other action</a></li>
            		</ul>
          		</li>
          		<!-- student -->
           		<li class="nav-item dropdown">
            	 <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" 
            	  class="nav-link dropdown-toggle">STUDENT</a>
            		<ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
              			<li><a href="admin_std_reg.php" class="dropdown-item">reg-details </a></li>
              			<li><a href="#" class="dropdown-item">Some other action</a></li>
            		</ul>
          		</li>
          		<!-- teacher -->
            	<li class="nav-item dropdown">
            		<a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">TEACHER</a>
            		<ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
              			<li><a href="#" class="dropdown-item">Some action </a></li>
              			<li><a href="#" class="dropdown-item">Some other action</a></li>
            		</ul>
          		</li>
          		<!-- visit site -->
          		<li class="nav-item">
            		<a href="#" class="nav-link">VISIT SITE</a>
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

