<?php
include("../../../conexiones/cone_proyectos.php");
$conten = $_POST["contenido"];

$actua = "UPDATE ta_pro SET contenido='$conten'";
$alma = $conexion -> query($actua);

if($alma){
    header("Location: ../../../Main_app/Admin/proyectos.php");
}
else{
    echo ("Lo sentimos pero no se actualizo el contenido por favor contacte con el Ing. Juan Diego Solorio Esquivel para resolver el problema. Gracias :).");
}

?>