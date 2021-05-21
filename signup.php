<?php	
	include_once 'config.php';
		$name = $_POST["name"];
		$email = $_POST["email"];
		$number = $_POST["number"];
		$address = $_POST["address"];
		$password = $_POST["password"];
		$sql = "INSERT INTO users (name, email, number, password, address) 
				VALUES('$name','$email','$number','$password','$address')";
		$result = mysqli_query($conn, $sql);
		header("Location: login.php?signup=success");
?>