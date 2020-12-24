<?php
include("../../../conexiones/cone_productos.php");

$id = $_REQUEST["id"];

$eliminar = "DELETE FROM venta WHERE id = '$id'";
$resultado = $conexion -> query($eliminar);

if($resultado){
    header("Location: ../../../Main_app/Admin/productos.php");
}
else{
    echo ("Lo sentimos pero no se puede eliminar, por favor contacte con el ing. Juan Diego Solorio Esquivel, gracias");
}
?>