<?php
include("../../../conexiones/cone_ubicaciones.php");
$id = $_REQUEST["id"];
 $eliminar = "DELETE FROM lugar WHERE id ='$id'";
 $almacenar = $conexion -> query($eliminar);

 if($almacenar){
     header("Location: ../../../MAin_app/Admin/ubicaciones.php");
 }
 else{
     echo ("Lo sentimos pero no pudimos eliminar la ubicacion seleccionada por un fallo de la base de datos, por favor contacte con el ing. Juan Diego Solorio Esquivel.");
 }
?>