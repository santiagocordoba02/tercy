<script src="../js/sweetalert2@11.js"></script>
.
<?php
//paso 1: importar la libreria
    require "../Config/conexion2.php";

//paso 2 almacenar las variables

$codigo = $_POST ["borrar"];


//paso 3 armar el sql en una variable

$sql_insertar = "DELETE FROM personas WHERE ".$codigo."";

//paso 4: enviar a la BD1

if($dbh->query($sql_insertar))
{
   echo '<script>
   Swal.fire({
     title: "¡borrando!",
     text: "PERSONA BORRADA CORRECTAMENTE",
     icon: "success",
     showConfirmButton: false
   });
   setTimeout(function(){
     window.location.href = "../Borrar_usuario.html";
   }, 3000); // Redirecciona después de 3 segundos
 </script>';

}else
{

    echo "Error borrando la persona";

}

?> 