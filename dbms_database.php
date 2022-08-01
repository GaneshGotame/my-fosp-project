<?php 
$host="localhost";
$user="root";
$pass="";
$database="habitmanagement";


// $conn=mysqli_connect($host,$user,$pass) or die();

// // Create database
// $sql = "CREATE DATABASE habitmanagement";
// if ($conn->query($sql) === TRUE) {
//   echo "Database created successfully";
// } else {
//   die("Error creating database: " . $conn->error);
// }

$conn=mysqli_connect($host,$user,$pass,$database) or die();

// $sql = "CREATE TABLE Person(
// person_id int(6) unsigned auto_increment not null primary key,
// firstname VARCHAR(30) NOT NULL,
// middlename VARCHAR(30) ,
// lastname VARCHAR(30) NOT NULL,
// email VARCHAR(30) not null,
// contact varchar(10) not null,
// dob date not null,
// district varchar(20) not null,
// city varchar(20) not null
// )";

// if ($conn->query($sql) === TRUE) {
//   echo "Person created successfully";
// } else {
//   die("Error creating table: " . $conn->error);
// }

// $sql = "CREATE TABLE habit(
// habit_id int(6) unsigned auto_increment not null primary key,
// email varchar(50) not null,
// date varchar(50) not null,
// morning VARCHAR(50) not null,
// afternoon VARCHAR(50) not null,
// evening VARCHAR(50) NOT NULL,
// night VARCHAR(50) not null,
// midnight varchar(50) not null
// )";

// if ($conn->query($sql) === TRUE) {
//   echo "habit table created successfully";
// } else {
//   die("Error creating table: " . $conn->error);
// }

?>