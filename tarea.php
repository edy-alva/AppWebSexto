<?php 
/*
	Tarea 1 de Aplicaciones Web
	Por: Eduardo Alvarado
	Curso: Sexto Modalidad Online
*/

// a. Declaracion de variables

$edad = 40;
$factorRiesgo = 3.25;
$nombre = "Eduardo";
$apellido = "Alvarado";
$activo = true;
$listaAgravantes = array("Fuma","Bebe Licor","Sin Ejercicio");

echo "Edad: ".$edad; echo "<br>";
echo "Factor Riesgo: ".$factorRiesgo; echo "<br>";
echo "Nombre: ".$nombre; echo " ";
echo $apellido; echo "<br>";
echo "Estado: ".$activo; echo "<br>";
foreach($listaAgravantes as $clave => $agravante)
{
	$indice = (int)$clave+1;
    echo "Agravante ".$indice.": ".$agravante; echo "<br>";
}
	

//  b. Operaciones Aritméticas

echo "Riesgo por la edad: ".$edad*$factorRiesgo; echo "<br>";

//   c. Manipulación de Cadenas


// d. Uso de Condicionales



// e. Creación de un Array



?>