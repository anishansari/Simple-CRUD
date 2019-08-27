<!DOCTYPE html >
<html>
<head>
<title>Task Login</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body >
<div align="center">

<h3>Login</h3>
    <form id="login-form" method="post" action="verify.php" >
        <table border="0.5" >
            <tr>
                <td><label for="username">User Name</label></td>
                <td><input type="text" name="username" id="username"></td>
            </tr>
            <tr>
                <td><label for="user_pass">Password</label></td>
                <td><input type="password" name="password" id="password"></input></td>
            </tr>
            
            <tr>
                
                <td><input type="submit" value="Submit" class="btn btn-primary"/>
                <td><input type="reset" value="Reset" class="btn btn-primary"/>
                
            </tr>
        </table>
    </form>
        </div>
</body>
</html>