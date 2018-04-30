<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="baza";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $db) or die("Connection failed");
$ime= $_POST['ime'];
$prezime= $_POST['prezime'];
$fakultet= $_POST['fakultet'];
mysqli_query($conn, "INSERT INTO baza (ime, prezime, fakultet) VALUES ('$ime', '$prezime', '$fakultet')");
header("location:home.php?action");
?>