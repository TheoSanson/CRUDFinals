<?php
	$error_message="";
	$link=mysqli_connect("localhost","root","","sampledb");
	if($link===false)
	{
		die("Error: Could not connect." .mysqli_connect_error());
	}
?>