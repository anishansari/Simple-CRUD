<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'task');
 
/* connection attemp */
$con = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);



// connection check
if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>