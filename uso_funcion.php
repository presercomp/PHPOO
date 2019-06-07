<?php

include 'funciones.class.php';
$fn = new Funciones();
$RUT = 20007559;
$DV = $fn->getDV($RUT);

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    En dígito verificador de <?= $RUT; ?> es <?= $DV;?>
</body>
</html>

