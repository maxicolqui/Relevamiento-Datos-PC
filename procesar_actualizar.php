<?php
include("cn.php");

$id = $_POST["id"];
$nombre = $_POST["nombre"];
$tipo = $_POST["tipo"];
$fecha = $_POST["fecha"];
$nombreE = $_POST["nombreE"];
$numero = $_POST["numero"];
$aula = $_POST["aula"];
$maquina = $_POST["maquina"];

//actualizar los datos

$actualizar = "UPDATE bd_cpu SET nombre='$nombre', tipo='$tipo', fecha='$fecha', nombreE='$nombreE', numero='$numero', aula='$aula', maquina='$maquina'
                WHERE id='$id'";

$resultado = mysqli_query($conexion, $actualizar);

if($resultado) {
    echo "<script>alert('se han modificado los datos con exitos.!');
    window.history.go(-3);</script>";
} else{
    echo "<script>alert('No se han podido modificar los datos.!'); window.history.go(-1);</script>";
}