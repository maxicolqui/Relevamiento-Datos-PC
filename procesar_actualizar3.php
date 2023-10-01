<?php
include("cn.php");

$id = $_POST["id"];
$numero = $_POST["numero"];
$marca = $_POST["marca"];
$estado = $_POST["estado"];
$marcaT = $_POST["marcaT"];
$estadoT = $_POST["estadoT"];
$marcaMouse = $_POST["marcaMouse"];
$estadoMouse = $_POST["estadoMouse"];
$marcaP = $_POST["marcaP"];
$estadoP = $_POST["estadoP"];
$maquina = $_POST["maquina"];

//actualizar los datos

$actualizar = "UPDATE bd_cpu3 SET numero='$numero', marca='$marca', estado='$estado', marcaT='$marcaT', estadoT='$estadoT', marcaMouse='$marcaMouse'
                , estadoMouse='$estadoMouse', marcaP='$marcaP', estadoP='$estadoP',maquina='$maquina' WHERE id='$id'";

$resultado = mysqli_query($conexion, $actualizar);

if($resultado) {
    echo "<script>alert('se han modificado los datos con exitos.!');
    window.history.go(-3);</script>";
} else{
    echo "<script>alert('No se han podido modificar los datos.!'); window.history.go(-1);</script>";
}