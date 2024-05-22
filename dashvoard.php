<?php
require_once("connection.php");
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: register.php"); 
    exit();
}
if($_SESSION['username'] != "Doctor" )
{

    header("Location: index.php"); 
}
?>

<?php
require "connection.php";
if(isset($_POST['btn']))
{
  $Pname=$_POST['patf'];
  $Psurname=$_POST['pats'];
  $Paddress=$_POST['add'];
  $Pcontact=$_POST['Contact'];
    $sql="INSERT into personal_info (PName,PSurname,PAddress,PContact) VALUES('$Pname','$Psurname','$Paddress','$Pcontact')";
    if ($conn->query($sql) === TRUE) {
            header("Location: condi.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
<form method="POST">
  Patient's First Name:<input type="text" name="patf" placeholder="Please enter Patient's First name" required><br><br>
  Patient's SurName:<input type="text" name="pats" placeholder="Please enter Patient's Last name" required><br><br>
  Patient's Address:<input type="text" name="add" placeholder="Enter address" required><br><br>
  Patient's contact:<input type="Number" name="Contact" placeholder="Enter Contact Number" required><br><br>
  <input type="submit" name="btn" value="Add">
</form>
