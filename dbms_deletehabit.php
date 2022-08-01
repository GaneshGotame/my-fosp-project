<?php 
	include 'dbms_database.php';
	$id=$_GET['id'];

	$sql="delete from habit where habit_id=$id";
	$result=mysqli_query($conn,$sql);

	if($result){
		header('location:dbms_index.php');
	}
?>