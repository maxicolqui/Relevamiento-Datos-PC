<?php
$conexion = mysqli_connect("localhost","root","","bd_prueba");
mysqli_set_charset($conexion,"utf8");
if (!$conexion) {
    echo'Error al conectar a la base de datos';
}
else{
    
}