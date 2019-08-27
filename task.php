<?php
include("connect.php");
$result = mysqli_query($con, "SELECT * FROM task ORDER BY id DESC");  
?>
<html>
<head>  
    <title>MainPage</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <br>
<a href="add.html" class="btn btn-primary">Add New task</a><br/><br/>

    <table width='80%' border=0 class="table">

    <tr bgcolor='#CCCCCC'>
        <td>Name</td>
      
        <td>Type</td>
        <td>Duration</td>
        <td>Price</td>
        <td> Action</td>
    </tr>
    <?php 
    
    while($res = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$res['name']."</td>";
        echo "<td>".$res['type']."</td>";
        echo "<td>".$res['duration']."</td>";
        echo "<td>".$res['price']."</td>";  
        echo "<td><a  href=\"edit.php?id=$res[id]\" >Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";       
    }
    ?>
    </table>
</body>
</html>
