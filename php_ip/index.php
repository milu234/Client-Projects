<?php
	include('db.php'); 
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<title></title>
	<style type="text/css">
	table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
	</style>
</head>
<body>
	<form action="insert.php" method="post">
		<p>Name  : <input type="text" name="name"  ></p>
		<p>Contact number : <input type="text" name="cn"></p>
		<input type="submit" name="submit">
	</form><br><br><br><br>
	
		<table>
			<tr>
				<th>Name</th>
				<th>Contact</th>
				<th>Delete</th>
				<th>Edit</th>
			</tr>
			<?php
	$v=mysqli_query($conn,"SELECT * from details");
	
	while ($row = $v->fetch_assoc()) {?>
		<tr>
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['contact']; ?></td>
			
			<form method="get" action="delete.php" >
			<td><button type="submit" name="delete" ><i class="fas fa-trash-alt"></i></button></td>
			<input type="hidden" name="id" value="<?php echo $row['id'] ?>" >
			</form>
			
			<form method="get" action="edit.php" >
			<td><a href="edit.php?edit=<?php echo $row['id']; ?>" ><i class="far fa-edit" style="text-decoration: none" ></i></a></td>
			</form>
			
		</tr>
</table>

	<?php }?>
	
	<div>
	<?php
	$v=mysqli_query($conn,"SELECT * from details");
	$count = mysqli_num_rows($v);
	$a = ceil($count/10);

	for ($i=1; $i <=$a ; $i++) { ?>
		<a href=""><?php echo $i." "; ?></a>
		<?php
		
	}

	 ?>
	 </div>
		
</body>
</html>