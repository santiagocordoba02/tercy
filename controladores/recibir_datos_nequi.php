<?php
//paso 1: importar la libreria
    require "../config/conexion.php";

//paso 2 almacenar las variables

$cod = $_POST ["codigo_pago"];
$valor_pagado = $_POST ["valor_pagado"];
$valor_restar = $_POST["valor_restar"];



//paso 3 armar el sql en una variable

$sql_insertar = "INSERT INTO pago
( cod, valor_pagado, valor_restar) 
VALUES (now(), '".$cod."','".$valor_pagado."', '".$valor_restar."')";

//paso 4: enviar a la BD1

if($dbh->query($sql_insertar))
{
   echo "Persona borrada correctamente";
}else
{
    echo "Error borrando la persona";
}
?> 