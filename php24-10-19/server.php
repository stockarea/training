<?php 
	session_start();
	$db = mysqli_connect('35.243.170.108', 'root', 'ZFl5Gkroa@1mZZ8K', 'karthicktraining');

	// initialize variables
	$name = "";
	$address = "";
	$id = 0;
	$update = false;

	if (isset($_POST['save'])) {
		$name = $_POST['name'];
		$address = $_POST['address'];

		mysqli_query($db, "INSERT INTO phonebook (name, address) VALUES ('$name', '$address')"); 
		$_SESSION['message'] = "Address saved"; 
		header('location: page1.php');
	}


	if (isset($_POST['update'])) {
		$id = $_POST['id'];
		$name = $_POST['name'];
		$address = $_POST['address'];

		mysqli_query($db, "UPDATE phonebook SET name='$name', address='$address' WHERE id=$id");
		$_SESSION['message'] = "Address updated!"; 
		header('location: page1.php');
	}

if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($db, "DELETE FROM phonebook WHERE id=$id");
	$_SESSION['message'] = "Address deleted!"; 
	header('location: page1.php');
}


	$results = mysqli_query($db, "SELECT * FROM phonebook");


?>