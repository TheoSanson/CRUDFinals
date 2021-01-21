<?php
	include "server.php";
	$id=$_REQUEST['id'];
	$fullname = mysqli_real_escape_string($link,$_POST['name']);
	$address = mysqli_real_escape_string($link,$_POST['add']);
	$contactno = mysqli_real_escape_string($link,$_POST['contact']);
	$emailaddress = mysqli_real_escape_string($link,$_POST['email']);
	$username = mysqli_real_escape_string($link,$_POST['user']);
	$password = mysqli_real_escape_string($link,$_POST['pass']);
	$sql="UPDATE registration SET fullname='$fullname',address='$address',contact='$contactno',email='$emailaddress',user='$username',password='$password' WHERE id='$id'";
	if(mysqli_query($link,$sql))
	{
		echo "Data Succesfully Updated!";
		header("location:index.php");
	}
	else
	{
		echo "Error: Could not be able to execute $sql. " .mysqli_error($link);
	}
	mysqli_close($link);
	header("location:display.php");
?>