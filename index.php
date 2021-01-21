<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<form method="post" action="add.php" >
			<table>
					<tr> <td> Full Name: </td> <td> <input type="text" name="name" required> </td> </tr>
					<tr> <td> Address: </td> <td> <input type="text" name="add" required> </td> </tr>
					<tr> <td> Contact No.: </td> <td> <input type="text" name="contact" required> </td> </tr>
					<tr> <td> Email Address: </td> <td> <input type="text" name="email" required> </td> </tr>
					<tr> <td> Username: </td> <td> <input type="text" name="user" required> </td> </tr>
					<tr> <td>  Password: </td> <td> <input type="password" name="pass" required> </td> </tr>
			</table>
			<div style="text-align:center;">
				<button type="submit" class="edit_btn">Save</button> <button type="reset" class="del_btn">Clear All</save>
			</div>
		</form>			
		<form style="text-align:center;border: 0px; padding: 0px;">
				<button type="submit" formaction="display.php" class="btn">View Entries</button>
		</form>
	</body>
</html>