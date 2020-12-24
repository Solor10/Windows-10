<?php
include("../../../conexiones/cone_proyectos.php");
$sub_ti = $_POST['sub_titulo2'];

$actua = "UPDATE ta_pro SET sub_titulo2 = '$sub_ti'";
$almacenar = $conexion -> query($actua);

if($almacenar){
    header("Location: ../../../Main_app/Admin/proyectos.php");
}else{
    echo ("Lo sentimos pero no pudimos actualizarlo por favor cantacta con el Ing. Juan Diego Solorio Esquivel para resolver el problema. Gracias :).");
}
?>