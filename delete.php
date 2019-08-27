<?php
include("connect.php");
$id = $_GET['id'];
$result = mysqli_query($con, "DELETE FROM task WHERE id=$id");
header("Location:task.php");
?>

