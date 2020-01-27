<!DOCTYPE html>
<html lang="en">
	<head>
  		<title>HACKERZDOM</title>
  		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    	<link rel="stylesheet" href="plugins/bootstrap-4.4.1-dist/css/bootstrap.min.css">
	</head>

	<style type="text/css">
  	*{
  	 box-sizing: border-box;
   	-moz-box-sizing:border-box;
   	-ms-box-sizing:border-box;
  	}
  	body{
  	padding: 0;
  	margin: 0;
  	font-family: sans-serif;
  	}
  /*-------------------------------------------------------nav-css-opening----------------------------------------------*/
  header{
    width: 100%;    
    background-color: #000;
    display: flex;
    justify-content:space-between;
    border-bottom: 2px green solid;
  }
  .nav_con{
 min-width: 80px;
    color: #fff;   
    padding: 15px;
    font-size: 20px;

  }
  .nav_holder{
    display: flex;
    justify-content: flex-start;
  }
  /*---------------------------------------------------nav-css-closing-------------------------------------------------*/

  /*------------------------------center-alignment-opening------------------------------------------------------------------*/

  .main{
    width: 100%;
    padding: 20px;
  }

  .card_holder{
    width: 100%;
    padding: 50px;
    background-color: #78797d;     /*background-color-change*/
    display: flex;
    justify-content:space-around;
   margin-top:10%;
 }

/*------------------------------------------center-alignment-closing--------------------------------------------------------*/
/*-------------------------------------flip-card-opening-------------------------------------------------------------------*/

.flip-card {
  background-color: transparent;
  width: 300px;
  height: 300px;
  perspective: 1000px;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
}

.flip-card-front {
  background-color: #bbb;
  color: black;
}

.flip-card-back {
  background-color: #2980b9;
  color: white;
  transform: rotateY(180deg);
}
/*-------------------------------------------------flip-card-closing---------------------------------------------------*/

</style>
<body bgcolor="#78797d">  <!-- background-color-change -->

	<!-- ---------------------------------nav-bar--------------------------------------------------------------- -->
  <header>
    <div class="nav_holder">
  <div class="nav_con" style="background-color:green; ">Home</div>
<div class="nav_con"><i class="fas fa-envelope"> Feedback</i></div>
<div class="nav_con"><i class="fas fa-address-card"></i> About us</div>
</div>
<div class="nav_holder">
<div class="nav_con"><i class="fa fa-fw fa-user"></i> Login</div>
<div class="nav_con"><i class="fas fa-registered"></i> Register</div>
</div>
  </header>
 <!--  ---------------------------------nav-bar--------------------------------------------------------------- -->

  <!-- -------------------------------------------------center-opening--------------------------------------------------- -->
  <div class="main">
    <div class="card_holder">
<!-- ----------------------------------------------------flip-class-opening--------------------------------------------------->      
<div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front">
            <img src="img_avatar.png" alt="Avatar" style="width:300px;height:300px;">
          </div>
            <div class="flip-card-back">
            <h1>John Doe</h1> 
            <p>Architect & Engineer</p> 
            <p>We love that guy</p>
        </div>
      </div>
    </div>

      <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front">
            <img src="img_avatar.png" alt="Avatar" style="width:300px;height:300px;">
          </div>
            <div class="flip-card-back">
            <h1>John Doe</h1> 
            <p>Architect & Engineer</p> 
            <p>We love that guy</p>
        </div>
      </div>
    </div>

      <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front">
            <img src="img_avatar.png" alt="Avatar" style="width:300px;height:300px;">
          </div>
            <div class="flip-card-back">
            <h1>John Doe</h1> 
            <p>Architect & Engineer</p> 
            <p>We love that guy</p>
        </div>
      </div>
    </div>
<!-- ----------------------------------------------------flip-class-closing---------------------------------------------------> 
</div>
</div>
<!-- -------------------------------------------------center-closing---------------------------------------------------- -->
</body>
 <script src="plugins/bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>
  <script src="plugins/bootstrap-4.4.1-dist/js/jquery-3.4.1.slim.min.js"></script>
  <script src="plugins/bootstrap-4.4.1-dist/js/popper.min.js"></script>
</html>