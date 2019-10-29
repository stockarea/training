<?php

define('DB_SERVER', '35.243.170.108');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'ZFl5Gkroa@1mZZ8K');
define('DB_NAME', 'karthicktraining');
 

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>