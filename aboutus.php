<style>


html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}


.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
<?php include'includes/header.php'?>


<body>
	<div class="body-wrap">
   		<?php include'NAVBAR.php'?>  
  	 		<div class="container">

				<!-- main content -->
				<h1><i class="far fa-address-card"></i> <U>ABOUT US</U> </h1>



<div class="row">
  <div class="column">
    <div class="card">
      <img src="img/1.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <h2>SIBIN MATHEW</h2>
        <p class="title">BSC COMPUTER SCIENCE</p>
        <p>PERSON WHO LEADS THIS TEAM</p>
        <p>sibinmathew@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="img/2.jpg" alt="Mike" style="width:100%">
      <div class="container">
        <h2>JOBY GEORGE</h2>
        <p class="title">BSC COMPUTER SCIENCE</p>
        <p>BRAINS BEHIND THIS TEAM</p>
        <p>jobygeorge@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="img/3.jpg" alt="John" style="width:100%">
      <div class="container">
        <h2>HEMANT P HAREESH</h2>
        <p class="title">BSC COMPUTER SCIENCE</p>
        <p>IDEA BEHIND THIS PROJECT</p>
        <p>hemantphareesh@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>

	        
					

				<!-- main content closing -->
			</div>
	</div>


<?php include'includes/footer.php'?>