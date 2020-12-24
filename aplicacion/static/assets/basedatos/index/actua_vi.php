<?php
include("../../../conexiones/coneindex.php");
$textovi = $_POST["textoviss"];

$actualizar = "UPDATE vision SET textovi='$textovi' WHERE id";
$resultado = $conexion ->query($actualizar);

if($resultado){
    header("location: ../../../Main_app/Admin/inicio.php");
}
else{
    echo ("Lo sentimos pero no pudimos actualizar el contenido de la visíon que usted escribio, por favor contacte con el ing. Juan Diego Solorio Esquivel para que pueda solucionar el problema");
}

?>