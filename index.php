<!DOCTYPE html>
<html lang="en">
<?php
if(isset($_POST['email'])){
$SERVER="localhost";
$username="root";
$password="";
$con=mysqli_connect($SERVER, $username,$password);
if(!$con){
    die("connection failef");
}
$email=$_POST['email'];
$pass=$_POST['pass'];
$sql="INSERT INTO `test`.`details`(`email`, `password`) values('$email', '$pass');";

if($con->query($sql)==true){
    echo ('inserted');
}
else{
    echo ($con->error);
}
}
?>
    <head>
        <title>Home</title>
        <link rel="stylesheet" href="style.css">
    </head>
  
        <form action="index.php" method="post">
            <label for="email">Email</label><br>
            <input type="text" id="email" name="email"><br>
            <label for="pass">Password</label><br>
            <input type="text" id="pass" name="pass"><br><br><br>
            <input type="submit" value="Submit" ">
            <a href="login.php">Sign In here</a>
          </form>
    </body>
</html>
