<?php 
include('server.php');
	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;
		$record = mysqli_query($db, "SELECT * FROM phonebook WHERE id=$id");

		if (count($record) == 1 ) {
			$n = mysqli_fetch_array($record);
			$name = $n['name'];
			$address = $n['address'];
		}

	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>CRUD </title>

</head>
<body>
	<?php if (isset($_SESSION['message'])): ?>
		
			<?php 
				echo $_SESSION['message']; 
				unset($_SESSION['message']);
			?>
		
	<?php endif ?>

<?php $results = mysqli_query($db, "SELECT * FROM phonebook"); ?>

<table>
	<thead>
		<tr>
			<th>Name</th>
			<th>Address</th>
			<th colspan="2">Action</th>
		</tr>
	</thead>
	
	<?php while ($row = mysqli_fetch_array($results)) { ?>
		<tr>
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['address']; ?></td>
			<td>
				<a href="page1.php?edit=<?php echo $row['id']; ?>"  >Edit</a>
			</td>
			<td>
				<a href="server.php?del=<?php echo $row['id']; ?>" >Delete</a>
			</td>
		</tr>
	<?php } ?>
</table>
	


<form method="post" action="server.php" >

	<input type="hidden" name="id" value="<?php echo $id; ?>">

	
		<label>Name</label>
		<input type="text" name="name" value="<?php echo $name; ?>">
	
		<label>Address</label>
		<input type="text" name="address" value="<?php echo $address; ?>">


		<?php if ($update == true): ?>
			<button  type="submit" name="update"  >update</button>
		<?php else: ?>
			<button  type="submit" name="save" >Save</button>
		<?php endif ?>
	</div>
</form>
</body>
</html>