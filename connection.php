<?php
$servername = "35.243.170.108";
$username = "root";
$password = "ZFl5Gkroa@1mZZ8K";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>