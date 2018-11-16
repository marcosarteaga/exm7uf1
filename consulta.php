<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php 
$conn = mysqli_connect('localhost','marcos','marcos123');
mysqli_select_db($conn, 'world'); 
$consulta = "SELECT * FROM country;";
$resultat = mysqli_query($conn, $consulta);
echo "<form action='resultadocity.php' method='get' target='_blank'>";
echo "<select name='paises'>";
while( $registre = mysqli_fetch_assoc($resultat) )
 	{

echo '<option value='.$registre["Code"].'>'.$registre["Name"].'</option>';

 }
echo "<input type='submit' name='Submit'>";
echo "</select>";
echo "<form>";

?>


</body>
</html>