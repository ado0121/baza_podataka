<html>

<script type="text/javascript">
function validateForm()
{ var un=document.form1.username.value;
  var pd=document.form1.psd.value;
  if(un=="" && pd!="")
  {	  
  document.getElementById("errorMessage").innerHTML="Please enter username";return false;	}
  if(un!="" && pd=="")
  {	   document.getElementById("errorMessage").innerHTML="Please enter password"; return false;	}
  if(un=="" && pd=="")
	  {	 document.getElementById("errorMessage").innerHTML="Please enter username & password";return false;	}
	}
</script>
<body>

<?PHP 
if($_REQUEST['action']=='edit')
{
?>
<form id="form1" name="form1" method="post" action="update.php?id=<?PHP echo $_REQUEST['id']; ?>" onSubmit="return validateForm();">
<table width="200" border="1">
  <tr>
    <td>Ime</td>
    <td><label for="ime"></label>
       <input type="text" name="ime" id="ime" value="<?PHP echo $_REQUEST['ime']; ?>" /></td>
   </tr>
  <tr>
    <td>Prezime</td>
    <td><label for="prezime"></label>
      <input type="text" name="prezime" id="prezime" value="<?PHP echo $_REQUEST['prezime']; ?>" /></td>
  </tr>
 <tr>
    <td>Fakultet</td>
    <td><label for="fakultet"></label>
       <input type="text" name="fakultet" id="fakultet" value="<?PHP echo $_REQUEST['fakultet']; ?>" /></td>
   </tr>
  <tr>
    <td><input type="submit" name="submit" id="submit" value="Insert" /></td>
    <td><input type="reset" name="Reset" id="Reset" value="Reset" /></td>
  </tr>
</table>

</form>
<?PHP
}
else
{
?>
<form id="form1" name="form1" method="post" action="insert.php" onSubmit="return validateForm();">
<table width="200" border="1">
  <tr>
    <td>Ime</td>
    <td><label for="username"></label>
       <input type="text" name="ime" id="ime" value="" /></td>
   </tr>
  <tr>
    <td>Prezime</td>
    <td><label for="psd"></label>
      <input type="text" name="prezime" id="prezime" value="" /></td>
  </tr>
  <tr>
    <td>Fakultet</td>
    <td><label for="username"></label>
       <input type="text" name="fakultet" id="fakultet" value="" /></td>
   </tr>
   
  <tr>
    <td><input type="submit" name="submit" id="submit" value="Insert" /></td>
    <td><input type="reset" name="Reset" id="Reset" value="Reset" /></td>
  </tr>
</table>

</form>
<?PHP } ?>
<p id="errorMessage" style="color:#C00; font-style:italic;"></p>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="baza";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $db) or die("Connection failed");

echo "<table border='2'>";
echo "<th>id</th><th>Ime</th><th>Prezime</th><th>Fakultet</th>";
$result=mysqli_query($conn, "SELECT * FROM baza ");
while($ispis=mysqli_fetch_array( $result ))
{ echo "<tr>";
$id=$ispis['id'];$ime=$ispis['ime'];$prezime=$ispis['prezime'];$fakultet=$ispis['fakultet'];
 echo "<td>".$ispis['id']." </td>";
   echo "<td>".$ispis['ime']."</td>";
   echo "<td>".$ispis['prezime']." </td>";
   echo "<td>".$ispis['fakultet']."</td>";
   echo "<td><a href='delete.php?id=$id'>Delete</a></td>
   <td><a href='home.php?id=$id&action=edit&ime=$ime&prezime=$prezime&fakultet=$fakultet'>Update</a></td>";
	echo "</tr>";
	}
echo "</table>";

?>

</body>
</html>