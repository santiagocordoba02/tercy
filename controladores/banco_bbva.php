<?php
//paso 1: importar la libreria
    require "../Config/conexion2.php";

//paso 2 almacenar las variables

$documento = $_POST ["documento"];
$nombre = $_POST ["nombre"];
$año_nacimiento = $_POST ["fecha_nacimiento"];
$monto_cuenta = $_POST ["valor_cuenta"];
$nro_celular = $_POST ["nro_telefono"];

//paso 3 armar el sql en una variable

$sql_insertar = "INSERT INTO registronequi
(fecha_sys, documento, nombre, fecha_nacimiento, valor_cuenta, celular) 
VALUES (now(), '".$documento."', '".$nombre."','".$año_nacimiento."', '".$monto_cuenta."', '".$nro_celular."')";

//paso 4: enviar a la BD

if($dbh->query($sql_insertar))
{

   echo "Informacion registrada correctamente";

}else
{

    echo "Error registrando la informacion";

}

?> 