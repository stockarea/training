<?php 
	session_start();
include_once 'connection.php';
	 // initilize variables
	 $name = "";
	 $gender= "";
	 $id = 0;
	 $update= false;
	 $age="";
	 if (isset($_post['save'])){
		 $name = $_POST['name'];
		 $gender = $_POST['gender'];
		 $age = $_post['age'];
		 mysqli_query($conn, "insert into user (name, gender, age) values ('$name', '$gender', '$age')");
		 $_SESSION['message']="details saved";
	 }
	 