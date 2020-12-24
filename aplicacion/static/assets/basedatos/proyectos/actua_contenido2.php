<?php
include("../../../conexiones/cone_proyectos.php");

$conteni = $_POST["contenido2"];

$actualizar = "UPDATE ta_pro SET contenido2 = '$conteni'";
$almacenar = $conexion -> query($actualizar);

if($actualizar){
    header("Location: ../../../Main_app/Admin/proyectos.php");
}else{
    echo ("Lo sentimos pero no se actualizo el contenido, por favor contacte con el Ing. Juan Diego Solorio Esquivel para solucionar el problema. Gracias :).");
}
?>