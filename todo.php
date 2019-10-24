<?php
	$errors = "";
	$update = false;
// Database
	$conn = mysqli_connect("35.243.170.108", "root","ZFl5Gkroa@1mZZ8K", "karthicktraining");

	if (isset($_POST['submit'])) {

		if (empty($_POST['task'])) {
			$errors = "You must fill in the task";
		}else{
			$task = $_POST['task'];
			$query = "INSERT INTO tasks (task) VALUES ('$task')";
			mysqli_query($conn, $query);
			header('location: todo.php');
		}
	}	

	// delete 
	if (isset($_GET['del_task'])) {
		$id = $_GET['del_task'];

		mysqli_query($conn, "DELETE FROM tasks WHERE id=$id");
		header('location: todo.php');
	}

	// update
	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;
		$record = mysqli_query($conn, "SELECT * FROM tasks WHERE id=$id");
		
		if (count($record) == 1) {
			$n = mysqli_fetch_array($record);
			$task = $n['task'];
		}
	}
	if (isset($_POST['update'])) {
		$id = $_POST['id'];
		$task = $_POST['task'];

		mysqli_query($db, "UPDATE tasks SET task=$task WHERE id=$id");
		header('location: todo.php');
	}

	// view
	$tasks = mysqli_query($conn, "SELECT * FROM tasks");

?>
<!DOCTYPE html>
<html>
<head>
	<title>ToDo</title>
</head>
<body>
		<h2 style="font-style: 'Hervetica';">ToDo List</h2>
	<form method="post" action="todo.php" >
		<?php if (isset($errors)) { ?>
			<p><?php echo $errors; ?></p>
		<?php } ?>
		<input type="text" name="task" >
		<?php if ($update == true): ?>
			<button type="submit" name="update"  >update</button>
		<?php else: ?>
		<button type="submit" name="submit" id="add_btn" >Add Task</button>
		<?php endif ?>
	
	</form>


	<table>
		<thead>
			<tr>
				<th>N</th>
				<th>Tasks</th>
				<th >Edit</th>
				<th style="width: 60px;">Action</th>
			</tr>
		</thead>

		<tbody>
			<?php $i = 1; while ($row = mysqli_fetch_array($tasks)) { ?>
				<tr>
					<td> <?php echo $i; ?> </td>
					<td > <?php echo $row['task']; ?> </td>
					<td > 
						<a href="todo.php?edit=<?php echo $row['id'] ?>">edit</a> 
					</td>
					<td > 
						<a href="todo.php?del_task=<?php echo $row['id'] ?>">x</a> 
					</td>
				</tr>
			<?php $i++; } ?>	
		</tbody>
	</table>

</body>
</html>