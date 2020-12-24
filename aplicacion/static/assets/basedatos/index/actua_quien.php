<?php
include("../../../conexiones/coneindex.php");
$texto = $_POST["pritexto"];

$actualizar = "UPDATE quien SET textoquien='$texto' WHERE id";
$resultado = $conexion -> query($actualizar);

if($resultado){
    header("Location: ../../../Main_app/Admin/inicio.php");
}
else{
    echo ("Lo sentimos pero no pudimos actualizar el contenido que usted escribio, por favor contacte con el ing. Juan Diego Solorio Esquivel para que pueda solucionar el problema");
}

?>