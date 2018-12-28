<?php 
	$task_id = strip_tags( $_POST['task_id'] );

	require("connect.php");
	$sql = "DELETE FROM tasks WHERE id='$task_id'";
	mysqli_query($conn,$sql);
?>