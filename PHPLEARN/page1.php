<?php
session_start();
?>
<html>
<body>

<?php 

$name = $_POST['name'];
 $number = $_POST['number'];
$favorites = array( 
	"Contact" => array( 
		"name" => "$name", 
		"number" => "$number"
	)
); 

$keys = array_keys($favorites); 
for($i = 0; $i < count($favorites); $i++) { 
	echo $keys[$i] ."\n"; 
	foreach($favorites[$keys[$i]] as $key => $value) { 
		echo $key . " : " . $value . "\n"; 
	} 
	echo "\n"; 
} 
?>
<body>
</html>
