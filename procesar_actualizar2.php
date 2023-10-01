<?php
include("cn.php");

$id = $_POST["id"];
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

//actualizar los datos

$actualizar = "UPDATE bd_cpu2 SET procesador='$procesador', modelo='$modelo', numero2='$numero2', ram='$ram', alma='$alma', tipo='$tipo'
                , so='$so', virus='$virus', inte='$inte',maquina='$maquina'  WHERE id='$id'";

$resultado = mysqli_query($conexion, $actualizar);

if($resultado) {
    echo "<script>alert('se han modificado los datos con exitos.!');
    window.history.go(-3);</script>";
} else{
    echo "<script>alert('No se han podido modificar los datos.!'); window.history.go(-1);</script>";
}