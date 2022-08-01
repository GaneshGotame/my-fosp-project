<?php 
include 'dbms_database.php';
$id=$_POST['id'];
$email=$_POST['email'];
$date=$_POST['date'];
$morning=$_POST['morning'];
$afternoon=$_POST['afternoon'];
$evening=$_POST['evening'];
$night=$_POST['night'];
$midnight=$_POST['midnight'];


$sql="update habit set email='$email',date='$date',morning='$morning',afternoon='$afternoon',evening='$evening',night='$night',midnight='$midnight' where habit_id=$id";
$result=mysqli_query($conn,$sql);
if($result){
	header('location:dbms_index.php');
}

?>