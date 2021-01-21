<?php
	include "server.php";
	$id=$_REQUEST['id'];
	mysqli_query($link,"DELETE FROM registration WHERE id=$id");
	header("location:display.php");
?>