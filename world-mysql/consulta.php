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
while( $registre = mysqli_fetch_assoc($resultat) )
 	{
$img=$registre["Name"].".png";
echo '<input type="radio" name="country" value='.$registre["Code"].'>'.$registre["Name"].'</option>';
echo "<img src='banderas/$img'>";
 }
 echo "<br>";
echo "<input type='submit' name='Submit'>";
echo "</select>";
echo "<form>";

?>


</body>
</html>