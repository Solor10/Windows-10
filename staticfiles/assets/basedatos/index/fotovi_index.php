<?php
include("../../../conexiones/coneindex.php");

$imagen = addslashes(file_get_contents($_FILES['imagenvi']['tmp_name']));

$actualizar = "UPDATE vision SET imagen='$imagen' WHERE id";
$resultado = $conexion -> query($actualizar);

if($resultado){
    header("Location: ../../../Main_app/Admin/inicio.php");
}
else{
    echo ("Lo sentimos pero no se pudo actualizar la foto, por favor contacte al ing. Juan Diego Solorio Esquivel para que pueda solucionar el error");
}

?>