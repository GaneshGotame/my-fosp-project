<?php 
	session_unset();
?>

<html>
<head>
	<title>Please Log In</title>
	<link rel="stylesheet" type="text/css" href="dbms_style.css">
	<style type="text/css">
		body{
		background-image: url(background.jpg);
		background-size: cover;
	}
	</style>
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
			
		<li><a href="dbms_confirmemailupdate.php">Update</a></li>
		<li><a href="dbms_confirmemaildelete.php">Delete</a></li>
		<li class="active"><a href="dbms_adminlogin.php">Admin</a></li>
	</ul>
	</div>
	<div class="main" style="width: 100%;">
	<form method="post" action="dbms_adminchoice.php">
		<center>
		<table>
			<br><br>
		<div class="CMS">
			<tr>
			<th colspan="2"><h2>Admin Login</h2></th>

			</tr>
		</div>
		<div class="login">
			<tr>
				<td>Enter your username:</td>
				<td><input type="text" name="user"></td>
			</tr>
			<tr>
				<td>Enter your password:</td>
				<td><input type="password" name="pass"></td>
			</tr
		
			<tr>
				<td colspan="2"><input type="submit" name="submit" value="submit"></td>
			</tr>
		
		</div>
	</table>
	</center>
	</form>
</div>

</body>
</html>