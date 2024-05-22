
<?php
require "connection.php";
if(isset($_POST['btn']))

{
	$name=$_POST['name'];
	$username=$_POST['user'];
	$password=$_POST['password'];
	$sql="INSERT into login (Username,Name,Password) VALUES('$username','$name','$password')";
		if ($conn->query($sql) === TRUE) {
            header("Location: logi.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
if(isset($_POST['tn']))
{
	header("Location:logi.php");
}
?>
<form method="POST">
	Username:<input type="text" name="user" placeholder="Please enter your Username" required><br><br>
	Name:<input type="text" name="name" placeholder="Enter your name" required><br><br>
	Password:<input type="password" name="password" placeholder="Enter password" required><br><br>
	<input type="submit" name="btn" value="Register">
		<input type="submit" name="tn" value="Login">
	
</form>
