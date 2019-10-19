<?php
include_once 'connection.php';
$sql = "insert into user (name, gender, age) values ('Vinoth', 'male', 28)";
$query = mysqli_query($conn, $sql);
if($query){
	echo "insert successful";
} else{
	echo "not insert";
}
?>