<?php
include("../../../conexiones/cone_productos.php");

$nopro = $_POST["nombrepro"];
$imge = addslashes(file_get_contents($_FILES['imagepro']['tmp_name']));
$description = $_POST["despro"];
$presio = $_POST["prepro"];

$insertar = "INSERT INTO venta(nombre, imagen, descripcion, presio) VALUES ('$nopro', '$imge', '$description', '$presio')";
$almecenar = $conexion -> query($insertar);

if($almecenar){
    header("Location: ../../../Main_app/Admin/productos.php");
}
else{
    echo("Lo sentimos pero no pudimos agregar el producto, por favor contacte con el ing. Juan Diego Solorio Esquivel.");
}

?>