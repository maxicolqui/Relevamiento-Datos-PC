<?php
	include("cn.php");
	$usuarios = "SELECT * FROM bd_cpu";
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Carga de Datos</title>
        <link rel="stylesheet" href="mostrar.css">
    </head>

    <body>
        <div class="table">
            <div class="table_title">Datos Cargados</div>

            <div class="tabla-header">establecimiento</div>
            <div class="tabla-header">tipo</div>
            <div class="tabla-header">fecha relevamiento</div>
            <div class="tabla-header">encargado</div>
            <div class="tabla-header">ID producto</div> 
            <div class="tabla-header">aula</div>
            <div class="tabla-header">N° de maquina</div>


            <?php $resultado = mysqli_query($conexion , $usuarios);
            while($row=mysqli_fetch_assoc($resultado)) { ?>
                <div class="item"><?php echo $row["nombre"];?></div>
                <div class="item"><?php echo $row["tipo"];?></div>
                <div class="item"><?php echo $row["fecha"];?></div>
                <div class="item"><?php echo $row["nombreE"];?></div>
                <div class="item"><?php echo $row["numero"];?></div>
                <div class="item"><?php echo $row["aula"];?></div>
                <div class="item"><?php echo $row["maquina"];?></div>

                <?php } mysqli_free_result($resultado);?>
        </div>
    </body>
</html>