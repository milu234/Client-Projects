<?php 
	include('db.php');
	if (isset($_GET['update'])) {
		$id = $_GET['id'];
		$name = $_GET['name'];
		$contact = $_GET['cn'];
		$result2 = mysqli_query($conn,"UPDATE details set name = '$name' , contact = '$contact' where id =$id ");
		header('location:index.php');
		# code...
	}