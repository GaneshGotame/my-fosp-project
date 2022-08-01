<html>
<head>
	<title>Habitmanagement</title>
	<link rel="stylesheet" type="text/css" href="dbms_style.css">
	<style type="text/css">
	body{
		background-image: url(background.jpg);
		background-size: cover;
	}
	.slider
{
	float: center;
	margin-left: 25%;
	width: 50%;
	height: 450px;
	background-color: rgb(0, 200, 0);
	background-image: url(slider3.jpg);
	background-size: 100% 100%;
	box-shadow: 1px 2px 10px 5px green;
	animation: slider 60s infinite linear;
}

@keyframes slider{
	0%{background-image: url(slider1.jpg);}
	25%{background-image: url(slider2.jpg);}
	50%{ background-image:url(slider3.jpg);}
	75%{ background-image:url(slider4.jpg);}
}
		

	</style>
</head>
<body>

	<div class="heading">
		<h2>Habit Management System</h2>
	</div>

	<div class="menu_bar">
	<ul>
		<li class="active"><a href="dbms_index.php">Create</a>
		<div class="sub_menu3">
				<ul>
					<li><a href="dbms_createperson.php">Person Detail</a></li>
					<li><a href="dbms_createhabit.php">Habit</a></li>
				</ul>
			</div></li>
		<li><a href="dbms_confirmemailview.php">View</a></li>
			
		<li><a href="dbms_confirmemailupdate.php">Update</a></li>
		<li><a href="dbms_confirmemaildelete.php">Delete</a></li>
		<li><a href="dbms_adminlogin.php">Admin</a></li>
	</ul>
	</div>
	<!-- <div class="indeximage">
		<center><img src="slider2.jpg" height="470px"></center>
	</div> -->
	<div class="slider">
		
	</div>
	<div class="footer">
		<p style="font-size: 18px;">Developed By Ganesh Gotame</p>
	</div>


</body>
</html>