<?php
require("connection.php");

	$sql = "SELECT PID, HID, HName , HCondition FROM health_query
    SELECT PName FROM personal_info";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> Pid: ". $row["PID"]. "Pname".$row["PName"]. "- Name: ". $row["HName"]. " " . $row["HCondition"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>

?>