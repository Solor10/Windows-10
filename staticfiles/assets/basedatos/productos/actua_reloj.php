<?php
include("../../../conexiones/cone_productos.php");

$reloj = $_POST["prore"];

$actualizar = "UPDATE reloj SET fecha = '$reloj' WHERE id";
$almacenar = $conexion -> query($actualizar);

if($almacenar){
    header("Location: ../../../Main_app/Admin/productos.php");
}
else{
    echo ("No se puede actualizar por favor contacte con el ing. Juan Diego Solorio Esquivel para resolver dicho problema.");
}
?>