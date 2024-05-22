<?php
require_once("connection.php");
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: register.php"); 
    exit();
}
$username = $_SESSION['username'];
if($_SESSION['username'] == "Doctor" )
{

    header("Location: dashvoard.php"); 
}
$conn->close();
?>
</head>
<title>Health Management System</title>
</head>
<link rel="stylesheet" type="text/css" href="home_style.css">

<html>
<body>
    <nav>
    <div class="left">
         <a href="index.php">Aayush</a>
    </div>
    <div class="right">
         <a href="doc.php">Doctors Info</a>
         <a href="you.php">Your health</a>
         <a href="emg.php">Emergency Numbers</a>
         <a href="logouta.php" class = "lgout">LOGOUT</a>
    </div>
    </nav>

<div id="home">
    <div class="div1"></div>
    <div></div>
</div>
<div id="about"></div>
<div id="contact"></div>

</body>
</html>

