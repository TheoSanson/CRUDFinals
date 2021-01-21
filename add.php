<?php
	include "server.php";
	$fullname = mysqli_real_escape_string($link,$_POST['name']);
	$address = mysqli_real_escape_string($link,$_POST['add']);
	$contactno = mysqli_real_escape_string($link,$_POST['contact']);
	$emailaddress = mysqli_real_escape_string($link,$_POST['email']);
	$username = mysqli_real_escape_string($link,$_POST['user']);
	$password = mysqli_real_escape_string($link,$_POST['pass']);
	$sql="INSERT INTO registration (fullname,address,contact,email,user,password)
	VALUES('$fullname','$address','$contactno','$emailaddress','$username','$password')";
	if(mysqli_query($link,$sql))
	{
		echo "Data Succesfully Added!";
		header("location:index.php");
	}
	else
	{
		echo "Error: Could not be able to execute $sql. " .mysqli_error($link);
	}
	mysqli_close($link);
?>