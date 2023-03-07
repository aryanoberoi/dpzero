<!DOCTYPE html>
<html lang="en">
<?php
if(isset($_POST['email'])){
$SERVER="localhost";
$username="root";
$password="";
$dbname="test";
$con=mysqli_connect($SERVER, $username,$password,$dbname);
if(!$con){
    die("connection failef");
}
$email=$_POST['email'];
$pass=$_POST['pass'];
$sql="select * from details where email='$email' and password='$pass'";
    
$result = $con->query($sql);
    
if ($result->num_rows > 0){
	include("./player.php");
	exit();
	}
else{
	echo " You Have Entered Incorrect Password";
	exit();
}
}
?>
    <head>
        <title>Home</title>
    </head>
    <link rel="stylesheet" href="style.css">
        <form action="login.php" method="post">
            <label for="email">Email</label><br>
            <input type="text" id="email" name="email"><br>
            <label for="pass">Password</label><br>
            <input type="text" id="pass" name="pass"><br><br><br>
            <input type="submit" value="Submit" ">
          </form>
    </body>
</html>
