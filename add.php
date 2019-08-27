<html>
<head>
	<title>Add New Task</title>
</head>

<body>
<?php
//including the database connection file
include_once("connect.php");

if(isset($_POST['Submit'])) {	
	$name = mysqli_real_escape_string($con, $_POST['name']);
	$type = mysqli_real_escape_string($con, $_POST['type']);
	$duration = mysqli_real_escape_string($con, $_POST['duration']);
	$price = mysqli_real_escape_string($con, $_POST['price']);
	
			
			
		$result = mysqli_query($con, "INSERT INTO task(name,type,duration,price) VALUES('$name','$type','$duration','$price')");
		header("Location: task.php");
	}
?>
</body>
</html>
