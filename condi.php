
<?php
require "connection.php";
if(isset($_POST['btn']))
{
	$hname=$_POST['dis'];
	$cop=$_POST['conn'];
	$pats=$_POST['idd'];
		$sql="INSERT into health_query (PID,HName,HCondition) VALUES('$pats','$hname','$cop')";
		if ($conn->query($sql) === TRUE) {
            header("Location: condi.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
if(isset($_POST['vtn']))
{
            header("Location: logi.php");
    } 
    if(isset($_POST['ctn']))
{
            header("Location: dashvoard.php");
    } 


?>
<form method="POST">
	Disease Name:<input type="text" name="dis" placeholder="Disease Name"><br><br>
	Condition:<input type="text" name="conn" placeholder="Enter Conditions"><br><br>
	Patient's ID:<input type="Number" name="idd" placeholder="Patient's ID"><br><br>
	<input type="submit" name="btn" value="Add">
	<input type="submit" name="ctn" value="Next Patient">
	<input type="submit" name="vtn" value="Logout">
</form>
