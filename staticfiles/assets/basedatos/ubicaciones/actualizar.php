<?php
include("../../../conexiones/cone_ubicaciones.php");

$id = $_REQUEST["id"];
$nom = $_POST["nombreubi"];
$dire = $_POST["direubi"];
$tele = $_POST["teleubi"];
$correo = $_POST["correubi"];
$ubica = $_POST["ubi"];

$actualizar = "UPDATE lugar SET nombre='$nom', direccion = '$dire', telefono = '$tele', correo = '$correo', ubicacion = '$ubica' WHERE id='$id'";
$almacenar = $conexion -> query($actualizar);

if($almacenar){
    header("Location: ../../../Main_app/Admin/ubicaciones.php");
}
else{
    echo ("Lo sentimos pero no pudimos actualizar el lugar por favor contacte con el ing. Juan Diego Solorio Esquivel");
}

?>