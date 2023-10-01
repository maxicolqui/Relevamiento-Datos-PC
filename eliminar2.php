<?php
include("cn.php");

$id = $_GET['id'];
$eliminar = "DELETE FROM bd_cpu2 WHERE id = '$id'";

$resultadoEliminar = mysqli_query($conexion, $eliminar);

if ($resultadoEliminar){
    header("Location: edicion2.php");
}else{
    echo"<script>alert('No se pudo eliminar'); window.history.go(-1);</script>" ;
}