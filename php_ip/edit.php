<?php
	include('db.php'); 
	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$result = mysqli_query($conn,"SELECT * from details where id = $id");
        
    
		# code...
	}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<title></title>
	<style type="text/css">
	
	</style>
</head>
<body>
	<?php 
	while ($row=mysqli_fetch_assoc($result)) { ?>
		<form action="update.php" method="GET">
		<p>Name  : <input type="text" name="name" value="<?php echo $row['name']?>" ></p>
		<p>Contact number : <input type="text" name="cn" value="<?php echo $row['contact'] ?>"  ></p>
		<button type="submit" name="update" >UPDATE</button>
		<input type="hidden" name="id" value="<?php echo $row['id']; ?>"/>            
	</form><br><br><br><br>
		
	<?php }?>
	
</body>
</html>