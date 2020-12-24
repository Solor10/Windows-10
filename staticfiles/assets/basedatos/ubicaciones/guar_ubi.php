<?php
include("../../../conexiones/cone_ubicaciones.php");
$nom = $_POST["nombreubi"];
$dire = $_POST["direubi"];
$tel = $_POST["teleubi"];
$correo = $_POST["correubi"];
$ubi = $_POST["ubi"];

$insertar = "INSERT lugar(nombre, direccion, telefono, correo, ubicacion) VALUE ('$nom', '$dire', '$tel', '$correo', '$ubi')";
$almacenar = $conexion -> query($insertar);

if($almacenar){
    header("Location: ../../../MAin_app/Admin/ubicaciones.php");
}
else{
    echo ("Lo sentimos pero no pudimos crear la ubicacion, por favor contacte al ing. Juan Diego Solorio Esquivel para que pueda solucionar el error");
}
?>