<?php
session_start();
?>
<html>
<body>

<?php 

$_SESSION["name"] = $_POST['name'];
$_SESSION["number"] = $_POST['number'];
echo $_SESSION["name"];
echo $_SESSION["number"];
?>
<body>
</html>
