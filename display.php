<!DOCTYPE html>
<?php include "server.php"?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<table>
			<thead>
				<tr>
					<th>Name</th>
					<th>Address</th>
					<th>Contact</th>
					<th>Email</th>
					<th>User</th>
					<th>Pass</th>
					<th colspan="2">Action</th>
				</tr>
			</thead>
			<?php
				$sql = "SELECT * FROM registration";
				$result = $link->query($sql);
				if ($result->num_rows > 0) {
					while ($row = $result->fetch_assoc()){ ?>
					<tr>
						<td><?php echo $row['id']; ?></td>
						<td><?php echo $row['fullname']; ?></td>
						<td><?php echo $row['address']; ?></td>
						<td><?php echo $row['contact']; ?></td>
						<td><?php echo $row['email']; ?></td>
						<td><?php echo $row['user']; ?></td>
						<td><?php echo $row['password']; ?></td>					
						<td>
							<a href="edit.php?id=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
						</td>
						<td>
							<a href="del.php?id=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
						</td>
					</tr>
			<?php 	}
		
				}
				else {
					echo "0 results";
				}
				mysqli_close($link);?>
		</table>			
		<form style="text-align:center;border: 0px; padding: 0px;">
				<button type="submit" formaction="index.php" class="btn">Add New Entry</button>
		</form>
	</body>
</html>