<?php

include_once("connect.php");

if(isset($_POST['update']))
{	

	$id = mysqli_real_escape_string($con, $_POST['id']);
	
	$name = mysqli_real_escape_string($con, $_POST['name']);
	$type = mysqli_real_escape_string($con, $_POST['type']);
	$duration = mysqli_real_escape_string($con, $_POST['duration']);	
	$price = mysqli_real_escape_string($con, $_POST['price']);
	
		$result = mysqli_query($con, "UPDATE task SET name='$name',type='$type',duration='$duration',price='$price' WHERE id=$id");
	
		header("Location: task.php");
	}

?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($con, "SELECT * FROM task WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$name = $res['name'];
	$type= $res['type'];
	$duration = $res['duration'];
	$price= $res['price'];
}
?>
<html>
<head>	
	<title>Update task</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
	<br>
	<a href="task.php" class="btn btn-primary">Home</a>
	<br/><br/>
	
	<form name="form1" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="name" value="<?php echo $name;?>"></td>
			</tr>
			<tr> 
				<td>Type</td>
				<td><input type="text" name="type" value="<?php echo $type;?>"></td>
			</tr>
			<tr> 
				<td>Duration</td>
				<td><input type="text" name="duration" value="<?php echo $duration;?>"></td>
			</tr>
			<tr> 
				<td>Price</td>
				<td><input type="text" name="price" value="<?php echo $price;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update" class="btn btn-primary"></td>
			</tr>
		</table>
	</form>
</body>
</html>
