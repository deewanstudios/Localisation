<?php // db.php

// this file is responsible for setting the connection with the database

$conn = "local";

if ($conn == "local"){		// local connection
	
	$hostname = "localhost";
	$user = "root";
	$password = "root";

} else {					// external connection
	
	$hostname = "";
	$user = "";			// these can be filled in when  
	$password = "";		// you have external db details
	
}

$database = "thesbdc";

// connect to the database using PDO

try {
	
	$connection = new PDO("mysql:host=$hostname;dbname=$database", $user, $password);
	
} catch(PDOException $e){
	
	echo $e->getMessage();
}

$connection->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
// comment out this line when you run this for real
?>










