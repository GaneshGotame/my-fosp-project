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
		<li class="active"><a href="dbms_index.php">Create</a>
		<div class="sub_menu3">
				<ul>
					<li><a href="dbms_createperson.php">Person Detail</a></li>
					<li><a href="dbms_createhabit.php">Habit</a></li>
				</ul>
			</div></li>
		<li><a href="">View</a>
			
		<div class="sub_menu3">
				<ul>
					<li><a href="#">Person Detail</a></li>
					<li><a href="#">Habit</a></li>
				</ul>
			</div></li>
		<li><a href="#">Update</a>
			<div class="sub_menu3">
				<ul>
					<li><a href="dbms_updatepersonview.php">Person detail</a></li>
					<li><a href="dbms_updatehabitview.php">Habit</a></li>
				</ul>
			</div></li>
		<li><a href="#">Delete</a>
			<div class="sub_menu3">
				<ul>
					<li><a href="dbms_deletepersonview.php">Person detail</a></li>
					<li><a href="dbms_deletehabitview.php">Habit</a></li>
				</ul>
			</div></li>
	</ul>
	</div>
<h2>List of Contacts</h2>
	<table border="1" cellspacing="0" width="80%">
		<tr>
		<th>Id</th>
		<th>Firstname</th>
		<th>Middlename</th>
		<th>Lastname</th>
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
   		 				<td><?php echo $row['contact'] ?></td>
   		 				<td><?php echo $row['lastname'] ?></td>
   		 				<td><?php echo $row['email'] ?></td>
   		 				<td><?php echo $row['dob'] ?></td>
   		 				<td><?php echo $row['city'] ?></td>
   		 				<td><?php echo $row['district'] ?></td>
   		 				<td>
   		 					<a href="dbms_update.php?id=<?php echo $id?>">Update</a>

   		 				</td>
    					</tr>

  					<?php
				}
		}
	?>
</table>
</body>
</html>