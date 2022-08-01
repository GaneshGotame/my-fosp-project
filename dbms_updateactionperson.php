<?php 
include 'dbms_database.php';
$id=$_POST['id'];
$f_name=$_POST['firstname'];
$m_name=$_POST['middlename'];
$l_name=$_POST['lastname'];
$contact=$_POST['contact'];
$email=$_POST['email'];
$dob=$_POST['dob'];
$city=$_POST['city'];
$district=$_POST['district'];

$sql="update person set firstname='$f_name',middlename='$m_name',lastname='$l_name',contact='$contact',email='$email',dob='$dob',city='$city',district='$district' where person_id=$id";
$result=mysqli_query($conn,$sql);
if($result){
	header('location:dbms_index.php');
}

?>