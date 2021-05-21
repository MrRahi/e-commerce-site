<!DOCTYPE html>
<?php
   include('session.php');
?>
<html>
<head>
<title>"Triple Billionaire"</title>
<style>
	
	ul {
	  list-style-type: none;
	  margin: 0;
	  padding: 0;
	  overflow: hidden;
	  background-color: #91a39e;
	}
		li 
	{
	  float: left;
	}
	li a 
	{
	  display: block;
	  color: white;
	  text-align: center;
	  padding: 10px 16px;
	  text-decoration: none;
	}
	li a:hover 
	{
	  background-color: #d0f030;
	}
	.article{
    border:1px solid;
    border-top-width:0px;
    border-right-width:0px;
    border-bottom-width:5px;
    border-bottom-color:#FFBF21;
    border-left-width:10px;
    border-left-color:#FFBF21;
  }
  .footer 
  {
    width: 100%;
    background-color: black;
    color: white;
    text-align: center;
    padding: 10px;
  }  
</style>
<!-- Bootstrap-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body style="background-color:#35706a"; >
<!-- Navigation bar-->
<ul>
  <li><a class="active" href="index.php">Home</a></li>
  <li><a href="products.php">Products</a></li>
  <li><a href = "logout.php">Sign Out</a></li>
  <li style="float: right;"><a href = "#">Welcome, 
  <?php 
  echo $login_session; 
  ?>
  </a></li>
</ul>
<!-- SlideShow-->
<div id="carouselExampleControls" class="carousel slide bg-inverse w-50 ml-auto mr-auto" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/cover1.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/cover2.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/cover3.png" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div><br><br><br>
<div class="article">
	<h4 style="color:MediumSeaGreen;"> 
  <i> <strong> Looking for quality products at Minimum Price? Want to save your 
  hard earnings and precious time? Tired of searching items and get 
  confused in the crowd? Then, <p style="color:Tomato;">“Triple Billionaire (E-commerce site)” </p>
  is your solution of those problems. It is a trustworthy E-commerce 
  site where you can easily find your necessary best products at the 
  minimum best price. So, why are you waiting for? Just grab your 
  products from <p style="color:Tomato;">“Triple Billionaire”</p> and save your valuable time. </strong> </i>
	</h4>
</div>
 

<!-- Footer-->
<br><br>
<div class="footer">
  <p>Contact us on: </p>
  <p>All rights reserved 2021</p>
</div>
</body>
</html>