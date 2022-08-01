<html>
<head>
	<title>Habit management system</title>
</head>
<body>
	<header>
		<h1>Habitmanagement</h1>
	</header>
	<h2>Update</h2>
	<?php
		include 'dbms_database.php';
		$id=$_GET['id'];

		$sql="select * from person where person_id=$id";
		$result=mysqli_query($conn,$sql);

		if($result){
			$row=mysqli_fetch_assoc($result);

			$f_name=$row['firstname'];
			$m_name=$row['middlename'];
			$l_name=$row['lastname'];
			$contact=$row['contact'];
			$email=$row['email'];
			$dob=$row['dob'];
			$city=$row['city'];
			$district=$row['district'];
		}

	?>

	<form action="dbms_updateaction.php" method="post">

			<div class="main">
			<div class="person" style="float: left; width: 50%;">
			<table>
				<h2>Person's Detail</h2>
				<tr>
					<td><label for="firstname">Firstname:</label></td>
					<td><input type="text" name="firstname" id="firstname" value="<?php global $f_name; echo $f_name?>" required></td>
				</tr>
				<tr>
					<td><label for="middlename">Middlename:</label></td>
					<td><input type="text" name="middlename" id="middlename" value="<?php global $m_name; echo $m_name?>"></td>
				</tr>
				<tr>
					<td><label for="lastname">Lastname:</label></td>
					<td><input type="text" name="lastname" id="lastname" value="<?php global $l_name; echo $l_name?>" required></td>
				</tr>
				<tr>
					<td><label for="contact">Contact:</label></td>
					<td><input type="number" name="contact" id="contact" value="<?php global $contact; echo $contact?>" required></td>
				</tr>
				<tr>
					<td><label for="email">Email:</label></td>
					<td><input type="text" name="email" id="email" value="<?php global $email; echo $email?>"  required></td>
				</tr>
				<tr>
					<td><label for="dob">Date of Birth:</label></td>
					<td><input type="text" name="dob" id="dob" value="<?php global $dob; echo $dob?>"  required value="yyyy-mm-dd"></td>
				</tr>
				<tr>
					<td><label for="Address">Address:</label></td>
				</tr>
				<tr>
					<td><label for="city">City/Village:</label></td>
					<td><input type="text" name="city" id="city" value="<?php global $city; echo $city?>"  required></td>
				</tr>
				<tr>
					<td><label for="district">District:</label></td>
					<td><input type="text" name="district" id="district" value="<?php global $district; echo $district?>"  required></td>
				</tr>
					<input type="hidden" name="id" id="id" value="<?php global $id; echo $id?>" required>
				<tr>
					<td><input type="submit" value="save"></td>
				</tr>
			</table>
			</div>
		</div>

		</div>
	</form>

</body>
</html>