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
<h2>Update Habit Detail</h2>
	<table border="1" cellspacing="0" width="80%">
		<tr>
		<th>Date</th>
		<th>Email</th>
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
				$id=$row['habit_id'];
					?>

   						<tr>
   						<td><?php echo $row['date'] ?></td>
    					<td><?php echo $row['email'] ?></td>
   		 				<td><?php echo $row['morning'] ?></td>
   		 				<td><?php echo $row['afternoon'] ?></td>
   		 				<td><?php echo $row['evening'] ?></td>
   		 				<td><?php echo $row['night'] ?></td>
   		 				<td><?php echo $row['midnight'] ?></td>
   		 				<td>
   		 					<a href="dbms_updatehabit.php?id=<?php echo $id?>" style="text-decoration: none; color: rgb(0,700,0);">UPDATE</a>

   		 				</td>
    					</tr>

  					<?php
				}
		}
	?>
</table>
</body>
</html>