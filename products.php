<!DOCTYPE html>
<?php
   include('session.php');
?>

<html>
<head>
<title>Products</title>
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
	
	.productBox{
		text-align: center; 
		padding: 10px;
	}
	.card {
	  box-shadow: 4px 8px #3F484C;
	  transition: 1s;
	  width: 300px;
	  background-color: #D0E4EC;
	}

	.card:hover {
	  background-color: #DAF7A6;
	}

	.container {
	  padding: 2px 16px;
	}	
	
</style>
</head>
<body style="background-color:#35706a;">

<ul>
  <li><a href="index.php">Home</a></li>
  <!-- <li><a class="active" href="products.php">Products</a></li> -->
  <!-- <li><a href="cart.php">Cart</a></li> -->
  <!-- <li><a href="aboutus.php">About Us</a></li> -->
  <li><a href = "logout.php">Sign Out</a></li>
  <li style="float: right;"><a href = "#">Welcome, <?php echo $login_session; ?></a></li>
</ul>

<?php

$sql = "select ProductName, description, price, name 
		from products";
$result = $conn->query($sql);		
if ($result->num_rows > 0) 
{
	while($row = $result->fetch_assoc()) {
	//$row = mysqli_fetch_array($result);
	$ProductName = $row['ProductName'];
	$description  = $row['description'];
	$price = $row['price'];
	$image = $row['name'];
	$image_src = "upload/".$image;
	
	
	
	echo "<div class='productBox'>";
	//foreach ($productsBox as $product){
        //<a href="'products.php?page=product&id="'<?php=$row['id']' class="product">
	echo "<div class='card'>";
	echo "<img src='".$image_src."' alt='Avatar' style='width:100%'>";
	echo  "<div class='container'>";
	// echo   "<h4><b>".$fProductName."</b></h4>";
	echo	"<p>".$description."</p>";
	echo	"<p>".$price."</p>";
	echo	"<input type='submit'>";
	echo  "</div>";
	echo "</div>";
	echo "</div>";
}
	
} else 
	{
	 echo "0 results"; 
	}
?>

</body>
</html>