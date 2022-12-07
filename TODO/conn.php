<?php
	$conn = new mysqli("localhost", "root", "", "mydb");
 
	if(!$conn){
		die("Error: Cannot connect to the database");
	}
?>