<?php
include("../../../conexiones/cone_productos.php");
$id = $_REQUEST["id"];
$nom = $_POST["nombrepro"];
$imag = addslashes(file_get_contents($_FILES['imagepro']['tmp_name']));
$descrip = $_POST["despro"];
$pres = $_POST["prepro"];


$actuali = "UPDATE venta SET nombre ='$nom', imagen ='$imag', descripcion ='$descrip', presio ='$pres' WHERE id ='$id'";
$almacenar = $conexion -> query($actuali);

if($almacenar){
    header("Location: ../../../Main_app/Admin/productos.php");
}
else{
    echo ("Lo sentimos pero no pudimos actualizar su producto, por favor contacte al ing. Juan Diego Solorio Esquivel");
}

?>