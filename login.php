<?php

include "MySQL.php";

$mysql = new MySQL("localhost", "3306", "pruebamelo", "root", "12345678");
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];

$consulta = "SELECT * FROM usuario WHERE nombre = '$usuario' AND clave = '$clave'";
$resultado = $mysql->execute($consulta);
if ($mysql->numFilas > 0){
    header("Location: dashboard.html");
} else {
    echo "Nombre de usuario / clave incorrecto(s) <a href='login.html'>Volver</a>";
}