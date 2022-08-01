<html>
<head>
	<title>Ganesh Contact Application</title>
	<link rel="stylesheet" type="text/css" href="dbms_style.css">
	<script type="text/javascript">
		function myFun(){
			var a=document.myForm.email.value;
			if(a.indexOf('@')<=0){
				document.getElementById('Message').innerHTML="**Invalid Email**";
				return false;
			}

			if(a.charAt(a.length-4)!="."){
				document.getElementById('Message').innerHTML="**Invalid Email**";
				return false;
			}
		}
	</script>
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
	<div class="main" style="float: right; width: 100%;">
	<center>
<form action="dbms_addhabit.php" method="post" name="myForm" onsubmit="return myFun()">
		
			
			<table>
				<h2>Habits</h2>
				<tr>
					<td><label for="email">Email:</label></td>
					<td><input type="text" name="email" id="email" value="" required>
					<span id="Message" style="color:red;"></span></td>

				</tr>
				<tr>
					<td><label for="date">Date:</label></td>
					<td><input type="text" name="date" id="date" required></td>
				</tr>
				<tr>
					<td><label for="morning">Morning:</label></td>
					<td><textarea name="morning" id="moring" required>4:00 AM to 11:59 AM</textarea></td>
				</tr>
				<tr>
					<td><label for="afternoon">Afternoon:</label></td>
					<td><textarea name="afternoon" id="afternoon" required>12:00 PM to 4:00 PM</textarea></td>
				</tr>
				<tr>
					<td><label for="evening">Evening:</label></td>
					<td><textarea name="evening" id="evening" required>4:00 PM to 8:00 PM</textarea></td>
				</tr>
				<tr>
					<td><label for="night">Night:</label></td>
					<td><textarea name="night" id="night" required>8:00 PM to 11:59 PM</textarea></td>
				</tr>
				<tr>
					<td><label for="midnight">Midnight:</label></td>
					<td><textarea name="midnight" id="midnight" required >0:00 AM to 4:00 AM</textarea></td>
				</tr>
				<tr>
					<td><input type="submit" name="submit" value="SAVE"></td>
				</tr>
			</table>
			</div>
		</div>
	</form>
</center>

</body>
</html>