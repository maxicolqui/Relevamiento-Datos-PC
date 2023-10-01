<?php
include("cn.php");

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

$insertar = "INSERT INTO bd_cpu3(numero,marca,estado,marcaT,estadoT,marcaMouse,estadoMouse,marcaP,estadoP,maquina)
VALUES('$numero','$marca','$estado','$marcaT','$estadoT','$marcaMouse','$estadoMouse','$marcaP','$estadoP','$maquina')";

$resultado = mysqli_query($conexion,$insertar);
if($resultado) {
    echo "<script>alert('se ha registrado el formulario con exitos.!');
    window.history.go(-1);</script>";
} else{
    echo "<script>alert('No se pudo registrar'); window.history.go(-1);</script>";
}