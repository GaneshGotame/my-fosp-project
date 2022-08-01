<html>
	<head>
		<link rel="stylesheet" type="text/css" href="dbms_style.css">
	</head>
	<style type="text/css">
		body{
		background-image: url(background.jpg);
		background-size: cover;
	}
	</style>
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
		<li class="active"><a href="dbms_confirmemaildelete.php">Delete</a></li>
		<li><a href="dbms_adminlogin.php">Admin</a></li>
	</ul>
	</div>
<h2>Delete Habit with Email</h2>
	<form action="dbms_deletehabitview.php" method="post">
		<label style="font-size:20px">Please Enter your Email to delete your records</label><br>
		<input type="text" name="email" id="email" required><br><br><br>
		<input type="submit">
	</form>
	
</body>
</html>