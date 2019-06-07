<?php
/* operadores matematicos: */
// suma             +
//resta             -
// multiplicacion   *
// division         /
// mudulo           %
$suma = 3 + 2;
$resta = $suma - 1;
$multiplicacion = $resta * 5;
$division = $multiplicacion /2;

/* operadores de comparacion */
// mayor que        >
// menor que        <
// igual que        ==
// identico que     ===
// distinto que     !==

/* estructura de control */

// condicional si
$existe = true;
if ($existe) {
// if ($existe === true){
    echo "si existe<br>";
}else{
    echo "no existe<br>";
}
// interacciones
for ($i = 0; $i<= 10; $i++) {
    echo "imprime el numero $i<br>";
}

$estudiantes = ["pedro", "juan", "diego", "andres", "estevan"];
foreach($estudiantes as $estudiantes) {
    echo "estudiantes" .$estudiante.": presente<br>";
}
// selectores
$dia_numero = 3;
$dia_texto = "";
switch($dia_numero) {
    case 1;
        $dia_texto = "lunes";
        break;
case 2;
    $dia_texto = "martes";
    break;
case 3;
    $dia_texto = "miercoles";
    break;
case 4;
    $dia_texto = "jueves";
    break;
case 5;
    $dia_texto = "viernes";
    break;
case 6;
    $dia_texto = "sabado";
    break;
case 7;
    $dia_texto = "dominio";
    break;
default:
    $dia_texto = "sin definir, pues el numero esta fuera del rango 1-7";
    break;
}
echo "el numero $dia_numero correspondiente al dia $dia_texto";
