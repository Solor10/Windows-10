<?php
include("../../../conexiones/cone_proyectos.php");
$titulo = $_POST['titexto'];

$seleccionar = "UPDATE ta_pro SET titulo='$titulo'";
$almacenar = $conexion -> query($seleccionar);

if($almacenar){
    header("Location: ../../../Main_app/Admin/proyectos.php");
}
else{
    echo ("Lo sentimos pero no pudimos actualizar su cambio, por favor contacte con el ing. Juan Diego Solorio Esquivel para resolver el problema");
}
?>