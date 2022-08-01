<html>
<head>
	<title>Habit management system</title>
	<link rel="stylesheet" type="text/css" href="dbms_style.css">
</head>
<body>
	<div class="heading">
		<h2>Habit Management System</h2>
	</div>

	<div class="menu_bar">
	<ul>
		<li><a href="dbms_index.php">Create</a>
		<div class="sub_menu3">
				<ul>
					<li><a href="dbms_createperson.php">Person Detail</a></li>
					<li><a href="dbms_createhabit.php">Habit</a></li>
				</ul>
			</div></li>
		<li><a href="dbms_confirmemailview.php">View</a></li>
			
		<li class="active"><a href="dbms_confirmemailupdate.php">Update</a></li>
		<li><a href="dbms_confirmemaildelete.php">Delete</a></li>
		<li><a href="dbms_adminlogin.php">Admin</a></li>
	</ul>
	</div>
	<?php
		include 'dbms_database.php';
		$id=$_GET['id'];

		$sql="select * from habit where habit_id=$id";
		$result=mysqli_query($conn,$sql);

		if($result){
			$row=mysqli_fetch_assoc($result);

			$email=$row['email'];
			$date=$row['date'];
			$morning=$row['morning'];
			$afternoon=$row['afternoon'];
			$evening=$row['evening'];
			$night=$row['night'];
			$midnight=$row['midnight'];
		}

	?>


	<form action="dbms_updateactionhabit.php" method="post">
		<center>
			<div class="main">
			<div class="person" style="float: left; width: 100%;">
			<table>
				<h2>Habits</h2>
				<tr>
					<td><label for="email">Email:</label></td>
					<td><input type="text" name="email" id="email" value="<?php global $email; echo $email?>" required></td>
				</tr>
				<tr>
					<td><label for="date">Date:</label></td>
					<td><input type="text" name="date" id="date" value="<?php global $date; echo $date?>" required></td>
				</tr>
				<tr>
					<td><label for="morning">Morning:</label></td>
					<td><textarea name="morning" id="morning" value="<?php global $morning; echo $morning?>" required>4:00 AM to 11:59 AM</textarea></td>
				</tr>
				<tr>
					<td><label for="afternoon">Afternoon:</label></td>
					<td><textarea name="afternoon" id="afternoon" value="<?php global $afternoon; echo $afternoon?>" required>12:00 PM to 4:00 PM</textarea></td>
				</tr>
				<tr>
					<td><label for="evening">Evening:</label></td>
					<td><textarea name="evening" id="evening" value="<?php global $evening; echo $evening?>" required>4:00 PM to 8:00 PM</textarea></td>
				</tr>
				<tr>
					<td><label for="night">Night:</label></td>
					<td><textarea name="night" id="night" value="<?php global $night; echo $night?>" required>8:00 PM to 11:59 PM</textarea></td>
				</tr>
				<tr>
					<td><label for="midnight">Midnight:</label></td>
					<td><textarea name="midnight" id="midnight" value="<?php global $midnight; echo $midnight?>" required >0:00 AM to 4:00 AM</textarea></td>
				</tr>
				<input type="hidden" name="id" id="id" value="<?php global $id; echo $id?>" required>
				<tr>
					<td><input type="submit" name="submit" value="SAVE"></td>
				</tr>
			</table>
			</div>
		</div>

		</div>
	</center>
	</form>

</body>
</html>