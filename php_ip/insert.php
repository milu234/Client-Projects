<?php
	include('db.php');
	$name = "";
	
	$contact = "";
	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$contact = $_POST['cn'];
		mysqli_query($conn, "INSERT INTO details (name, contact) VALUES ('$name', '$contact')");
		header('location:index.php'); 

	}
 ?>