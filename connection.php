<?php
	$server="localhost";
	$user="root";
	$pw="";
	$dbname="health";
	$conn= new mysqli($server,$user,$pw,$dbname);
	if($conn->connect_error)
	{
		die("Connection error".$conn->connect_error);
	}

?>
