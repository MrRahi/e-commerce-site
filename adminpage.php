<!DOCTYPE html>
<html>
<head>
<title>Admin Page</title>
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
	  padding: 14px 16px;
	  text-decoration: none;
	}
	li a:hover 
	{
	  background-color: #d0f030;
	}
	.fields
	{
		border-width:5px;  
        border-style:double;
		height: 40px;
	}
	.users
	{
		box-shadow: 5px 10px;
		padding : 1em;
  		width: 100%;
 	 	height: 200px;
  		box-sizing: border-box;
 		background-color: #E4E4D9;
  		background-image:linear-gradient(175deg, rgba(0,0,0,0) 95%, #8da389 95%),
                    	linear-gradient( 85deg, rgba(0,0,0,0) 95%, #8da389 95%),
                   		linear-gradient(175deg, rgba(0,0,0,0) 90%, #b4b07f 90%),
                    	linear-gradient( 85deg, rgba(0,0,0,0) 92%, #b4b07f 92%),
                    	linear-gradient(175deg, rgba(0,0,0,0) 85%, #c5a68e 85%),
                    	linear-gradient( 85deg, rgba(0,0,0,0) 89%, #c5a68e 89%),
                    	linear-gradient(175deg, rgba(0,0,0,0) 80%, #ba9499 80%),
                    	linear-gradient( 85deg, rgba(0,0,0,0) 86%, #ba9499 86%),
                   		linear-gradient(175deg, rgba(0,0,0,0) 75%, #9f8fa4 75%),
                    	linear-gradient( 85deg, rgba(0,0,0,0) 83%, #9f8fa4 83%),
                    	linear-gradient(175deg, rgba(0,0,0,0) 70%, #74a6ae 70%),
                    	linear-gradient( 85deg, rgba(0,0,0,0) 80%, #74a6ae 80%);	
	}
	.addProducts{
		margin:auto;
		border: 1px solid black;
		box-shadow: 5px 10px;
		background-color: #E4E4D9;
  		background-image:linear-gradient(175deg, rgba(0,0,0,0) 95%, #8da389 95%),
                   		 linear-gradient( 85deg, rgba(0,0,0,0) 95%, #8da389 95%),
                    	linear-gradient(175deg, rgba(0,0,0,0) 90%, #b4b07f 90%),
                    	linear-gradient( 85deg, rgba(0,0,0,0) 92%, #b4b07f 92%),
                    	linear-gradient(175deg, rgba(0,0,0,0) 85%, #c5a68e 85%),
                    	linear-gradient( 85deg, rgba(0,0,0,0) 89%, #c5a68e 89%),
                    	linear-gradient(175deg, rgba(0,0,0,0) 80%, #ba9499 80%),
                    	linear-gradient( 85deg, rgba(0,0,0,0) 86%, #ba9499 86%),
                    	linear-gradient(175deg, rgba(0,0,0,0) 75%, #9f8fa4 75%),
                    	linear-gradient( 85deg, rgba(0,0,0,0) 83%, #9f8fa4 83%),
                   	 	linear-gradient(175deg, rgba(0,0,0,0) 70%, #74a6ae 70%),
                    	linear-gradient( 85deg, rgba(0,0,0,0) 80%, #74a6ae 80%);
	}
	.users
	{
		padding:8px;
		width: 50%;
		margin: auto;	
	}
	.addProducts
	{
		padding:8px;
		width: 50%;
		margin: auto;	
	}
	</style>
</head>
<body style="background-color:#35706a;">
<ul>
  <li><a href=" ">Home</a></li>
  <li><a href="adminproducts.php">Products</a></li>
  <li><a href = "logout.php">Log Out</a></li>
  <li><a href = "aboutus.php">About Us</a></li>
</ul>
<div class="users">
<h1>Users</h1>
<?php
	include_once('config.php');
	$sql = "SELECT id, name, email, number, address
			FROM users
			ORDER BY id";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) 
	{
		// output data of each row
		while($row = $result->fetch_assoc()) 
		{
			echo "".$row["id"].", Name:-".$row["name"]. ", Email:-".$row["email"].", Number:-".$row["number"].", Address:-".$row["address"]. "<br>";
		}
	} 
	else 
	{
		echo "0 results";
	}
?>
 </div>
 <br><br>
<?php
include("config.php");
session_start();
if(isset($_POST['addproduct'])){
  $productName = $_POST["productName"];
  $description = $_POST["description"];
  $price = $_POST["price"];
  $name = $_FILES['file']['name'];
  $target_dir = "upload/";
  $target_file = $target_dir . basename($_FILES["file"]["name"]);
  // Select file type
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  // Valid file extensions
  $extensions_arr = array("jpg","jpeg","png","gif");
  // Check extension
  if( in_array($imageFileType,$extensions_arr) ){
     // Insert record
     $query = "insert into products(productName, description, price, name) 
			   values('$productName','$description','$price','".$name."')";
     mysqli_query($conn,$query);
     // Upload file
     move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
  }
}
?> 
<div class="addProducts">
<h1>Add Products</h1>
<form method="post" action="" enctype='multipart/form-data'>
	<label><b>Product Name:</b></label><br>
	<input class="fields" type="text" placeholder="Enter Product Name" name="productName" id="productName" required><br><br>
	<label><b>Description:</b></label><br>
	<input class="fields" style="width:250px;"  type="text" placeholder="Enter Description" name="description" id="description" required><br><br>
	<label><b>Price:</b></label><br>
	<input class="fields" type="number" placeholder="Enter Price" name="price" id="price" required><br><br>
	<input type='file' name='file' /><br><br>
	<input type="submit" name="addproduct" value="Add Product"></input>
</form>
</div>
</body>
</html>