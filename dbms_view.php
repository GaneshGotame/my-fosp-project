<html>
<body>
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
		$sql="select * from person;
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
</body>
</html>