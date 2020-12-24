<?php
require("../../../conexiones/coneindex.php");
$imagen = addslashes(file_get_contents($_FILES['imagenmi']['tmp_name']));

$actualizar = "UPDATE  mision SET imagen = '$imagen' WHERE id ";
$almacenar = $conexion -> query($actualizar);

if($almacenar){
    header("Location: ../../../Main_app/Admin/inicio.php");
}
else{
    echo ("No se pudo actualizar la imagen por favor contacte al ing. Juan Diego Solorio Esquivel para que pueda solucionar el error");
}
?>