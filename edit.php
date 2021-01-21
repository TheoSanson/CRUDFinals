<!DOCTYPE html>
<?php 	include "server.php";
	?>

<html>
	<head>
			<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
	<?php
		$id=$_REQUEST['id'];
		$record = mysqli_query($link,"SELECT * FROM registration WHERE id=$id");	
		while($contacts=mysqli_fetch_array($record)){
		$name=$contacts['fullname'];
		$add=$contacts['address'];
		$number=$contacts['contact'];
		$email=$contacts['email'];
		$username=$contacts['user'];
		$password=$contacts['password'];
	?>
			<form method="post" action="update.php?id=<?php echo $id; ?>" >
			<table>
					<tr> <td> ID: </td> <td> <?php echo $id; ?> </td> </tr>
					<tr> <td> Full Name: </td> <td> <input type="text" name="name" value="<?php echo $name; ?>" required> </td> </tr>
					<tr> <td> Address: </td> <td> <input type="text" name="add" value="<?php echo $add; ?>" required> </td> </tr>
					<tr> <td> Contact No.: </td> <td> <input type="text" name="contact" value="<?php echo $number; ?>" required> </td> </tr>
					<tr> <td> Email Address: </td> <td> <input type="text" name="email" value="<?php echo $email; ?>" required> </td> </tr>
					<tr> <td> Username: </td> <td> <input type="text" name="user" value="<?php echo $username; ?>" required> </td> </tr>
					<tr> <td>  Password: </td> <td> <input type="password" name="pass" value="<?php echo $password; ?>" required> </td> </tr>
			</table>
			<div style="text-align:center;">
				<button type="submit" class="edit_btn">Save</button> <button type="reset" class="del_btn">Return Initial Data</save>
			</div>
		</form>	
		<form style="text-align:center;border: 0px; padding: 0px;">
				<button type="submit" formaction="display.php" class="btn">Cancel & Return</button>
		</form>
<?php 	} ?>
	</body>
</html>