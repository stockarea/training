<?php
$conn = mysqli_connect('localhost', 'root', '', 'mydatabase');
if($conn){
echo "success";
}else {
echo "erruor";
}
?>