<?php
	$email=$_POST['email'];
	$date=$_POST['date'];
	$morning=$_POST['morning'];
	$afternoon=$_POST['afternoon'];
	$evening=$_POST['evening'];
	$night=$_POST['night'];
	$midnight=$_POST['midnight'];
	

	include'dbms_database.php';

	$sql="insert into habit(email,date,morning,afternoon,evening,night,midnight)values('$email','$date','$morning','$afternoon','$evening','$night','$midnight')";
	$resulthabit=mysqli_query($conn,$sql);


	if($resulthabit){
		header('Location:dbms_index.php');
	}
	

?>