<?php
$d = new DateTime();
$tipus_de_d = gettype( $d );
echo "La variable \$d 
      conté el valor " . $d->format( "d/m/Y") .
      " i és del tipus $tipus_de_d";
echo"<br>";
echo "El valor de \$d es $d";

/*
2. la variable es de tipo datatime
4. devuelve la fecha del sistema 
5.
*/
?>
