<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
	body{

	}
	table,td {
		border: 1px solid black;
 		border-spacing: 0px;
 	}
 </style>
</head>
<body>
<?php 
$code=$_GET["paises"];
$conn = mysqli_connect('localhost','marcos','marcos123');
mysqli_select_db($conn, 'world'); 
$consulta = "SELECT city.Name NCITY ,country.Name NCOUNTRY  FROM city,country WHERE city.CountryCode=country.Code AND city.CountryCode='$code';";
$resultat = mysqli_query($conn, $consulta);
if (!$resultat) {
 		$message  = 'Consulta invàlida: ' . mysqli_error() . "\n";
 		$message .= 'Consulta realitzada: ' . $consulta;
 		die($message);
 	}

?>

 	<!-- (3.1) aquí va la taula HTML que omplirem amb dades de la BBDD -->
 	<table>
 	<!-- la capçalera de la taula l'hem de fer nosaltres -->
 	<thead><td colspan="4" align="center" bgcolor="cyan">Llistat de ciutats</td></thead>
 	<?php
 	# (3.2) Bucle while
 	while( $registre = mysqli_fetch_assoc($resultat) )
 	{
 	# els \t (tabulador) i els \n (salt de línia) son perquè el codi font quedi llegible  
 	# (3.3) obrim fila de la taula HTML amb <tr>
 	echo "\t<tr>\n";
 	# (3.4) cadascuna de les columnes ha d'anar precedida d'un <td>
 	#	després concatenar el contingut del camp del registre
 	#	i tancar amb un </td>
 	echo "\t\t<td>".$registre["NCITY"]."</td>\n";
 	echo "\t\t<td>".$registre["NCOUNTRY"]."</td>\n";
 	# (3.5) tanquem la fila
 	echo "\t</tr>\n";
 }
?>

</body>
</html>