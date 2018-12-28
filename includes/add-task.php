<?php 
	$task = strip_tags( $_POST['task'] );
	$date = date('Y-m-d');
	$time = date('H:i:s');

	require("connect.php");

	$sql = "INSERT INTO tasks VALUES ('', '$task', '$date', '$time')";
	$q = mysqli_query($conn, $sql);
	$sql = "SELECT * FROM tasks WHERE task='$task' and date='$date' and time='$time'";
	$query = mysqli_query($conn, $sql);

	while( $row = mysqli_fetch_array($query, MYSQLI_ASSOC) ){
		$task_id = $row['id'];
		$task_name = $row['task'];
	}

	mysqli_close();

	echo '<li><span>'.$task_name.'</span><img id="'.$task_id.'" class="delete-button" width="10px" src="images/close.svg" /></li>';
?>