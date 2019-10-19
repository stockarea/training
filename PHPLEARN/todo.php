<?php
session_start();
?>
<! DOCTYPE HTML>
<html>
<head>
<script>

function deleteRow(r) {
  var i = r.parentNode.parentNode.rowIndex;
  document.getElementById("myTable").deleteRow(i);
}
</script>
</head>
<body>
<center>
<h1 class="header">To Do</h1>
<form method="POST" action="page2.php">
name:<input type="text" name="name" class="name_input"><br>
phone number:<input type="text" name="number">
<button type="submit" class="add_btn" name="submit"> Add Contact</button>


</form>
</center>


</body>
</html>