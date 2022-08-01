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
	<div class="main">
		<center>
		<form action="dbms_addperson.php" method="post" name="myForm" onsubmit="return myFun()">
		
			<div class="person" style="float: left; width: 100%; padding-top: 20px;">
			<table>
				<h2>Person's Detail</h2>
				<tr>
					<td><label for="firstname">Firstname:</label></td>
					<td><input type="text" name="firstname" id="firstname" required></td>
				</tr>
				<tr>
					<td><label for="middlename">Middlename:</label></td>
					<td><input type="text" name="middlename" id="middlename"></td>
				</tr>
				<tr>
					<td><label for="lastname">Lastname:</label></td>
					<td><input type="text" name="lastname" id="lastname" required></td>
				</tr>
				<tr>
					<td><label for="contact">Contact:</label></td>
					<td><input type="number" name="contact" id="contact" value="" required></td>
				</tr>
				<tr>
					<td><label for="email">Email:</label></td>
					<td><input type="text" name="email" id="email" value="" required>
						<span id="Message" style="color:red;"></span></td>
				</tr>
				<tr>
					<td><label for="dob">Date of Birth:</label></td>
					<td><input type="text" name="dob" id="dob" required value="yyyy-mm-dd"></td>
				</tr>
				<tr>
					<td><label for="Address">Address:</label></td>
				</tr>
				<tr>
					<td><label for="city">City/Village:</label></td>
					<td><input type="text" name="city" id="city" required></td>
				</tr>
				<tr>
					<td><label for="district">District:</label></td>
					<td><input type="text" name="district" id="district" required></td>
				</tr>
				
				<tr>
					<td><input type="submit" value="SAVE"></td>
				</tr>
			</table>
			</div>
		</div>
	</form>
</center>
</div>
</body>
</html>



