<?php
	//setcookie('username','Ganesh',time()+60);
	session_start();
	$_SESSION['username']=$_POST['user'];
	$_SESSION['userpass']=$_POST['pass'];
	$_SESSION['authuser']=0;

	//check username and password information

	if (($_SESSION['username']=='Ganesh') and
		($_SESSION['userpass']=='12345')){
		$_SESSION['authuser']=1;
	}

	else{
		header('location:dbms_adminloginincorrect.php');
	}
?>
<html>
<head>
	<title>Habitmanagement</title>
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
		<li  class="active"><a href="dbms_adminlogin.php">Admin</a></li>
	</ul>
	</div>
	<center>

	<div class="adminchoice">
		<ul>
		<li><a href="dbms_adminviewall.php">View all detail</a></li>
		<li><a href="dbms_adminpersondetail.php">View Person detail</a></li>
		<li><a href="dbms_adminhabitdetail.php">View Habit detail</a></li>
		<li><a href="dbms_adminupdateperson.php">Update Person detail</a></li>
		<li><a href="dbms_adminupdatehabit.php">Update Habit detail</a></li>
		<li><a href="dbms_admindeleteperson.php">Delete Person detail</a></li>
		<li><a href="dbms_admindeletehabit.php">Delete Habit detail</a></li>
		</ul>
		
	</div>
</center>
</body>
</html>