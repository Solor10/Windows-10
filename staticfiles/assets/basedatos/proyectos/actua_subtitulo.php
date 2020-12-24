<?php
include("../../../conexiones/cone_proyectos.php");
$texto = $_POST["pritexto1"];

$actua = "UPDATE ta_pro set sub_titulo = '$texto'";
$alma = $conexion -> query($actua);

if($alma){
    header("Location: ../../../Main_app/Admin/proyectos.php ");
}
else{
    echo ("Lo sentimos pero no se actualizo el contenido por favor contacte con el Ing. Juan Diego Solorio Esquivel para que pueda solucionar el problema, gracias :).");
}
?>