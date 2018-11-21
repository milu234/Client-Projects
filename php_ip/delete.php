<?php 
	include('db.php');
	if (isset($_GET['delete'])) {
		$id = $_GET['id'];
		mysqli_query($conn,"DELETE from details where id = $id");
		header('location:index.php');
		# code...
	}
?>