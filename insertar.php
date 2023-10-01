<?php
include("cn.php");

$nombre = $_POST["nombre"];
$tipo = $_POST["tipo"];
$fecha = $_POST["fecha"];
$nombreE = $_POST["nombreE"];
$numero = $_POST["numero"];
$aula = $_POST["aula"];
$maquina = $_POST["maquina"];

$insertar = "INSERT INTO bd_cpu(nombre,tipo,fecha,nombreE,numero,aula,maquina)
VALUES('$nombre','$tipo','$fecha','$nombreE','$numero','$aula','$maquina')";

$resultado = mysqli_query($conexion,$insertar);
if($resultado) {
    echo "<script>alert('se ha registrado el formulario con exitos.!');
    window.history.go(-1);</script>";
} else{
    echo "<script>alert('No se pudo registrar'); window.history.go(-1);</script>";
}