<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<style>
	.registrationDiv
    {
		width:fit-content;
	    padding: 60px;
	    height:fit-content;
	    margin:auto;
	    margin-top: 2%;
	    background-color: #97B2BD
	}
	.fields
    {
		border-width:5px;  
        border-style:double;
		height: 40px;
	}
	.button1
    {
	  background-color: #4CAF50;
	  color: black;
	  border-width:5px;  
      border-style:double;
	  
	}	
</style>
</head>
<body style="background-color:#35706a;">
<div class="registrationDiv">
<h1>User Login</h1>
<form method="POST">
	<label><b>Email:</b></label><br>
	<input class="fields" type="email" placeholder="Enter Email" name="email" id="email" required><br><br>
	<label><b>Password:</b></label><br>
	<input class="fields" type="password" placeholder="Enter Password" name="password" id="password" required><br><br><br><br>
	<input class="button1" type="submit" name="submit" value="Login"></input>
</form>
	<br><br>
	<a  class="loginLinks" href="registration.php">Registration</a>
</div>
<?php
	include("config.php");
    session_start();
	$count=0;
	if($_SERVER["REQUEST_METHOD"] == "POST") 
	{
      	// username and password sent from form 
      	$email = mysqli_real_escape_string($conn,$_POST['email']);
      	$password = mysqli_real_escape_string($conn,$_POST['password']); 
     	$sql = "SELECT id 
			  FROM users 
			  WHERE email = '$email' and password = '$password'";
      	$result = mysqli_query($conn,$sql);
     	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      	$count = mysqli_num_rows($result);
      	// If result matched $myusername and $mypassword, table row must be 1 row
      	if($count == 1) 
      		{
        		$_SESSION['email'] = $email;
         		header("location: index.php");
      		}
	  	elseif ($count==0) 
	 		{
		  		echo "<p style='color:black; text-align: center;'>" . "Your Login email or Password is invalid" ."</p>";
		  		$count=3;
			}
	  	else 
	  		{
         		$error = "Your Login email or Password is invalid";
		 		echo "<p style='color:red; text-align: center;'>" . $error ."</p>";
      		}
	}
?>

</body>
</html>