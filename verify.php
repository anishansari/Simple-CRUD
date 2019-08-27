<?php  
 require('connect.php');

if (isset($_POST['username']) and isset($_POST['password'])){
$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM `users` WHERE username='$username' and password='$password'";
 
$result = mysqli_query($con, $query) or die(mysqli_error($con));
$count = mysqli_num_rows($result);

if ($count == 1){

echo "<script type='text/javascript'>alert('Login Credentials verified')</script>";
header("Location:task.php");

}else{
echo "<script type='text/javascript'>alert('Invalid Login Credentials')</script>";

}
}
?>