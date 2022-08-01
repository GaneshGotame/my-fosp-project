<?php
	$f_name=$_POST['firstname'];
	$m_name=$_POST['middlename'];
	$l_name=$_POST['lastname'];
	$contact=$_POST['contact'];
	$email=$_POST['email'];
	$dob=$_POST['dob'];
	$city=$_POST['city'];
	$district=$_POST['district'];
	
	include'dbms_database.php';

	$sql="insert into person(firstname,middlename,lastname,contact,email,dob,city,district)values('$f_name','$m_name','$l_name','$contact','$email','$dob','$city','$district')";
	$resultperson=mysqli_query($conn,$sql);

	if($resultperson){
		header('Location:dbms_index.php');
	}
	

?>