<?php
	$dbServername = "localhost";
	$dbUsername="root";
	$dbPassword ="";
	$dbName = "E-commerce site";
    // create connection
	$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
    // check connection 
    if ($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "";
?>