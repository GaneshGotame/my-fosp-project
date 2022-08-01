<html>
	<head>
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
			
		<li><a href="dbms_confirmemailupdate.php">Update</a></li>
		<li><a href="dbms_confirmemaildelete.php">Delete</a></li>
		<li class="active"><a href="dbms_adminlogin.php">Admin</a></li>
	</ul>
	</div>
<h2>Person Detail</h2>
	<table border="1" cellspacing="0" width="80%">
		<tr>
		<th>Id</th>
		<th>Firstname</th>
		<th>Middlename</th>
		<th>Lastname</th>
		<th>Contact</th>
		<th>Email</th>
		<th>Dob</th>
		<th>City</th>
		<th>District</th>
		</tr>
		
	
	<?php 
		include 'dbms_database.php';
		$sql="select * from person";
		$result=mysqli_query($conn,$sql);
		$total=mysqli_num_rows($result);


		if($total!=0){
			while($row=mysqli_fetch_assoc($result)){
				$id=$row['person_id'];
					?>

   						<tr>
   						<td><?php echo $row['person_id'] ?></td>
    					<td><?php echo $row['firstname'] ?></td>
   		 				<td><?php echo $row['middlename'] ?></td>
   		 				<td><?php echo $row['lastname'] ?></td>
   		 				<td><?php echo $row['contact'] ?></td>
   		 				<td><?php echo $row['email'] ?></td>
   		 				<td><?php echo $row['dob'] ?></td>
   		 				<td><?php echo $row['city'] ?></td>
   		 				<td><?php echo $row['district'] ?></td>
    					</tr>

  					<?php
				}
		}
	?>
</table>
<br><hr><br>
<h2>Habit Detail</h2>
	<table border="1" cellspacing="0" width="80%">
		<tr>
		<th>Email</th>
		<th>Date</th>
		<th>Morning</th>
		<th>Afternoon</th>
		<th>Evening</th>
		<th>Night</th>
		<th>Midnight</th>
		</tr>
		
	
	<?php 
		include 'dbms_database.php';
		$sql="select * from habit";
		$result=mysqli_query($conn,$sql);
		$total=mysqli_num_rows($result);

		if($total!=0){
			while($row=mysqli_fetch_assoc($result)){
					?>

   						<tr>
   						<td><?php echo $row['email'] ?></td>
   		 				<td><?php echo $row['date'] ?></td>
   		 				<td><?php echo $row['morning'] ?></td>
   		 				<td><?php echo $row['afternoon'] ?></td>
   		 				<td><?php echo $row['evening'] ?></td>
   		 				<td><?php echo $row['night'] ?></td>
   		 				<td><?php echo $row['midnight'] ?></td>
    					</tr>

  					<?php
				}
		}
	?>
</table>
</body>
</html>