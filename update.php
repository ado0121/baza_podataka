<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="baza";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $db) or die("Connection failed");
$id= $_REQUEST['id'];
$ime= $_POST['ime'];
$prezime= $_POST['prezime'];
$fakultet= $_POST['fakultet'];
mysqli_query($conn, "UPDATE baza SET ime='$ime',prezime='$prezime',fakultet='$fakultet' where id=$id");
header("location:home.php?action");
?>