<?php 
	include 'dbms_database.php';
	$id=$_GET['id'];

	$sql="delete from person where person_id=$id";
	$result=mysqli_query($conn,$sql);

	if($result){
		header('location:dbms_admindeleteperson.php');
	}
?>