<?php
session_start();
require_once('connection.php');

if (isset($_POST['logins'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM login WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if ($password === $row['Password']) {
            header("Location: index.php");
        } else {
            echo "Invalid password!";
        }
    } else {
        echo "User not found!";
    }

$_SESSION['username'] = $username;
}
if (isset($_POST['Back']))
{
    header("Location: register.php");
}
?>

<html>

<body>
    <div>
    <h2>Login Form</h2>
    <form action="logi.php" method="post">
         <input type="text" name="username" placeholder="username" required><br><br>
         <input type="password" name="password"  placeholder="password" required><br><br>
        <input type="submit" value="Login" name="logins"><br><br>
         <input type="submit" value="Back" name="Back">
    </form>
</div>
</body>
</html>
