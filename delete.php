<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="baza";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $db) or die("Connection failed");
$id= $_REQUEST['id'];
mysqli_query($conn, "delete  FROM baza where id=$id");
header("location:home.php?action");
?>