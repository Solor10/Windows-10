<?php
include("../../../conexiones/coneindex.php");
$textomis = $_POST["textomiss"];

$actualizar = "UPDATE mision SET textomi='$textomis' WHERE id";
$resultado = $conexion -> query($actualizar);

if($resultado){
    header("Location: ../../../Main_app/Admin/inicio.php");
}
else{
    echo("Lo sentimos pero no pudimos actualizar el contenido de la mision que usted escribio, por favor contacte con el ing. Juan Diego Solorio Esquivel para que pueda solucionar el problema");
}
?>