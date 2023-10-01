<?php
include("cn.php");

$procesador = $_POST["procesador"];
$modelo = $_POST["modelo"];
$numero2 = $_POST["numero2"];
$ram = $_POST["ram"];
$alma = $_POST["alma"];
$tipo = $_POST["tipo"];
$so = $_POST["so"];
$virus = $_POST["virus"];
$inte = $_POST["inte"];
$maquina = $_POST["maquina"];


$insertar = "INSERT INTO bd_cpu2(procesador,modelo,numero2,ram,alma,tipo,so,virus,inte,maquina)
VALUES('$procesador','$modelo','$numero2','$ram','$alma','$tipo','$so','$virus','$inte','$maquina')";

$resultado = mysqli_query($conexion,$insertar);
if($resultado) {
    echo "<script>alert('se ha registrado el formulario con exitos.!');
    window.history.go(-1);</script>";
} else{
    echo "<script>alert('No se pudo registrar');</script>";
}